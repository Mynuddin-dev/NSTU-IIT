import socket

msgFromClient       = str.encode("Hello UDP Server")
serverAddressPort   = ("127.0.0.1", 2222)
bufferSize          = 1024


client = socket.socket(family=socket.AF_INET, type=socket.SOCK_DGRAM)

client.sendto(msgFromClient, serverAddressPort)

