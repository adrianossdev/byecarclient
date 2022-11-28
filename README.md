1)Considerando as informações acima, descreva como seria a comunicação entre frontend > backend > API > backend > frontend;
Na minha resolução atribui o valor do token gerado ao formulário no frontend (view do blade) e implementei uma classe de Consulta no backend onde consigo recuperar este token pelo objeto Request. Após incluir este token no cabeçalho consultei os dados do cliente na API fake (byecarapi), que me gerou o token, e passei a response dela para a view no formato JSON.
Também pensei na possibilidade de implementar o frontend com o VueJS, mas seguiria o mesmo padrão anterior na recuperação do token pelo objeto Request antes de consultar a API.


Instruções para testar a aplicação/classe de consulta da api fake:
No MySQL criar um BD com o nome 'bc';
Executar as migrates com o comando php artisan migrate no projeto byecarapi;
Executar no terminal do projeto byecarapi: 
1)php artisan tinker
2) $user = new App\Models\User();
3) $user->name = 'adriano';
4) $user->email ='a@a';
5) $user->password = bcrypt('1234');
6) $user->save();
Para criar os registros de consulta do cliente, executar também no projeto byecarapi (apifake):
1) $cliente = new App\Models\Cliente();
2) $cliente->nome = 'adriano';
3) $cliente->email = 'a@a';
4) $cliente->celular = '12345678910';
5) $cliente->save();

Executar o comando no projeto byecarapi:
php artisan serve
Executar o comando no projeto byecarclient:
php artisan serve --port=8001
