import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;

public class UDPServer {
    public static void main(String[] args) {
        if (args.length < 1) {
            System.err.println("Please provide the port number for the server");
            return;
        }

        int port = Integer.parseInt(args[0]);
        try {
            DatagramSocket datagramSocket = new DatagramSocket(port);

            byte[] receiveDataByte = new byte[1024];
            byte[] sendDataByte = new byte[1024];

            DatagramPacket receivePacket = new DatagramPacket(receiveDataByte, receiveDataByte.length);

            System.out.println("Waiting for UDP client on port: " + port);

            datagramSocket.receive(receivePacket);

            String receiveData = new String(receivePacket.getData());

            System.out.println("Client message: " + receiveData.trim());

            DateTimeFormatter dateTimeFormatter = DateTimeFormatter.ofPattern("yyyy/MM/dd HH:mm:ss");
            sendDataByte = dateTimeFormatter.format(LocalDateTime.now()).getBytes();

            InetAddress senderIP = receivePacket.getAddress();
            int senderPort = receivePacket.getPort();

            DatagramPacket outputPacket = new DatagramPacket(sendDataByte, sendDataByte.length, senderIP, senderPort);

            datagramSocket.send(outputPacket);
            datagramSocket.close();
        } catch (Exception ex) {
            ex.printStackTrace();
        }
    }
}
