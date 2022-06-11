package No3;

abstract class Sewa_Tenda {
    abstract void cetakData();
    abstract void jenis();
    abstract void ukuran();
    abstract void dekor();
    abstract void cetakTotal();
    protected String nama;
    protected String no_tlp;
    protected long totalBiaya;
    protected int jenis;
    protected int ukuran;
    protected int dekor;

    //jenis
    final long terpal      = 1200000;
    final long umum        = 2000000;
    final long pernikahan  = 3500000;

    //ukuran
    final long s          = 1500000;
    final long m          = 2300000;
    final long xl         = 3800000;

    //dekor
    final long bronze     = 2000000;
    final long silver     = 3000000;
    final long gold       = 4000000;



    public void setNama(String nama) {
        this.nama = nama;
    }

    public void setNo_tlp(String string) {
        this.no_tlp = string;
    }

    public void setJenis(int jenis) {
        this.jenis = jenis;
    }

    public void setUkuran(int ukuran) {
        this.ukuran = ukuran;
    }

    public void setDekor(int dekor) {
        this.dekor = dekor;
    }

}
