long counter = 0;
boolean runCounter = false;
char Incoming_value = 0;
unsigned long lastPrint;

void setup() {
  //Serial3.begin(9600);
  Serial.begin(9600);
  Serial.println("Run Counter Demo");
}

void loop() {

  if (Serial.available() > 0)
  {
    Incoming_value = Serial.read();
    if (Incoming_value == '>' || Incoming_value == '.')
      Serial.println(Incoming_value);
  }

  if (Incoming_value == '>' && runCounter == false)
  {
    Serial.println("Start Counter");
    runCounter = true;
  }

  if (Incoming_value == '.' && runCounter == true)
  {
    Serial.println("Stop Counter");
    runCounter = false;
    counter = 0;//reset counter value is required
  }

  if (runCounter && millis() - lastPrint >= 500)
  {
    lastPrint = millis();
    counter++;
    Serial.println(counter);
  }

  if (counter > 10 )
  {
        Serial.println("The Place is Crowded");
  }
}
