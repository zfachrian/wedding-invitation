public void toogleExample() {
    boolean a = true;
    boolean b;
    if (a == false) {
        b = true;
    } else {
        b = false;
    }
    System.out.println(b);
}

//perbaikan sesuai KISS
public void toogleExample(boolean a) {
    System.out.println(a);
}