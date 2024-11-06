# O QUE É UM BANCO DE DADOS

É um local que irá armazenar dados

## PRINCIPAL COMANDO QUE USAMOS
**mostrar informação**
``` sql
SELECT * FROM tabela
```
**Obs**: '*' significa 'todas as colunas'


## SERVIDOR
Servidor é como se fosse o pc de outra pessoa, guardando informações

**XAMPP**

## SYNTAX

```sql
-- mostra a coluna escolhida
SELECT coluna FROM tabela
```

```sql
-- mostra as informações sem repetição
SELECT DISTINCT coluna FROM tabela
```

```sql
-- mostra as informações com id igual a 1
SELECT coluna FROM tabela WHERE id = 1
```
**Obs**: Where serve para adicionar condições na sua pesquisa

```sql
-- mostra as informações do menor para o maior
SELECT coluna FROM tabela ORDER BY colunax
```
```sql
-- mostra as informações do maior para o menor
SELECT coluna FROM tabela ORDER BY colunax DESC
```
**Operadores lógicos**
```SQL
-- MOSTRA CLIENTES QUE SÃO DO GENERO FEMININO E MORA EM SÃO PAULO   
SELECT * FROM clientes WHERE genero = 'feminino' AND cidade='são paulo'
```

```SQL
-- MOSTRA CLIENTES QUE SÃO DO GENERO FEMININO OU MORA EM SÃO PAULO   
SELECT * FROM clientes WHERE genero = 'feminino' OR cidade='são paulo'
```
```SQL
-- MOSTRA CLIENTES QUE SÃO DO GENERO FEMININO NÃO MORA EM SÃO PAULO   
SELECT * FROM clientes WHERE genero = 'feminino' AND NOT cidade='são paulo'
```
**Funções**
```sql
MAX() -- mostra o maior número de uma coluna
MIN() -- mostra o menor número de uma coluna
AVG() -- mostra a média de uma coluna
SUM() -- mostra a soma de uma coluna