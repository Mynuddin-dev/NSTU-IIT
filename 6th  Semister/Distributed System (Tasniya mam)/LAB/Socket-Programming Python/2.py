import socket
import threading


client = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
client.connect(("192.168.0.111", 8888))

print('Connected with 192.168.0.111')
