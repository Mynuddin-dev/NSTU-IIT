

package codesmell;

import java.util.List;

    public class XMLGenerator extends AbstractGenerator
    {
        List<Person> list;
        String xmlType;

        public XMLGenerator(List<Person> list, String type)
        {
            this.list = list;
            this.xmlType = type;
        }

        public String GetXMLWithHeader()
        {
            StringBuilder xml = new StringBuilder();
            if (xmlType == "attributewise")
            {
                xml.append("<header attr1=\"id\" attr2=\"name\" attr3=\"email\" />");
                for (int i = 0; i < list.size(); i++)
                {
                    xml.append("<person id=\"" + list.get(i).Id + "\" name=\"" + list.get(i).Name + "\" email=\"" + list.get(i).Email + "\" />");
                }
            }
            else if (xmlType == "childnodewise")
            {
                xml.append("<header><attr1>id</attr1><attr2>name</attr2><attr3>email</attr3></header>");
                for (int i = 0; i < list.size(); i++)
                {
                    xml.append("<person><id>" + list.get(i).Id + "</id><name>" + list.get(i).Name + "</name><email>" + list.get(i).Email + "</email></person>");
                }
            }
            else
            {

            }

            return xml.toString();
        }

        public String GetXMLWithoutHeader()
        {
            StringBuilder xml = new StringBuilder();
            if (xmlType == "attributewise")
            {
                for (int i = 0; i < list.size(); i++)
                {
                    xml.append("<person id=\"" + list.get(i).Id + "\" name=\"" + list.get(i).Name + "\" email=\"" + list.get(i).Email + "\" />");
                }
            }
            else if (xmlType == "childnodewise")
            {
                for (int i = 0; i < list.size(); i++)
                {
                    xml.append("<person><id>" + list.get(i).Id + "</id><name>" + list.get(i).Name + "</name><email>" + list.get(i).Email + "</email></person>");
                }
            }
            else
            {

            }
            

            return xml.toString();
        }

        public String GetXMLWithHeaderAndFooter()
        {
            StringBuilder xml = new StringBuilder();
            if (xmlType == "attributewise")
            {
                xml.append("<root>");
                xml.append("<header attr1=\"id\" attr2=\"name\" attr3=\"email\" />");
                for (int i = 0; i < list.size(); i++)
                {
                    xml.append("<person id=\"" + list.get(i).Id + "\" name=\"" + list.get(i).Name + "\" email=\"" + list.get(i).Email + "\" />");
                }
                xml.append("<footer total_records=\"" + list.size() + "\" />");
                xml.append("</root>");
            }
            else if (xmlType == "childnodewise")
            {
                xml.append("<root>");
                xml.append("<header><attr1>id</attr1><attr2>name</attr2><attr3>email</attr3></header>");
                for (int i = 0; i < list.size(); i++)
                {
                    CreatePersonNode(xml, list.get(i).Id, list.get(i).Name, list.get(i).Email);
                }
                xml.append("<footer><total_records>" + list.size() + "</total_records></footer>");
                xml.append("</root>");
            }
            else
            {

            }

            
            return xml.toString();
        }

        private void CreatePersonNode(StringBuilder xml, int id, String name, String email)
        {
            xml.append("<person><id>" + id + "</id><name>" + name + "</name><email>" + email + "</email></person>");
        }

        private void CreatePersonNode(StringBuilder xml, int i)
        {
            xml.append("<person><id>" + list.get(i).Id + "</id><name>" + list.get(i).Name + "</name><email>" + list.get(i).Email + "</email></person>");
        }
    }
