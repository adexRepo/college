package Quiz;

public class Attribute {
    private int noKaryawan= 1;
    private String nama = "Adex";
    private int golongan = 1;
    private int gaji    = 3500000;
    public Object[][] arrKaryawan = {{}};

    public Attribute(Object[][] arrKaryawan) {
        this.arrKaryawan = arrKaryawan;
    }

    public int getNoKaryawan() {
        return noKaryawan;
    }

    public void setNoKaryawan(int i) {
        this.noKaryawan = i;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public int getGolongan() {
        return golongan;
    }

    public void setGolongan(int i) {
        this.golongan = i;
    }

    public int getGaji() {
        return gaji;
    }

    public void setGaji(int i) {
        this.gaji = i;
    }

    public void setArrKaryawan(Object[][] perbarui) {
        this.arrKaryawan = perbarui;
    }

    public Object[][] getArrKaryawan() {
        return arrKaryawan;
    }

    public void setArrKaryawan(Object[] data) {
        var length = this.arrKaryawan == null ? 0 : this.arrKaryawan.length;
        var arrKaryawan = new Object[length + 1][4];
        for (int i = 0; i < length; i++) {
            arrKaryawan[i] = this.arrKaryawan[i];
        }
        arrKaryawan[length] = data;
        this.arrKaryawan = arrKaryawan;
    }
}
