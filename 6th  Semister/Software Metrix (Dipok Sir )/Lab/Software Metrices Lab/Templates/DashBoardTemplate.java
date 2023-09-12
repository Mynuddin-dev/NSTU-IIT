
package Templates;

import ShopAssistant.AddCostPage;
import ShopAssistant.AdvancedStockCheckPage;
import ShopAssistant.CreatePurchaseInvoicePage;
import ShopAssistant.CreateSalesInvoicePage;
import ShopAssistant.DailyIncomeCostPage;
import ShopAssistant.DueCheckPage;
import ShopAssistant.HomePage;
import ShopAssistant.LoginPage;
import ShopAssistant.SettingsPage;
import ShopAssistant.StaffAttendancePage;
import ShopAssistant.StockCheckPage;



import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Cursor;
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JOptionPane;
import javax.swing.JPanel;


public class DashBoardTemplate extends FrameSetup 
{
    public JPanel horizontalPanel,verticalPanel,mainPanel;
    public JButton shopNameButton,createSalesInvoiceButton,createPurchaseInvoiceButton,logoutButton,homeButton,addCostButton,dailyIncomeCostButton,stockCheckButton,advancedStockCheckButton,dueCheckButton,staffAttendanceButton,settingsButton;
    
    
    public JButton horizontalPanelButtons[] = {shopNameButton,createSalesInvoiceButton,createPurchaseInvoiceButton,logoutButton};
    public JButton verticalPanelButtons[] = {homeButton,addCostButton,dailyIncomeCostButton,stockCheckButton,advancedStockCheckButton,dueCheckButton,staffAttendanceButton,settingsButton};
    
    /**
     *   DashBoard Template Constructor   
     */
    public DashBoardTemplate()
    {
        setFrame();
        setContainer();
        setPanels();
        setActionListeners();
    }
    
    /**
     *  Sets Frame Basic Features
     */
    
    public void setFrame()
    {
        super.setFrame();
        this.setSize(1000, 600);
        this.setLocationRelativeTo(null);
    }
    
    /**
     *  Sets Container
     */
    
    public void setContainer()
    {
        //Method Overriding Contept Used
        
        super.setContainer();  //Here we get setContainer() of parrent class
        
        container.setLayout(new BorderLayout());
    }
    
    /**
     *  Sets Two Panels Called Horizontal Panel and Vertical Panel
     */
    
    public void setPanels()
    {
        horizontalPanel = new JPanel();
        horizontalPanel.setLayout(new GridLayout(1,3));
        horizontalPanel.setCursor(new Cursor(Cursor.HAND_CURSOR));
        container.add(horizontalPanel,BorderLayout.NORTH);
        setHorizontalPanelComponents();
        
        verticalPanel = new JPanel();
        verticalPanel.setLayout(new GridLayout(8,1));
        verticalPanel.setCursor(new Cursor(Cursor.HAND_CURSOR));
        container.add(verticalPanel,BorderLayout.WEST);
        setVerticalPanelComponents();
        
        mainPanel = new JPanel();
        mainPanel.setBackground(Color.WHITE);
        container.add(mainPanel,BorderLayout.CENTER);
    }
    
    /**
     *  Sets Horizontal Panel Components
     */
    
    public void setHorizontalPanelComponents()
    {
        String buttonNames[] = {"Shop Name","Create Sales Invoice","Create Purchase Invoice","Log Out"};
        
        for(int i = 0; i < horizontalPanelButtons.length ; i++)
        {
            horizontalPanelButtons[i] = new JButton(buttonNames[i]);
            horizontalPanelButtons[i].setName(buttonNames[i]);
            horizontalPanelButtons[i].setFont(new Font("Arial",Font.PLAIN,16));
            horizontalPanelButtons[i].setBackground(Color.DARK_GRAY);
            horizontalPanelButtons[i].setForeground(Color.WHITE);
            horizontalPanelButtons[i].setFocusPainted(false);
            horizontalPanel.add(horizontalPanelButtons[i]);
        }
        
        horizontalPanelButtons[3].setIcon(logoutButtonIcon);
    }    
        
    /**
     *  Sets Vertical Panel Components
     */
    public void setVerticalPanelComponents()
    {
        ImageIcon icons[] = {homeButtonIcon,addCostButtonIcon,dailyIncomeCostButtonIcon,stockCheckButtonIcon,stockCheckButtonIcon,dueCheckButtonIcon,staffAttendanceButtonIcon,settingsButtonIcon};
        String buttonNames[] = {"Home","Add Cost","Daily Income Cost","Stock Check","Advanced Stock Check","Due Check","Staff Attendance","Settings"};
        
        for(int i = 0 ; i < verticalPanelButtons.length ; i++)
        {
            verticalPanelButtons[i] = new JButton(buttonNames[i]);
            verticalPanelButtons[i].setName(buttonNames[i]);
            verticalPanelButtons[i].setFont(new Font("Arial",Font.PLAIN,16));
            verticalPanelButtons[i].setBackground(Color.DARK_GRAY);
            verticalPanelButtons[i].setForeground(Color.WHITE);
            verticalPanelButtons[i].setFocusPainted(false);
            verticalPanelButtons[i].setIcon(icons[i]);
            verticalPanel.add(verticalPanelButtons[i]);
        }
    }
    
