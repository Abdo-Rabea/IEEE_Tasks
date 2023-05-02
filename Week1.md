
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
the same process of working of the internet
Notes:
	the web is more than HTML getting sent back and displayed.
	the web is any interaction where there is a server and user device communicates with that server.
	http: standardize how the request and response should look like.
	the web is a service that allow computers share and exchange data safely.

## The Client Server Architecture
Web
	the web is referred to as client-server communication because there is always a computer that asks for data (client) and the computer that gives the data (server).
Client
	the client (machine or program) is a way to make request from the server through web (most of the time).
Server
	the server is a computer program not a device .
	high performance computers are called servers because they run server program.
	single server can serve multiple clients at the same time.
	multiple servers can be run on one single machine (virtual servers)
	server types:
		web serve: such as Apache that servers HTTP request.
		database server: MySQL that runs DBMS
Client-Server-Model
	is a centralized architecture on the web that splits the computer into 2 sections:
		1- computers that asks for and request services (clients)
		 2- computers that serve (respond) client (servers)

## HTTP
Hyper Text Transfer Protocol (HTTP)
	responsible for communication between web servers and clients.
HTTPS
	All the data that is sent back and forth is encrypted by.
	can be done by installing an SSL certificate on the web host 
HTTP methods  -> there are more
	GET: retrieves the data from server
	POST: submit data to the server
	PUT: update data already on the server
	DELETE: deletes data from the server
HTTP status codes
	1xx: informational -> request received /processing
	2xx: success -> received, understood and accepted
	3xx: Redirect
	4xx: Client error -> request does not have what it needs (404)
	5xx: server error -> like internal server errors
	notes:
	every request is completely independent.
	every time you visit a web page you make a get request from the server via HTTP.