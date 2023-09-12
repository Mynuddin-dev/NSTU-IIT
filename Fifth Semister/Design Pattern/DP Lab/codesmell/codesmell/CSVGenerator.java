/*﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;*/

package codesmell;
import java.util.List;

    public class CSVGenerator extends AbstractGenerator
    {
        List<Person> aList;
        StringBuilder csv = new StringBuilder();

        public CSVGenerator(List<Person> list)
        {
            aList = list;
        }

        public String GetCSVWithHeader()
        {
            StringBuilder sb = new StringBuilder();
            sb.append("Id,Name,Email\n");
            for (Person person : aList)
            {
                sb.append(person.Id + "," + person.Name + "," + person.Email+"\n");
            }

            return sb.toString();
        }

        public String GetCSVWithoutHeader()
        {
            StringBuilder sb = new StringBuilder();
            for (int i = 0; i < aList.size(); i++)
            {
                sb.append(aList.get(i).Id + "," + aList.get(i).Name + "," + aList.get(i).Email+"\n");
            }

            return sb.toString();
        }

        public String GetCSVWithHeaderAndFooter()
        {
            StringBuilder sb = new StringBuilder();
            sb.append("Id,Name,Email\n");
            for (int i = 0; i < aList.size(); i++)
            {
                sb.append(aList.get(i).Id + "," + aList.get(i).Name + "," + aList.get(i).Email+"\n");
            }
            sb.append("Total Records:" + aList.size()+"\n");
            return sb.toString();
        }
    }
