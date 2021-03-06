<p align="center">Certificaço</p>

## Sobre a API

Esta API foi desenvolvida com Laravel para receber os dados enviados através de um formulário e armazená-los em um banco de dados após os cálculos necessários. Em breve, poderá ser implementado um redirecionamento para os serviços de Inteligência artificial em nuvem como a Azure.

- O que foi implementado até aqui:
    - Migrations para o Banco de Dados MySQL
    - Laravel Passport para trazer maior segurança com OAuth 2
    - Recebimento das requisições enviadas pelo formulário
    - Armazenamento dos dados
    - Exposição dos lotes para alimentar partes da aplicação que poderão ser desenvolvidas

- O que temos pela frente:
    - Desenvolvimento completo do sistema com painel administrativo (dando opções de deletar dados, ver informações detalhadas e etc.)
    - Cálculos para analisar a qualidade da sucata, exemplo:
        Densidade do lote = peso/volume
        Densidade do ferro = 7900 kg/m³
        Portanto, quanto mais próxima de 1 for a razão entre a densidade do ferro puro e a densidade do lote, melhor será sua qualidade. Podemos multiplicar este valor por 10 para obtermos uma nota mais clara e amigável.
    - Armazenamento das fotos enviadas
    - Redirecionamento dos dados para plataformas de IA na nuvem.


