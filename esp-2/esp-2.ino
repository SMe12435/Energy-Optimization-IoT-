#include<ESP8266WiFi.h>
#define key "KNRDYFIA4866U071"
const char* host="184.106.153.149";  //ip address of thingspeak server

const int ledPin = 4;

void setup() {
  Serial.begin(115200);
  Serial.println();
  WiFi.begin("abcd","12345678");
  while(WiFi.status()!=WL_CONNECTED){
    delay(500);
    Serial.println(".");
  }
  Serial.print(WiFi.SSID());
  Serial.println("connected");

  digitalWrite(ledPin, HIGH);
  

}

void loop() {
  WiFiClient client;
  if(client.connect(host,80)){
    Serial.println("connected");
    Serial.println("sending request");
    client.print(String("GET /update?key=")+key+"&field1="+String(digitalRead(ledPin))+"\r\n\r\n\r\n");  //sending analog value at gpio2 to field1 of thingspeak
    Serial.println("response");
    while(client.connected()){
      if(client.available()){
        String line=client.readStringUntil('\n');         
        Serial.println(line);                      //response
      }
    }
    client.stop();                     //disconnect connection
    Serial.println("disconnected");
  }
  delay(6000);
}
