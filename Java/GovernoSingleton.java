package teste;

public class GovernoSingleton {
	/* Atributos e metodos*/
	
	public String proximaEleicao = "2022";
	public String nomeDoPais = "Brasil";
	
	public void realizarEleicao() {
		System.out.println("Realizando eleição!");
	}
	
	/* Estrutura Singleton */
	private static GovernoSingleton instancia;
	private GovernoSingleton(){}
	public static synchronized GovernoSingleton pegarInstancia() {
		if(instancia == null) {
			instancia = new GovernoSingleton();
		}
		return instancia;
	}
}
