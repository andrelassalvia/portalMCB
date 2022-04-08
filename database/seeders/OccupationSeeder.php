<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Occupation;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $occupation = [                            
                ['nome' => "Administrador de Banco de Dados"],
                ['nome' => "Açougueiro"],
                ['nome' => "Acompanhante de Idosos"],
                ['nome' => "Acupunturista"],
                ['nome' => "Administrador de Empresas"],
                ['nome' => "Administrador de Redes"],
                ['nome' => "Administrador de Redes Junior"],
                ['nome' => "Administrador de Redes Pleno"],
                ['nome' => "Administrador de Redes Sênior"],
                ['nome' => "Administrador de Sistemas"],
                ['nome' => "Administrador Hospitalar"],
                ['nome' => "Administrador Público"],
                ['nome' => "Advogado"],
                ['nome' => "Advogado Civil"],
                ['nome' => "Aeronauta"],
                ['nome' => "Afiador de Ferramentas"],
                ['nome' => "Agente Comunitário de Saúde"],
                ['nome' => "Agente de Defesa Sanitária"],
                ['nome' => "Agente de Viagens"],
                ['nome' => "Agente Funerário"],
                ['nome' => "Agente Penitenciário"],
                ['nome' => "Agricultor"],
                ['nome' => "Agrônomo"],
                ['nome' => "Ajudante de Motorista"],
                ['nome' => "Ajudante de Transportes"],
                ['nome' => "Alfaiate"],
                ['nome' => "Almirante"],
                ['nome' => "Almoxarife"],
                ['nome' => "Ambientalista"],
                ['nome' => "Ambulante"],
                ['nome' => "Analista Administrativo"],
                ['nome' => "Analista Administrativo de Vendas"],
                ['nome' => "Analista Administrativo Financeiro"],
                ['nome' => "Analista Ambiental"],
                ['nome' => "Analista Comercial Interno"],
                ['nome' => "Analista Comercial Externo"],
                ['nome' => "Analista de Atendimento a Clientes"],
                ['nome' => "Analista de Atendimento Comercial"],
                ['nome' => "Analista de Banco"],
                ['nome' => "Analista de Banco de Dados"],
                ['nome' => "Analista de Cargos e Salários"],
                ['nome' => "Analista de Cobrança"],
                ['nome' => "Analista de Comércio Exterior"],
                ['nome' => "Analista de Compras"],
                ['nome' => "Analista de Comunicação"],
                ['nome' => "Analista de Contabilidade"],
                ['nome' => "Analista de Contas a Pagar e Receber"],
                ['nome' => "Analista de Controladoria"],
                ['nome' => "Analista de Controladoria Junior"],
                ['nome' => "Analista de Controladoria Pleno"],
                ['nome' => "Analista de Controladoria Sênior"],
                ['nome' => "Analista de Controle de Qualidade"],
                ['nome' => "Analista de Crédito e Cobrança"],
                ['nome' => "Analista de Custos"],
                ['nome' => "Analista de Departamento Pessoal"],
                ['nome' => "Analista de Desenvolvimento de Produto"],
                ['nome' => "Analista de Desenvolvimento de Sistemas"],
                ['nome' => "Analista de Desenvolvimento Web"],
                ['nome' => "Analista de Distribuição"],
                ['nome' => "Analista de Ecommerce"],
                ['nome' => "Analista de Estoque"],
                ['nome' => "Analista de Engenharia Elétrica"],
                ['nome' => "Analista Financeiro"],
                ['nome' => "Analista de Fiscal"],
                ['nome' => "Analista Químico"],
                ['nome' => "Anestesiologista"],
                ['nome' => "Angiologista"],
                ['nome' => "Antropólogo"],
                ['nome' => "Apicultor"],
                ['nome' => "Apresentador"],
                ['nome' => "Argumentista"],
                ['nome' => "Armador"],
                ['nome' => "Armeiro"],
                ['nome' => "Arquiteto"],
                ['nome' => "Arquiteto de Interiores"],
                ['nome' => "Arquiteto Paisagista"],
                ['nome' => "Arquiteto Urbanista"],
                ['nome' => "Arquiteto Projetista"],
                ['nome' => "Arquiteto Vendedor"],
                ['nome' => "Arquivista"],
                ['nome' => "Arrumadeira"],
                ['nome' => "Artista de Espetáculo de Diversões"],
                ['nome' => "Artista Plástico"],
                ['nome' => "Ascensorista"],
                ['nome' => "Assessor de Imprensa"],
                ['nome' => "Analista de Fundição"],
                ['nome' => "Analista de Informática"],
                ['nome' => "Analista de Investimentos"],
                ['nome' => "Analista de Logística"],
                ['nome' => "Analista de Loja"],
                ['nome' => "Analista de Manutenção"],
                ['nome' => "Analista de Manutenção Elétrica"],
                ['nome' => "Analista de Marketing"],
                ['nome' => "Analista de PCP"],
                ['nome' => "Analista de Produção"],
                ['nome' => "Analista de Programação"],
                ['nome' => "Analista de Publicidade e Propaganda"],
                ['nome' => "Analista de Qualidade"],
                ['nome' => "Analista de Recrutamento e Seleção"],
                ['nome' => "Analista de Recursos Humanos"],
                ['nome' => "Analista de Redes"],
                ['nome' => "Analista de Relações Públicas"],
                ['nome' => "Analista de Representação Comercial"],
                ['nome' => "Analista de SAC"],
                ['nome' => "Analista de Segurança Patrimonial"],
                ['nome' => "Analista de Seguros"],
                ['nome' => "Analista de Sistemas"],
                ['nome' => "Analista de Suporte Técnico"],
                ['nome' => "Analista de Suprimentos"],
                ['nome' => "Analista de Tecnologia da Informação (TI)"],
                ['nome' => "Analista de Telecomunicações"],
                ['nome' => "Analista de Telemarketing Ativo"],
                ['nome' => "Analista de Telemarketing Receptivo"],
                ['nome' => "Analista de Tesouraria"],
                ['nome' => "Analista de Transportes"],
                ['nome' => "Analista de Treinamento"],
                ['nome' => "Analista de Treinamento Sênior"],
                ['nome' => "Analista Econômico"],
                ['nome' => "Assistente Comercial Interno"],
                ['nome' => "Assistente de Almoxarifado"],
                ['nome' => "Assistente de Arquitetura"],
                ['nome' => "Assistente Administrativo"],
                ['nome' => "Assistente de Atendimento a Clientes"],
                ['nome' => "Assistente de Atendimento Comercial"],
                ['nome' => "Assistente de Cobrança"],
                ['nome' => "Assistente de Comércio Exterior"],
                ['nome' => "Assistente de Compras"],
                ['nome' => "Assistente de Comunicação"],
                ['nome' => "Assistente de Contabilidade"],
                ['nome' => "Assistente de Contas a Pagar e Receber"],
                ['nome' => "Assistente de Controladoria"],
                ['nome' => "Assistente de Controle de Qualidade"],
                ['nome' => "Assistente de Cozinha"],
                ['nome' => "Assistente de Crédito e Cobrança"],
                ['nome' => "Assistente de Custos"],
                ['nome' => "Assistente de Departamento Pessoal"],
                ['nome' => "Assistente de Desenvolvimento de Produto"],
                ['nome' => "Assistente de Desenvolvimento de Sistemas"],
                ['nome' => "Assistente de Distribuição"],
                ['nome' => "Assistente de Ecommerce"],
                ['nome' => "Assistente de Enfermagem"],
                ['nome' => "Assistente de Engenharia Elétrica"],
                ['nome' => "Assistente de Estoque"],
                ['nome' => "Assistente Financeiro"],
                ['nome' => "Assistente de Informática"],
                ['nome' => "Assistente de Jornalismo"],
                ['nome' => "Assistente de Limpeza"],
                ['nome' => "Assistente de Logística"],
                ['nome' => "Assistente de Loja"],
                ['nome' => "Assistente de Manutenção"],
                ['nome' => "Assistente de Manutenção Elétrica"],
                ['nome' => "Assistente de Marketing"],
                ['nome' => "Assistente de PCP"],
                ['nome' => "Assistente de Produção"],
                ['nome' => "Assistente de Publicidade e Propaganda"],
                ['nome' => "Assistente de Qualidade"],
                ['nome' => "Assistente de Recrutamento e Seleção"],
                ['nome' => "Assistente de Recursos Humanos"],
                ['nome' => "Assistente de Representação Comercial"],
                ['nome' => "Assistente de SAC"],
                ['nome' => "Assistente de Seguros"],
                ['nome' => "Assistente de Sistemas"],
                ['nome' => "Assistente de Suporte Técnico"],
                ['nome' => "Assistente de Suprimentos"],
                ['nome' => "Assistente de Tecnologia da Informação (TI)"],
                ['nome' => "Assistente de Telecomunicações"],
                ['nome' => "Assistente de Telemarketing Ativo"],
                ['nome' => "Assistente de Telemarketing Receptivo"],
                ['nome' => "Assistente de Tesouraria"],
                ['nome' => "Assistente de Transportes"],
                ['nome' => "Assistente de Treinamento"],
                ['nome' => "Assistente de Vendas Externas"],
                ['nome' => "Assistente Editorial"],
                ['nome' => "Assistente Fiscal"],
                ['nome' => "Assistente Social"],
                ['nome' => "Astrônomo"],
                ['nome' => "Atendente"],
                ['nome' => "Atendente de Agência"],
                ['nome' => "Atendente Distribuidor"],
                ['nome' => "Auditor Ambiental"],
                ['nome' => "Auditor de Qualidade"],
                ['nome' => "Auditor Externo"],
                ['nome' => "Auditor Interno"],
                ['nome' => "Auxiliar de Almoxarifado"],
                ['nome' => "Auxiliar de Almoxarife"],
                ['nome' => "Auxiliar de Arquivo"],
                ['nome' => "Auxiliar de Banco de Dados"],
                ['nome' => "Auxiliar de Biblioteca"],
                ['nome' => "Auxiliar de Comércio Exterior"],
                ['nome' => "Auxiliar de Contas a Pagar e Receber"],
                ['nome' => "Auxiliar de Controle de Qualidade"],
                ['nome' => "Auxiliar de Cozinha"],
                ['nome' => "Auxiliar de Crédito e Cobrança"],
                ['nome' => "Auxiliar de Custos"],
                ['nome' => "Auxiliar de Distribuição"],
                ['nome' => "Auxiliar de Engenharia de Segurança do Trabalho"],
                ['nome' => "Auviliar de Escritório"],
                ['nome' => "Auxiliar de Fundição"],
                ['nome' => "Auxiliar de Instalação"],
                ['nome' => "Auxiliar de Limpeza"],
                ['nome' => "Auxiliar de Manutenção Hidráulica"],
                ['nome' => "Auxiliar de Padeiro"],
                ['nome' => "Auxiliar de PCP"],
                ['nome' => "Auxiliar de Programação"],
                ['nome' => "Auxiliar de SAC"],
                ['nome' => "Auxiliar de Segurança"],
                ['nome' => "Auxiliar de Serralheiro"],
                ['nome' => "Auxiliar de Suprimentos"],
                ['nome' => "Auxiliar de Topografia"],
                ['nome' => "Auxiliar de Transportes"],
                ['nome' => "Auxiliar de Usinagem"],
                ['nome' => "Auxiliar de Veterinária"],
                ['nome' => "Auxiliar de Web Design"],
                ['nome' => "Auxiliar Econômico"],
                ['nome' => "Auxiliar Fiscal"],
                ['nome' => "Auxiliar Jurídico"],
                ['nome' => "Bartender"],
                ['nome' => "Babá"],
                ['nome' => "Balconista"],
                ['nome' => "Bancário"],
                ['nome' => "Barman"],
                ['nome' => "Biblioteconista"],
                ['nome' => "Biólogo"],
                ['nome' => "Biomédico"],
                ['nome' => "Bioquímico"],
                ['nome' => "Biotecnólogo"],
                ['nome' => "Bombeiro"],
                ['nome' => "Borracheiro"],
                ['nome' => "Cabeleireiro"],
                ['nome' => "Cadista"],
                ['nome' => "Cardiologista"],
                ['nome' => "Cartazista"],
                ['nome' => "Carteiro"],
                ['nome' => "Cenógrafo"],
                ['nome' => "Ceramista"],
                ['nome' => "Cineasta"],
                ['nome' => "Cinegrafista"],
                ['nome' => "Cirurgião Plástico"],
                ['nome' => "Clínico Geral"],
                ['nome' => "Cobrador de Coletivo"],
                ['nome' => "Comissário de Bordo"],
                ['nome' => "Confeiteiro"],
                ['nome' => "Conferente"],
                ['nome' => "Conferente de Loja"],
                ['nome' => "Consultor Contábil"],
                ['nome' => "Consultor de Marketing"],
                ['nome' => "Consultor de Moda"],
                ['nome' => "Consultor de Qualidade"],
                ['nome' => "Consultor de Vendas Externas"],
                ['nome' => "Consultor de Viagens"],
                ['nome' => "Contador"],
                ['nome' => "Controlador de Tráfego"],
                ['nome' => "Coordenador Administrativo"],
                ['nome' => "Coordenador Comercial Externo"],
                ['nome' => "Coordenador Comercial Interno"],
                ['nome' => "Coordenador de Almoxarifado"],
                ['nome' => "Coordenador de Arquitetura"],
                ['nome' => "Coordenador de Atendimento Comercial"],
                ['nome' => "Coordenador de Atendimento a Clientes"],
                ['nome' => "Coordenador de Banco"],
                ['nome' => "Coordenador de Cargos e Salários"],
                ['nome' => "Coordenador de Cobrança"],
                ['nome' => "Coordenador de Comércio Exterior"],
                ['nome' => "Coordenador de Compras"],
                ['nome' => "Coordenador de Comunicação"],
                ['nome' => "Coordenador de Contabilidade"],
                ['nome' => "Coordenador de Controladoria"],
                ['nome' => "Coordenador de Controle de Qualidade"],
                ['nome' => "Coordenador de Cozinha"],
                ['nome' => "Coordenador de Crédito e Cobrança"],
                ['nome' => "Coordenador de Custos"],
                ['nome' => "Coordenador de Departamento Pessoal"],
                ['nome' => "Coordenador de Desenvolvimento de Produto"],
                ['nome' => "Coordenador de Desenvolvimento de Sistemas"],
                ['nome' => "Coordenador de Diagramação"],
                ['nome' => "Coordenador de Ecommerce"],
                ['nome' => "Coordenador de Enfermagem"],
                ['nome' => "Coordenador de Engenharia e Segurança do Trabalho"],
                ['nome' => "Coordenador de Engenharia Elétrica"],
                ['nome' => "Coordenador de Estoque"],
                ['nome' => "Coordenador de Fundição"],
                ['nome' => "Coordenador de Informática"],
                ['nome' => "Coordenador de Jornalismo"],
                ['nome' => "Coordenador de Limpeza"],
                ['nome' => "Coordenador de Logística"],
                ['nome' => "Coordenador de Loja"],
                ['nome' => "Coordenador de Manutenção"],
                ['nome' => "Coordenador de Manutenção Elétrica"],
                ['nome' => "Coordenador de Marketing"],
                ['nome' => "Coordenador de PCP"],
                ['nome' => "Coordenador de Produção"],
                ['nome' => "Coordenador de Publicidade e Propaganda"],
                ['nome' => "Coordenador de Qualidade"],
                ['nome' => "Coordenador de Recrutamento e Seleção"],
                ['nome' => "Coordenador de Recursos Humanos"],
                ['nome' => "Coordenador de Representação Comercial"],
                ['nome' => "Coordenador de SAC"],
                ['nome' => "Coordenador de Salão"],
                ['nome' => "Coordenador de Segurança Patrimonial"],
                ['nome' => "Coordenador de Seguros"],
                ['nome' => "Coordenador de Sistemas"],
                ['nome' => "Coordenador de Suporte Técnico"],
                ['nome' => "Coordenador de Suprimentos"],
                ['nome' => "Coordenador de Tecnologia da Informação"],
                ['nome' => "Coordenador de Telecomunicações"],
                ['nome' => "Coordenador de Telemarketing Ativo"],
                ['nome' => "Coordenador de Telemarketing Receptivo"],
                ['nome' => "Coordenador de Tesouraraia"],
                ['nome' => "Coordenador de Transportes"],
                ['nome' => "Coordenador de Treinamento"],
                ['nome' => "Coordenador de Usinagem"],
                ['nome' => "Coordenador Econômico"],
                ['nome' => "Coordenador Financeiro"],
                ['nome' => "Coordenador Fiscal"],
                ['nome' => "Coordenador Químico"],
                ['nome' => "Corretor de Seguros"],
                ['nome' => "Cozinheiro"],
                ['nome' => "Diretor Administrativo"],
                ['nome' => "Dentista"],
                ['nome' => "Desenhista"],
                ['nome' => "Designer de Interiores"],
                ['nome' => "Designer de Moda"],
                ['nome' => "Diagramador"],
                ['nome' => "Diretor Comercial Externo"],
                ['nome' => "Diretor Comercial Interno"],
                ['nome' => "Diretor de Cinema"],
                ['nome' => "Diretor de Prdução"],
                ['nome' => "Diretor de Representação Comercial"],
                ['nome' => "Diretor de Recursos Humanos"],
                ['nome' => "Diretor de Tecnologia da Informação (TI)"],
                ['nome' => "Diretor de Marketing"],
                ['nome' => "Diretor Financeiro"],
                ['nome' => "Diretor de Informática"],
                ['nome' => "Diretor de Jornalismo"],
                ['nome' => "Diretor de Suporte Técnico"],
                ['nome' => "Diretor de Logística"],
                ['nome' => "Diretor de Departamento Pessoal"],
                ['nome' => "Ecologista"],
                ['nome' => "Economista"],
                ['nome' => "Editor"],
                ['nome' => "Educador"],
                ['nome' => "Eletricista"],
                ['nome' => "Eletricista de Manutenção"],
                ['nome' => "Embalador"],
                ['nome' => "Empreagdo (a) Doméstico (a)"],
                ['nome' => "Encanador"],
                ['nome' => "Encarregado de Almoxarifado"],
                ['nome' => "Encarregado de PCP"],
                ['nome' => "Encarregado de Recursos Humanos"],
                ['nome' => "Encarregado de Segurança"],
                ['nome' => "Encarregado de Transporte"],
                ['nome' => "Encarregado de Usinagem"],
                ['nome' => "Endocrinologista"],
                ['nome' => "Engenheiro Têxtil"],
                ['nome' => "Enfermeiro"],
                ['nome' => "Engenheiro Aeronáutico"],
                ['nome' => "Engenheiro Agrimensor"],
                ['nome' => "Engenheiro Agrônomo"],
                ['nome' => "Engenheiro Ambiental"],
                ['nome' => "Engenheiro Civil"],
                ['nome' => "Engenheiro Civil Junior"],
                ['nome' => "Engenheiro Civil Pleno"],
                ['nome' => "Engenheiro Civil Sênior"],
                ['nome' => "Engenheiro da Computação"],
                ['nome' => "Engenheiro de Alimentos"],
                ['nome' => "Engenheiro de Engenharia e Segurança do Trabalho"],
                ['nome' => "Engenheiro de Produção"],
                ['nome' => "Engenheiro de Suprimentos"],
                ['nome' => "Engenheiro de Telecomunicações"],
                ['nome' => "Engenheiro Eletricista"],
                ['nome' => "Engenheiro Metalúrgico"],
                ['nome' => "Engenheiro Naval"],
                ['nome' => "Engenheiro Nuclear"],
                ['nome' => "Estagiário Comercial Externo"],
                ['nome' => "Estagiário Comercial Interno"],
                ['nome' => "Estagiário Administrativo"],
                ['nome' => "Estagiário de Arquitetura"],
                ['nome' => "Estagiário de Atendimento Comercial"],
                ['nome' => "Estagiário de Atendimento a Clientes"],
                ['nome' => "Estagiário de Banco"],
                ['nome' => "Estagiário de Banco de Dados"],
                ['nome' => "Estagiário de Biomedicina"],
                ['nome' => "Estagiário de Cobrança"],
                ['nome' => "Estagiário de Comércio Exterior"],
                ['nome' => "Estagiário de Compras"],
                ['nome' => "Estagiário de Comunicação"],
                ['nome' => "Estagiário de Contabilidade"],
                ['nome' => "Estagiário de Controladoria"],
                ['nome' => "Estagiário de Controle de Qualidade"],
                ['nome' => "Estagiário de Cozinha"],
                ['nome' => "Estagiário de Custos"],
                ['nome' => "Estagiário de Departamento Pessoal"],
                ['nome' => "Estagiário de Desenho Industrial"],
                ['nome' => "Estagiário de Desenvolvimento de Produto"],
                ['nome' => "Estagiário de Desenvolvimento de Sistemas"],
                ['nome' => "Estagiário de Diagramação"],
                ['nome' => "Estagiário de Distribuição"],
                ['nome' => "Estagiário de Ecommerce"],
                ['nome' => "Estagiário de Economia"],
                ['nome' => "Estagiário de Edificações"],
                ['nome' => "Estagiário de Educação Física"],
                ['nome' => "Estagiário de Enfermagem"],
                ['nome' => "Estagiário de Engenharia de Alimentos"],
                ['nome' => "Estagiário de Engenharia de Telecomunicações"],
                ['nome' => "Estagiário de Engenharia e Segurança do Trabalho"],
                ['nome' => "Estagiário de Engenharia Elétrica"],
                ['nome' => "Estagiário de Estoque"],
                ['nome' => "Estagiário de Gastronomia"],
                ['nome' => "Estagiário de Gestão Abiental"],
                ['nome' => "Estagiário de Informática"],
                ['nome' => "Estagiário de Jornalismo"],
                ['nome' => "Estagiário de Letras"],
                ['nome' => "Estagiário de Logística"],
                ['nome' => "Estagiário de Manutenção"],
                ['nome' => "Estagiário de Manutenção Elétrica"],
                ['nome' => "Estagiário de Marketing"],
                ['nome' => "Estagiário de PCP"],
                ['nome' => "Estagiário de Produção"],
                ['nome' => "Estagiário de Publicidade e Propaganda"],
                ['nome' => "Estagiário de Qualidade"],
                ['nome' => "Estagiário de Recrutamento e Seleção"],
                ['nome' => "Estagiário de Recursos Humanos"],
                ['nome' => "Estagiário de Representação Comercial"],
                ['nome' => "Estagiário de SAC"],
                ['nome' => "Estagiário de Sistemas"],
                ['nome' => "Estagiário de Suporte Técnico"],
                ['nome' => "Estagiário de Suprimentos"],
                ['nome' => "Estagiário de Tecnologia da Informação (TI)"],
                ['nome' => "Estagiário de Telecomunicaçãoes"],
                ['nome' => "Estagiário de Telemarketing Ativo"],
                ['nome' => "Estagiário de Telemarketing Receptivo"],
                ['nome' => "Estagiário de Tesouraria"],
                ['nome' => "Estagiário de Veterinária"],
                ['nome' => "Estagiário de Web Design"],
                ['nome' => "Estagiário Financeiro"],
                ['nome' => "Estagiário Fiscal"],
                ['nome' => "Estagiário Químico"],
                ['nome' => "Esteticista"],
                ['nome' => "Estilista"],
                ['nome' => "Estoquista"],
                ['nome' => "Estoquista de Loja"],
                ['nome' => "Fundidor"],
                ['nome' => "Farmacêutico"],
                ['nome' => "Feirante"],
                ['nome' => "Filósofo"],
                ['nome' => "Físico"],
                ['nome' => "Fisioterapeuta"],
                ['nome' => "Fonoaudiólogo"],
                ['nome' => "Fotógrafo"],
                ['nome' => "Fresador"],
                ['nome' => "Fresador CNC"],
                ['nome' => "Fresador Ferramenteiro"],
                ['nome' => "Garçom"],
                ['nome' => "Gari"],
                ['nome' => "Gastrônomo"],
                ['nome' => "Geofísico"],
                ['nome' => "Geográfo"],
                ['nome' => "Geólogo"],
                ['nome' => "Gerente Administrativo"],
                ['nome' => "Gerente Comercial Externo"],
                ['nome' => "Gerente Comercial Interno"],
                ['nome' => "Gerente Comercial Interno"],
                ['nome' => "Gerente de Atendimento a Clientes"],
                ['nome' => "Gerente de Atendimento Comercial"],
                ['nome' => "Gerente de Banco"],
                ['nome' => "Gerente de Cobrança"],
                ['nome' => "Gerente de Comércio Exterior"],
                ['nome' => "Gerente de Compras"],
                ['nome' => "Gerente de Comunicação"],
                ['nome' => "Gerente de Contabilidade"],
                ['nome' => "Gerente de Contas"],
                ['nome' => "Gerente de Controladoria"],
                ['nome' => "Gerente de Controle de Qualidade"],
                ['nome' => "Gerente de Cozinha"],
                ['nome' => "Gerente de Departamento Pessoal"],
                ['nome' => "Gerente de Desenvolvimento de Produto"],
                ['nome' => "Gerente de Desenvolvimento de Sistemas"],
                ['nome' => "Gerente de Distribuição"],
                ['nome' => "Gerente de Ecommerce"],
                ['nome' => "Gerente de Enfermagem"],
                ['nome' => "Gerente de Engenharia Elétrica"],
                ['nome' => "Gerente de Estoque"],
                ['nome' => "Gerente de Hotelaria"],
                ['nome' => "Gerente de Informática"],
                ['nome' => "Gerente de Jornalismo"],
                ['nome' => "Gerente de Logística"],
                ['nome' => "Gerente de Loja"],
                ['nome' => "Gerente de Manutenção"],
                ['nome' => "Gerente de Manutenção Elétrica"],
                ['nome' => "Gerente de Marketing"],
                ['nome' => "Gerente de PCP"],
                ['nome' => "Gerente de Produção"],
                ['nome' => "Gerente de Publicidade e Propaganda"],
                ['nome' => "Gerente de Qualidade"],
                ['nome' => "Gerente de Recrutamento e Seleção"],
                ['nome' => "Gerente de Recursos Humanos"],
                ['nome' => "Gerente de Representação Comercial"],
                ['nome' => "Gerente de SAC"],
                ['nome' => "Gerente de Salão"],
                ['nome' => "Gerente de Segurança Patrimonial"],
                ['nome' => "Gerente de Seguros"],
                ['nome' => "Gerente de Sistemas"],
                ['nome' => "Gerente de Suporte Técnico"],
                ['nome' => "Gerente de Suprimentos"],
                ['nome' => "Gerente de Tecnologia da Informação (TI)"],
                ['nome' => "Gerente de Telecomunicações"],
                ['nome' => "Gerente de Telemarketing Ativo"],
                ['nome' => "Gerente de Telemarketing Receptivo"],
                ['nome' => "Gerente de Tesouraria"],
                ['nome' => "Gerente de Transportes"],
                ['nome' => "Gerente Financeiro"],
                ['nome' => "Gerente Fiscal"],
                ['nome' => "Gerente Químico"],
                ['nome' => "Geriatra"],
                ['nome' => "Gestor Ambiental"],
                ['nome' => "Ginecologista"],
                ['nome' => "Governanta"],
                ['nome' => "Homeopata"],
                ['nome' => "Historiador"],
                ['nome' => "Inspetor de Controle de Qualidade"],
                ['nome' => "Instalador de Acessórios Automotivos"],
                ['nome' => "Instalador de Alarmes"],
                ['nome' => "Instalador de Cabeamento Estruturado"],
                ['nome' => "Instalador de Telecomunicações"],
                ['nome' => "Instrutor de Treinamento"],
                ['nome' => "Jornalista"],
                ['nome' => "Jardineiro"],
                ['nome' => "Líder de Produção"],
                ['nome' => "Líder de Usinagem"],
                ['nome' => "Locutor"],
                ['nome' => "Maestro"],
                ['nome' => "Mandrilhador"],
                ['nome' => "Manicure/Pedicure"],
                ['nome' => "Manobrista"],
                ['nome' => "Maquiador"],
                ['nome' => "Marceneiro"],
                ['nome' => "Marinheiro"],
                ['nome' => "Matemático"],
                ['nome' => "Mecânico"],
                ['nome' => "Mecânico de Automóveis"],
                ['nome' => "Mecânico de Manutenção Hidráulica"],
                ['nome' => "Médico"],
                ['nome' => "MestredeObras"],
                ['nome' => "Modelo"],
                ['nome' => "Monitor de Atendimento a Clientes"],
                ['nome' => "Monitor de Telemarketing Ativo"],
                ['nome' => "Monitor de Telemarketing Receptivo"],
                ['nome' => "Motoboy"],
                ['nome' => "Motorista"],
                ['nome' => "Neurologista"],
                ['nome' => "Nutricionista"],
                ['nome' => "Obstetra"],
                ['nome' => "Oftalmologista"],
                ['nome' => "Operador de Atendimento a Clientes"],
                ['nome' => "Operador de Caixa"],
                ['nome' => "Operador de Fundição"],
                ['nome' => "Operador de Guilhotina"],
                ['nome' => "Operador de Logística"],
                ['nome' => "Operador de Produção"],
                ['nome' => "Operador de SAC"],
                ['nome' => "Operador de Telemarketing Ativo"],
                ['nome' => "Operador de Telemarketing Receptivo"],
                ['nome' => "Operador de Torno"],
                ['nome' => "Operador de Usinagem"],
                ['nome' => "Ortopedista"],
                ['nome' => "Otorrinolaringologista"],
                ['nome' => "Psicólogo"],
                ['nome' => "Padeiro"],
                ['nome' => "Pescador"],
                ['nome' => "Paisagista"],
                ['nome' => "Pediatra"],
                ['nome' => "Pedreiro"],
                ['nome' => "Pintor"],
                ['nome' => "Podólogo"],
                ['nome' => "Polidor"],
                ['nome' => "Produtor Editorial"],
                ['nome' => "Professor de Educação"],
                ['nome' => "Professor de Letras"],
                ['nome' => "Programador de Centro de Usinagem"],
                ['nome' => "Programador de PCP"],
                ['nome' => "Promotor Bancário"],
                ['nome' => "Químico"],
                ['nome' => "Recepcionista"],
                ['nome' => "Radialista"],
                ['nome' => "Radiologista"],
                ['nome' => "Redator"],
                ['nome' => "Repórter"],
                ['nome' => "Representante Comercial"],
                ['nome' => "Supervisor Administrativo"],
                ['nome' => "Secretária"],
                ['nome' => "Serralheiro"],
                ['nome' => "Supervisor Comercial Externo"],
                ['nome' => "Supervisor Comercial Interno"],
                ['nome' => "Supervisor de Almoxarifado"],
                ['nome' => "Supervisor de Atendimento a Clientes"],
                ['nome' => "Supervisor de Atendimento Comercial"],
                ['nome' => "Supervisor de Banco"],
                ['nome' => "Supervisor de Cargos e Salários"],
                ['nome' => "Supervisor de Cobrança"],
                ['nome' => "Supervisor de Comércio Exterior"],
                ['nome' => "Supervisor de Compras"],
                ['nome' => "Supervisor de Comunicação"],
                ['nome' => "Supervisor de Contabilidade"],
                ['nome' => "Supervisor de Controladoria"],
                ['nome' => "Supervisor de Controle de Qualidade"],
                ['nome' => "Supervisor de Cozinha"],
                ['nome' => "Supervisor de Crédito e Cobrança"],
                ['nome' => "Supervisor de Custos"],
                ['nome' => "Supervisor de Departamento Pessoal"],
                ['nome' => "Supervisor de Desenvolvimento de Produto"],
                ['nome' => "Supervisor de Desenvolvimento de Sistemas"],
                ['nome' => "Supervisor de Distribuição"],
                ['nome' => "Supervisor de Ecommerce"],
                ['nome' => "Supervisor de Enfermagem"],
                ['nome' => "Supervisor de Engenharia e Segurança do Trabalho"],
                ['nome' => "Supervisor de Engenharia Elétrica"],
                ['nome' => "Supervisor de Estoque"],
                ['nome' => "Supervisor de Fundição"],
                ['nome' => "Supervisor de Informática"],
                ['nome' => "Supervisor de Limpeza"],
                ['nome' => "Supervisor de Logística"],
                ['nome' => "Supervisor de loja"],
                ['nome' => "Supervisor de Manutenção"],
                ['nome' => "Supervisor de Marketing"],
                ['nome' => "Supervisor de Manutenção Elétrica"],
                ['nome' => "Supervisor de PCP"],
                ['nome' => "Supervisor de Produção"],
                ['nome' => "Supervisor de Publicidade e Propaganda"],
                ['nome' => "Supervisor de Qualidade"],
                ['nome' => "Supervisor de Recrutamento e Seleção"],
                ['nome' => "Supervisor de Recursos Humanos"],
                ['nome' => "Supervisor de Representação Comercial"],
                ['nome' => "Supervisor de SAC"],
                ['nome' => "Supervisor de Salão"],
                ['nome' => "Supervisor de Segurança"],
                ['nome' => "Supervisor de Segurança Patrimonial"],
                ['nome' => "Supervisor de Seguros"],
                ['nome' => "Supervisor de Sistemas"],
                ['nome' => "Supervisor de Suporte Técnico"],
                ['nome' => "Supervisor de Suprimentos"],
                ['nome' => "Supervisor de Tecnologia da Informação (TI)"],
                ['nome' => "Supervisor de Telecomunicações"],
                ['nome' => "Supervisor de Telemarketing Ativo"],
                ['nome' => "Supervisor de Telemarketing Receptivo"],
                ['nome' => "Supervisor de Tesouraria"],
                ['nome' => "Supervisor de Transportes"],
                ['nome' => "Supervisor de Usinagem"],
                ['nome' => "Supervisor Econômico"],
                ['nome' => "Supervisor Financeiro"],
                ['nome' => "Supervisor Fiscal"],
                ['nome' => "Técnico Ambiental"],
                ['nome' => "Técnico de Controle de Qualidade"],
                ['nome' => "Técnico de Edificações"],
                ['nome' => "Técnico de Suporte"],
                ['nome' => "Técnico em Manutenção Elétrica"],
                ['nome' => "Técnico em Análise Clínica"],
                ['nome' => "Técnico em Análise Química"],
                ['nome' => "Técnico em Automação"],
                ['nome' => "Técnico em Guia de Turismo"],
                ['nome' => "Técnico em Hardware"],
                ['nome' => "Técnico em Metalúrgica"],
                ['nome' => "Técnico em Redes"],
                ['nome' => "Técnico em Secretariado"],
                ['nome' => "Técnico em Secretariado Escolar"],
                ['nome' => "Técnico em Transações Imobiliárias"],
                ['nome' => "Técnico em Zootecnia"],
                ['nome' => "Técnico Instalador"],
                ['nome' => "Técnico em Telecomunicações"],
                ['nome' => "Tesoureiro"],
                ['nome' => "Topógrafo"],
                ['nome' => "Tradutor"],
                ['nome' => "Traumatologista"],
                ['nome' => "Turismólogo"],
                ['nome' => "Urologista"],
                ['nome' => "Vendedor Externo"],
                ['nome' => "Vendedor de Loja"],
                ['nome' => "Vendedor Interno"],
                ['nome' => "Veterinário"],
                ['nome' => "Vigilante"],
                ['nome' => "Vigilante Condutor"],
                ['nome' => "Vigilante de Escolta"],
                ['nome' => "Vigilante de Monitoramento"],
                ['nome' => "Vigilante de Segurança Patrimonial"],
                ['nome' => "Vigilante de Segurança Social Privada"],
                ['nome' => "Vigilante Líder"],
                ['nome' => "Vitrinista"],
                ['nome' => "Web Design"],
                ['nome' => "Web Design Sênior"],
                ['nome' => "Web Design Junior"],
                ['nome' => "Zelador"],
                ['nome' => "Zootecnista"] 
        ]; 
        
        foreach ($occupation as $value) {
            Occupation::create($value);
        }
    }
}
