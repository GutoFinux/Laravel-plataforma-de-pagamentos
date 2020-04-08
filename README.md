INTEGRAÇÃO LARAVEL COM PLATAFORMAS DE PAGAMENTO PAYPAL, STRIPE e PayU


Este projeto é fruto do curso "Processa pagos con Laravel y las mejores plataformas de pagos" (curso em espanhol).
https://www.udemy.com/share/101YswAkAadVtWR3w=/



Integração do Laravel com as seguintes plataformas de pagamento:

Paypal

Stripe

PayU

Obs.: A integração com Mercado Pago foi removida devido a instabilidades.

Front end simples somente para mostrar o funcionamento.

_______________________________________________________________________________

Instalação/configuração:

1 - Banco de dados (em database/database.sqlite)

1.1 - Na tabela "currencies" e adicionar as moedas das quais deseja (por padrão já há dólar americano, real brasileiro, peso chileno e iene japonês)

1.2 - Na tabela "payment_platforms" excluir as plataformas que não deseja usar

1.3 - Se deseja usar MySQL ou outro banco, basta que o mesmo possua essas duas tabelas


2 - Variáveis de ambiente (arquivo .env)

2.1 - Preencher as variáveis do Paypal com as credenciais da conta que receberá os pagamentos.

2.2 - Em "PAYPAL_BASE_URI" substituir "https://sandbox.api.paypal.com" por "https://api.paypal.com" ao subir para produção

2.3 - Substituir as variáveis de Stripe com as credenciais da conta que receberá os pagamentos

2.4 - Substituir as credenciais de PayU pela conta a ser usada para receber os pagamentos

2.5 - Em "PAYU_BASE_URI" substituir "https://sandbox.api.payulatam.com" por https://api.payulatam.com" ao subir para produção

2.6 - Acesse "https://free.currencyconverterapi.com/free-api-key" e obtenha uma chave para o serviço de conversão de moedas em tempo real

2.7 - Atribua a chave obtida na variável "CURRENCY_CONVERSION_API_KEY"

3 - Moedas não fracionadas no PayPal
3.1 - Se pretende usar o PayPal é necessário acessar app/Services/PayPalService.php e adicionar (ou remover) as moedas que não utilizam centavos do vertor "$zeroDecimalCurrencies"
