package teste;

public class Pagamento {
	public static void pagarPeloCartao(float total) {
		System.out.println("Pago pelo cart�o " + total);
	}
	
	public static void pagarPeloBoleto(float total) {
		System.out.println("Pago pelo boleto " + total);
	}
}
