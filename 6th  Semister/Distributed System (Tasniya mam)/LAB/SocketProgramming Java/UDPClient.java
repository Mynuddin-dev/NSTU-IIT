import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;

public class UDPClient {
    public static void main(String[] args) {
        if (args.length < 1) {
            System.err.println("Please provide the port number where to open the server");
            return;
        }

        int port = Integer.parseInt(args[0]);
        try {
            DatagramSocket datagramSocket = new DatagramSocket();
            InetAddress host = InetAddress.getByName("localhost");

            byte[] receiveDataByte = new byte[1024];
            byte[] sendDataByte = new byte[1024];

            sendDataByte = "Hello UDP server".getBytes();

            DatagramPacket sendPacket = new DatagramPacket(sendDataByte, sendDataByte.length, host, port);

            datagramSocket.send(sendPacket);

            DatagramPacket receivePacket = new DatagramPacket(receiveDataByte, receiveDataByte.length);
            datagramSocket.receive(receivePacket);

            String receiveData = new String(receivePacket.getData());
            System.out.println("Server replied: " + receiveData.trim());

            datagramSocket.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }
}
