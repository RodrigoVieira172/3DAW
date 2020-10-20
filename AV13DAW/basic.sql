CREATE USER '3daw'@'localhost' IDENTIFIED BY 'mysql123';
GRANT ALL PRIVILEGES ON *.* TO '3daw'@'localhost';

#SELECT <COLUNAS> FROM <NOME TABELA> WHERE ...

# SELECT matricula, Nome, CPF, dataNascimento from Aluno where matricula = $matricula
# SELECT * from aluno where matricula = $matricula
# SELECT * from aluno where Nome = $nome
# UPDATE from aluno set Nome = $nome, CPF = $cpf, dataNascimento = $dataNascimento Where matricula = $matricula
# DELETE * FROM aluno


# TABELA SE matriculaRICULA É INTEIRO
CREATE TABLE IF NOT EXISTS 3dawtest.aluno(
	
	matricularicula VARCHAR UNSIGNED PRIMARY KEY,
	Nome VARCHAR(50) NOT NULL,
	CPF VARCHAR(11) NOT NULL,
	dataNascimento VARCHAR(15) NOT NULL
);


# $sql = "INSERT into Alunos (matricularicula, Nome, CPF, dataNascimento) VALUES ( '{$matricula}', '{$nome}',  '{$cpf}',  '{$dataNascimento}' )" ;