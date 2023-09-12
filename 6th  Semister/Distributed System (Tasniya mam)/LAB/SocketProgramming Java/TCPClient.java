import java.io.*;
import java.net.InetAddress;
import java.net.Socket;

public class TCPClient {
    public static void main(String[] args) {
        if (args.length < 1) {
            System.err.println("Please provide the port to connect with the server.");
            return;
        }

        int port = Integer.parseInt(args[0]);
        try {
            InetAddress host = InetAddress.getByName("localhost");
            Socket socket = new Socket(host, port);
            DataInputStream dataInputStream = new DataInputStream(socket.getInputStream());
            DataOutputStream dataOutputStream = new DataOutputStream(socket.getOutputStream());
            BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(System.in));

            String message = "";
            while (!message.equals("stop")) {
                message = bufferedReader.readLine();
                dataOutputStream.writeUTF(message);
                dataOutputStream.flush();

                System.out.println("Server echo: " + dataInputStream.readUTF());
            }

            dataOutputStream.close();
            socket.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }
}
