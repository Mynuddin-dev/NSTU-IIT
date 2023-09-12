import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.net.ServerSocket;
import java.net.Socket;

public class TCPServer {
    public static void main(String[] args) {
        if (args.length < 1) {
            System.err.println("Please provide the port number where to open the server");
            return;
        }

        int port = Integer.parseInt(args[0]);
        try {
            ServerSocket serverSocket = new ServerSocket(port);

            System.out.println("Server is listening on port: " + port);

            Socket socket = serverSocket.accept();

            System.out.println("New client connected...");

            DataInputStream dataInputStream = new DataInputStream(socket.getInputStream());
            DataOutputStream dataOutputStream = new DataOutputStream(socket.getOutputStream());

            String message = "";
            while (!message.equals("stop")) {
                message = dataInputStream.readUTF();
                System.out.println("Message from client: '" + message + "'");
                dataOutputStream.writeUTF(message);
                dataOutputStream.flush();
            }

            dataInputStream.close();
            socket.close();
            serverSocket.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }
}