    /**
     *  Sets ActionListeners For All Buttons
     */
    
    public void setActionListeners()
    {   
        /**
         *   Moving to Create Sales Invoice Page
         */
        getButton("Create Sales Invoice").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();             
                CreateSalesInvoicePage frame = new CreateSalesInvoicePage("Customer","SalesDatabase.txt");
                frame.setVisible(true);
            }
        });
         
        /**
         *   Moving to Create Purchase Invoice Page
         */
        getButton("Create Purchase Invoice").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                CreatePurchaseInvoicePage frame = new CreatePurchaseInvoicePage("Compnay","PurchaseDatabase.txt");
                frame.setVisible(true);  
            }
        }); 
        
        /**
         *   Moving to Log Out Page
         */
        getButton("Log Out").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                LoginPage frame = new LoginPage();
                frame.setVisible(true);
            }
        });
        
        /**
         *   Moving to Home Page
         */
        getButton("Home").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                HomePage frame = new HomePage();
                frame.setVisible(true);
            }
        });
        
        /**
         *   Moving to Add Cost Page
         */
        getButton("Add Cost").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                AddCostPage frame = new AddCostPage();
                frame.setVisible(true);
            }
        });
        
        /**
         *   Moving to Daily Income Cost Page
         */
        getButton("Daily Income Cost").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                DailyIncomeCostPage frame = new DailyIncomeCostPage();
                frame.setVisible(true);
            }
        });
        
        /**
         *   Moving to Due Check Page
         */
        getButton("Due Check").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                DueCheckPage frame = new DueCheckPage();
                frame.setVisible(true);
            }
        });
        
        /**
         *   Moving to Stock Check Page
         */
        getButton("Stock Check").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                StockCheckPage frame = new StockCheckPage();
                frame.setVisible(true);
            }
        });
        
        /**
         *   Moving to Advanced Stock Check Page
         */
        getButton("Advanced Stock Check").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                dispose();
                AdvancedStockCheckPage  frame = new AdvancedStockCheckPage();
                frame.setVisible(true);
            }
        });
        
        /**
         *   Moving to Staff Attendance Page
         */
        getButton("Staff Attendance").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                try{
                    
                    String userInput = JOptionPane.showInputDialog(null, "Enter Admin Password", "Admin Access",JOptionPane.QUESTION_MESSAGE);
                
                /**
                 * Verification Process
                 * If Password Matches then Move Otherwise Show Invalid Password
                 */   
                if(userInput.equals("admin"))
                {
                    dispose();
                    StaffAttendancePage frame = new StaffAttendancePage();
                    frame.setVisible(true);
                }
                else
                {
                    JOptionPane.showMessageDialog(null, "Invalid Password");
                }
                }catch(NullPointerException ex) {}
                
            }
        });
        
        /**
         *   Moving to Settings Page
         */
        getButton("Settings").addActionListener(new ActionListener()
        {     
            public void actionPerformed(ActionEvent e)
            {
                try{
                    String userInput = JOptionPane.showInputDialog(null, "Enter Admin Password", "Admin Access",JOptionPane.QUESTION_MESSAGE);
                
                /**
                 * Verification Process
                 * If Password Matches then Move Otherwise Show Invalid Password
                 */
                
                if(userInput.equals("admin"))
                {
                    dispose();
                    SettingsPage frame = new SettingsPage();
                    frame.setVisible(true);
                }
                else
                {
                    JOptionPane.showMessageDialog(null, "Invalid Password");
                }
                }catch(NullPointerException ex) {}
            }
        });
         
    }
    
    /**
     * This Method Returns A JButton For A Specific Button Name
     * 
     * @param buttonName A Specific ButtonName
     * @return A JButton
     */
    public JButton getButton(String buttonName)
    {
        int i,j; JButton button = new JButton();

        for(i = 0; i < horizontalPanelButtons.length ; i++)
        {
            if(horizontalPanelButtons[i].getName().equals(buttonName))
            {
                button = horizontalPanelButtons[i];
                break;
            }
        }
        
        for(j = 0; j < verticalPanelButtons.length ; j++)
        {   
            if(verticalPanelButtons[j].getName().equals(buttonName))
            {
                button = verticalPanelButtons[j];
            } 
        }
        
        return button;
    }
    
}
