#include <WiFi.h>
const char* ssid     = "";      // nombre de la red
const char* password = "";      // Password
const char* host = "";  // IP serveur - Server IP  jecuta en comando ipconfig en el cmd y es la ip que esta asignada en ipV4
const int   port = 80;            // Port serveur - Server Port
const int   watchdog = 5000;        // Fréquence du watchdog - Watchdog frequency
unsigned long previousMillis = millis(); 


#include "DHT.h"        
#define DHTTYPE DHT11   

#define dht_dpin 5
DHT dht(dht_dpin, DHTTYPE);
//a este royecto se incluyo un semaforo por eso la declaracion de los pines
#define pinVerde 23
#define pinNaranja 22
#define pinRojo 21
void setup(void)
{ 
  pinMode(pinVerde,OUTPUT);
  pinMode(pinNaranja,OUTPUT);
  pinMode(pinRojo,OUTPUT);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
  
  dht.begin();
  Serial.begin(9600);
  Serial.println("Humedad y Temperatura\n\n");
  delay(700);

}
void loop() {
    float h = dht.readHumidity();
    float t = dht.readTemperature();         
    Serial.print("Humedad = ");
    Serial.print(h);
    Serial.print("%  ");
    Serial.print("Temperatura = ");
    Serial.print(t); 
    Serial.println("°C  ");

    unsigned long currentMillis = millis();
    
  if ( currentMillis - previousMillis > watchdog ) {
    previousMillis = currentMillis;
    WiFiClient client;
  
    if (!client.connect(host, port)) {
      Serial.println("Fallo al conectar");
      return;
    }

    if(t<25){
      digitalWrite(pinVerde,HIGH);
      digitalWrite(pinRojo,LOW);
      digitalWrite(pinNaranja,LOW);
    }else if(t>25 && t<27){
       digitalWrite(pinNaranja,HIGH);
       digitalWrite(pinVerde,LOW);
       digitalWrite(pinRojo,LOW);
    }
    else if(t>27){
      digitalWrite(pinRojo,HIGH);
      digitalWrite(pinVerde,LOW);
      digitalWrite(pinNaranja,LOW);
    }

    String url = "/esp/index.php?temp="; // modifica la ruta dependiendo de donde agreges tu capeta esp
    url += t;
    url += "&hum=";
    url += h;
    
    // Enviamos petición al servidor
    client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" + 
               "Connection: close\r\n\r\n");
    unsigned long timeout = millis();
    while (client.available() == 0) {
      if (millis() - timeout > 5000) {
        Serial.println(">>> Client Timeout !");
        client.stop();
        return;
      }
    }
  
    // Leemos la respuesta del servidor
    while(client.available()){
      String line = client.readStringUntil('\r');
      Serial.print(line);
    }
  }
  delay(10000);
} 
