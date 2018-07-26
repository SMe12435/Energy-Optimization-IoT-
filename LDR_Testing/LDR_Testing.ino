void setup()
{
Serial.begin(9600);
}

void loop()
{
unsigned int AnalogValue1;
AnalogValue1 = analogRead(A0);
Serial.println(AnalogValue1);
Serial.println();

unsigned int AnalogValue2;
AnalogValue2 = analogRead(A1);
Serial.println(AnalogValue2);
Serial.println();
Serial.println();
Serial.println();
Serial.println();
delay(1000);



}
