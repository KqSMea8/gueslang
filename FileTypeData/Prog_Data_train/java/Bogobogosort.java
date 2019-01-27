import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;

public class Bogobogosort {
    public static <T extends Comparable<T>> void bogobogosort(List<T> list) {
        if (list.size() <= 1)
            return;
        while (!isSorted(list))
            Collections.shuffle(list);
    }

    public static <T extends Comparable<T>> boolean isSorted(List<T> list) {
        List<T> copy = new ArrayList<T>(list);
        List<T> subList;
        do {
            Collections.shuffle(copy);
            subList = copy.subList(0, copy.size() - 1);
            bogobogosort(subList);
        } while (copy.get(copy.size() - 1).compareTo(subList.get(subList.size() - 1)) < 0);
        return copy.equals(list);
    }

    public static void main(String[] args) {
        List<String> input = Arrays.asList("S O R T E X A M P L E".split(" "));
        System.out.println(input);
        bogobogosort(input);
        System.out.println(input);
    }
}