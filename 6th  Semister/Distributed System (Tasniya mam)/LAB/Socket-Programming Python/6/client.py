import socket
import threading

client = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
client.connect(("192.168.161.178", 6666))


def recieve():
  try:
    message = client.recv(1024).decode('ascii')
    print(message)
  except:
    print('Error occured')
    


recieve_thread = threading.Thread(target=recieve)
recieve_thread.start()

# write_thread = threading.Thread(target=write)
# write_thread.start()

client.close()