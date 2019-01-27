
public class IncrementOperators {
	public static void main(String[] args){
		int tuna = 5;
		int salmon = 18;
		
		System.out.println("++tuna = " + ++tuna);
		System.out.println("--tuna = " + --tuna);
		
		System.out.println("salmon++ = " + salmon++);
		System.out.println("Calling salmon again = " + salmon);
		
		tuna = tuna + 10;
		System.out.println("tuna = tuna + 10 = " + tuna);
		
		// Same thing via short hand
		tuna += 10;
		System.out.println("tuna += 10 = " + tuna);
		
		tuna = tuna * 10;
		System.out.println("tuna = tuna * 10 = " + tuna);
		
		// Same thing via short hand
		tuna *= 10;
		System.out.println("tuna *= 10 = " + tuna);
	}
}
