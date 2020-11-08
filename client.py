import socket
import errno
import select
import sys

# We did this client and server to then connect it to the html but we didn't have enough time. They both work good individualy, the server and client, and the index.html. This was a very good project we learned a lot about sockets and js
# The only thing is that you need to send a message a message to recive the other message

HEADER_LENGTH = 10

IP = socket.gethostname()
PORT = 1234
my_username = input("Username: ")

client_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
client_socket.connect((IP, PORT))

client_socket.setblocking(False)

username = my_username.encode('utf-8')
username_header = f"{len(username):<{HEADER_LENGTH}}".encode('utf-8')
client_socket.send(username_header + username)

def send(message):

    if message:    

        message = message.encode('utf-8')
        message_header = f"{len(message):<{HEADER_LENGTH}}".encode('utf-8')
        client_socket.send(message_header + message)

def receive():
    try:
        while True:

            username_header = client_socket.recv(HEADER_LENGTH)

            if not len(username_header):
                print('Connection closed by the server')
                return ""

            username_length = int(username_header.decode('utf-8').strip())

            username = client_socket.recv(username_length).decode('utf-8')

            message_header = client_socket.recv(HEADER_LENGTH)
            message_length = int(message_header.decode('utf-8').strip())
            message = client_socket.recv(message_length).decode('utf-8')

            return (f'{username} > {message}')

    except:
        pass
    
    # except IOError as e:
    #     if e.errno != errno.EAGAIN and e.errno != errno.EWOULDBLOCK:
    #         print('Reading error: {}'.format(str(e)))
    #         sys.exit()

    #     continue

    # except Exception as e:
    #     print('Reading error: '.format(str(e)))
    #     sys.exit()
