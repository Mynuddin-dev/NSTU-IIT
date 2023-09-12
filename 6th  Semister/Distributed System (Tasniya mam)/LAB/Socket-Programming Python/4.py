import socket


HOST = "127.0.0.1"

PORT = 2222

bufferSize = 1024


msgFromServer = "Hello UDP Client"

bytesToSend = str.encode(msgFromServer)

server = socket.socket(family=socket.AF_INET, type=socket.SOCK_DGRAM)


server.bind((HOST, PORT))


print("UDP server up and listening")


# Listen for incoming datagrams

while(True):

    bytesAddressPair = server.recvfrom(bufferSize)

    message = bytesAddressPair[0]

    address = bytesAddressPair[1]

    clientMsg = "Message from Client:{}".format(message)
    clientIP = "Client IP Address:{}".format(address)

    print(clientMsg)
    print(clientIP)

    # Sending a reply to client

    UDPServerSocket.sendto(bytesToSend, address)
