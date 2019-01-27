import java.util.Scanner;


public class AveragingProgram {
	public static void main(String[] args){
		Scanner input = new Scanner(System.in);
		
		int total, grade, average, counter;
		
		total = 0;
		counter = 0;
		
		System.out.println("Type 10 integers: ");
		
		while(counter < 10){
			grade = input.nextInt();
			total = total + grade;
			counter ++;
		}
		
		average = total/10;
		
		System.out.println("The average is " + average);
		
		input.close();
	}
}
