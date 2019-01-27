import java.util.*;

public class Bogosort {
    private static <T extends Comparable<? super T>> boolean isSorted(List<T> list) {
        if (list.isEmpty())
            return true;
        Iterator<T> it = list.iterator();
        T last = it.next();
        while (it.hasNext()) {
            T current = it.next();
            if (last.compareTo(current) > 0)
                return false;
            last = current;
        }
        return true;
    }

    public static <T extends Comparable<? super T>> void bogoSort(List<T> list) {
        int i = 0;
        while (!isSorted(list)) {
            Collections.shuffle(list);
            i++;
            if(i % 1000 == 0)
                System.out.println(i);
        }
    }

    public static void main(String[] args) {
        List<String> input = Arrays.asList("S O R T E X A M P L E".split(" "));
        System.out.println(input);
        bogoSort(input);
        System.out.println(input);
    }
}