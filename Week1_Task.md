
## how does the internet works ?

the internet is a collection of complex network of optical fiber cables, switches, routers, personal devices, servers and other devices.
the network operation can be explained through these steps
* In the user device after entering the domain name like youtube.com in the browser
* the browser sends the request to the domain name server ( DNS ) to get the corresponding IP address.
* After getting the IP address, the browser forward the request to the data center ( server corresponding to that IP address ) through the complex network of optical fiber, switches, routers and other network devices.
* once the server gets request to access a particular website, it starts to sends the data
* the data is transferred in digital format via the network.
* these signals are received by the router 
* the router converts these signals into electrical signals 
* then these signals are transmitted to the corresponding device using WIFI or ethernet
note: the data are transferred via network in packets.

## How The Web Works
the same process of working of the internet<br>
Notes:
* the web is more than HTML getting sent back and displayed.
* the web is any interaction where there is a server and user device communicates with that server.
* http: standardize how the request and response should look like.
* the web is a service that allow computers share and exchange data safely.

## The Client Server Architecture
Web<br>
	&emsp;The web is referred to as client-server communication because there is always a computer that asks for data (client) and the computer that gives the data (server).<br>
Client<br>
	&emsp;the client (machine or program) is a way to make request from the server through web (most of the time).<br>
Server<br>
	&emsp;The server is a computer program not a device.<br>
	&emsp;High performance computers are called servers because they run server program.<br>
	&emsp;Single server can serve multiple clients at the same time.<br>
	&emsp;Multiple servers can be run on one single machine (virtual servers)<br>
Server types:<br>
	&emsp;Web serve: such as Apache that servers HTTP request.<br>
	&emsp;Database server: MySQL that runs DBMS.<br>
Client-Server-Model<br>
	&emsp;is a centralized architecture on the web that splits the computer into 2 sections:<br>
		&emsp;&emsp;1- computers that asks for and request services (clients)<br>
		 &emsp;&emsp;2- computers that serve (respond) client (servers)<br>

## HTTP
Hyper Text Transfer Protocol (HTTP)<br>
	&emsp;Responsible for communication between web servers and clients<br>
HTTPS
	&emsp;All the data that is sent back and forth is encrypted by.<br>
	&emsp;Can be done by installing an SSL certificate on the web host <br>
HTTP methods  -> there are more<br>
	&emsp;GET: retrieves the data from server<br>
	&emsp;POST: submit data to the server<br>
	&emsp;PUT: update data already on the server<br>
	&emsp;DELETE: deletes data from the server<br>
HTTP status codes<br>
	&emsp;1xx: informational -> request received /processing<br>
	&emsp;2xx: success -> received, understood and accepted<br>
	&emsp;3xx: Redirect<br>
	&emsp;4xx: Client error -> request does not have what it needs (404)<br>
	&emsp;5xx: server error -> like internal server errors<br>
notes:<br>
	&emsp;every request is completely independent.<br>
	&emsp;every time you visit a web page you make a get request from the server via HTTP.
