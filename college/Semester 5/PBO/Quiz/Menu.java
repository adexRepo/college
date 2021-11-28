package Quiz;
import java.util.Scanner;

public class Menu extends Main {

    public static void Run(Object[][] objects, String flag) {
        Scanner input = new Scanner(System.in);
        Method method = new Method(objects);
        int tot = flag == "start" ? 0 : Integer.valueOf(objects.length) - 1;
        System.out.println(" ");
        System.out.println("Program Gaji Karyawan");
        System.out.println("================================");
        System.out.println("Total Karyawan Terdata : " + tot);
        System.out.println("Kode 1 -> Lihat List Karyawan");
        System.out.println("Kode 2 -> Tambah Karyawan Baru Array");
        System.out.println("Kode 3 -> Lihat Default Field Value");
        System.out.println("Kode 4 -> Set Data Field");
        System.out.println("Kode 5 -> Refresh Program seperti baru");
        System.out.println("Kode 6 -> Exit Program");
        System.out.print("Masukkan Kode : ");
        int kode = input.nextInt();

        switch(kode){
            case 1  -> method.lihat(objects);
            case 2  -> method.tambah(objects);
            case 3  -> method.getData();
            case 4  -> method.setData();
            case 5  -> mainCaller(objects);
            case 6  -> System.out.println("Terima Kasih, Program Selesai");
            default -> System.out.println("Maaf.. Kode yang anda masukkan salah, Program Selesai");
        };
        input.close();
    };

    static void mainCaller(Object[][] objects)
    {
        System.out.println("mainCaller!");
            Run(dataGlobal,"start");
    }
    
};