from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

driver = webdriver.Chrome()  # chromedriver deve estar no PATH

try:
    wait = WebDriverWait(driver, 10)
    driver.get('http://localhost:8080/Gustavo_Wendt_PHP/Novo_PHP/conexao/Conexao_PDO/index.php')

    botao_avancar = wait.until(EC.element_to_be_clickable((By.ID, 'botaoAvancar')))
    botao_avancar.click()

    wait.until(EC.title_contains('Nova Página'))

    campo_nome = wait.until(EC.visibility_of_element_located((By.ID, "nome")))
    campo_nome.send_keys("João Pedro Carlitys")

    campo_cargo = wait.until(EC.visibility_of_element_located((By.ID, "endereco")))
    campo_cargo.send_keys("Rua da rua da casa de alguem")

    campo_telefone = wait.until(EC.visibility_of_element_located((By.ID, "telefone")))
    campo_telefone.send_keys("11999999999")

    campo_endereco = wait.until(EC.visibility_of_element_located((By.ID, "email")))
    campo_endereco.send_keys("pipocay01@gmail.com")

    botao_cadastrar = wait.until(EC.element_to_be_clickable((By.TAG_NAME, "button")))
    botao_cadastrar.click()

finally:
    driver.quit()
