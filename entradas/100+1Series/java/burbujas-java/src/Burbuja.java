import java.util.Arrays;

public class Burbuja { 
    public static void main(String args[]) { 
        ordena(new int[] { 1, 2, 3, 4, 5, 6, 7, 8 });
        ordena(new int[] { 1, 2, 3, 5, 4, 6, 7, 8 });
        ordena(new int[] { 8, 5, 1, 6, 4, 3, 7, 2 }); 
    }

    public static void ordena(int[] numbers) { 
        System.out.printf("Lista :%s %n", 
        Arrays.toString(numbers)); 
        for (int i = 1; i < numbers.length-1; i++) { 
            for (int j = 0; j < numbers.length-i; j++) { 
                if (numbers[j] > numbers[j + 1]) { 
                    int temp = numbers[j]; 
                    numbers[j] = numbers[j+1]; 
                    numbers[j+1] = temp; 
                }
            } 
        } 
        System.out.printf("En orden :%s %n %n", Arrays.toString(numbers));
    }
}