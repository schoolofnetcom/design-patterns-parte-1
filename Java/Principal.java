package teste;

public class Principal {

	public static void main(String[] args) {
		PizzaFactory pf = new PizzaFactory();
		System.out.println(pf.criarComida(2).nome);
	}

}
