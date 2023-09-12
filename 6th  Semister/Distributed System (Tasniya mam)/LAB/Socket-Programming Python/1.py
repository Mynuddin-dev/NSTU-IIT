import socket
import threading

HOST = "192.168.0.111"
PORT = 8888

server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.bind((HOST, PORT))

server.listen()

clients = []


def recieve():
  while True:
    client, address = server.accept()

    clients.append(client)
    print(f'Connected with {address}')
    client.close()

print('Server is listening')
recieve()
