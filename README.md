# Accident-alert-android-app

## Overview:
Accident alert using Android application builds upon the existing system by adding more advanced features : Once the patient has been taken to the hospital, the ambulance will continue to update the situation. If a patient is admitted, the hospital's app allows them to update their status. This aids in preparing and updating the designated hospital. Additionally, the hospital and police are given access to the user's details, enabling the hospital to view the patient's medical records and the police to see the information they need in the event of an accident. If an  accident  occur in rural area or populated area, this application is more useful for victims.

## Module Description:
### 1. User:
**Register:** User can register using personal details.<br>
**Login:** User can login in his personal account email id and password.<br>
**Profile:** User can edit their profile as well as add Emergency Contacts.<br>
**Home:** User will be able to see the Sensor readings i.e., Sound Meter and Accelerometer readings. User can also stop/start the detection system.<br>
**Backgroud:** The system in the background will be continuously monitoring the Sound decibel value and accelerometer for any Accident type impacts. If it finds the App Notifies the User to verify if it’s a false alarm, if no action is done in 5 secs the Ambulance is assigned & notifies Hospital, Ambulance and Police about the accident with the location & User details.<br>
**History:** History of Accident detections & details.<br>
**Notifications:** User will be notified if system detects an Accident.<br>
<br>

### 2. Ambulance:
**Login:** Ambulance driver can login his account using id and password.<br>
**Home:** The driver can see the current accident location along with the User details, the driver can directly navigate through Google Maps. The Driver can update the status whether he has picked/dropped the User.<br>
**Notifications:** The driver will get a notification if it is assigned a Pickup.<br>

### 3. Hospital:
**Login:** Hospital User can login his account using id and password.<br>
**Home:** The User can see the current accident location assigned to his Hospital if any. Hospital can also update the status whether the user has been admitted in the Hospital.<br>
**View Accidents:** List of all the Accidents and details about it assigned to his Hospital. <br>
**Manage Ambulance:** Hospital can also manage their owned Ambulances.<br>
**Notifications:** The Hospital will get a notification if it is assigned a Pickup.<br>

### 4. Police:
**Login:** Police can login his account using id and password.<br>
**Home:** Police is able to see to Today’s accident specifically or filter date wise to see previous ones.<br>
**Notifications:** Police will get a notification if it is assigned a Pickup.<br>

## Requirements:
### Hardware Requirement: 
Laptop or PC<br>
Android Phone (6.0 and above)<br>

### Software Requirement:
**FRONT END:**  Html, Bootstrap(CSS Library), JavaScript<br>
**BACK END:** Php<br>
**DATABASE:** MySQL
<br>
## Note:
**The MYSQL database is used to store all the data and in the backend we will use PHP which is a functionality to link and validate the front end data and the database.**<br>
**We will create our application as responsive with the help of bootstrap and host our application live in 000.webhost.com** <br>
**By using a third-party service, we convert the web application into Android Mobile Application.**
**We will implement Accelerometer and GPS Sensors in future.**
