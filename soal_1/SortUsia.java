import java.io.*;
import java.util.*;
 
public class SortUsia {
    public static void main(String[] args) throws Exception {
        String text = "";
		String usia_urut = "";
        try {
			FileReader read = new FileReader("usia.txt");
            BufferedReader buffread = new BufferedReader(read);
			//Scanner getFile = new Scanner(new File("usia.txt")).useDelimiter(",\\s*");
			List<Integer> arraylist = new ArrayList<Integer>();
			
			while((text=buffread.readLine())!=null){
				int usia = Integer.parseInt(text);
				arraylist.add(usia);
			}
			buffread.close();
			
			Collections.sort(arraylist);
			
			//String[] tempsArray = arraylist.toArray(new String[0]);
			
			FileWriter writer = new FileWriter("usia_urut.txt");
			for (Integer i : arraylist) {
				//System.out.print(i.intValue() + "\n");
				usia_urut = Integer.toString(i.intValue());
				writer.write(usia_urut);
				writer.write(System.lineSeparator());
			}
			
			writer.close();
		
        } 
        catch (FileNotFoundException fnfe) {
            fnfe.getMessage();
        }
		
       
    }
}