from datetime import datetime
import socket
import threading



HOST = "192.168.161.178"
PORT = 6666

server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.bind((HOST, PORT))

server.listen()

now = datetime.now()
current_time = now.strftime("%H:%M:%S")

def recieve():
  client, address = server.accept()

  print(f'Connected with {address}')
  client.send(f'Echo from the server {current_time}'.encode('ascii'))

print('Server is listening')
recieve()