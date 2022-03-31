<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CidadeBrasil;

class Cidade_Brasil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities=[
            [
              "id"=> 1100015,
              "nome"=> "Alta Floresta d`Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100023,
              "nome"=> "Ariquemes",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100031,
              "nome"=> "Cabixi",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100049,
              "nome"=> "Cacoal",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100056,
              "nome"=> "Cerejeiras",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100064,
              "nome"=> "Colorado do Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100072,
              "nome"=> "Corumbiara",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100080,
              "nome"=> "Costa Marques",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100098,
              "nome"=> "Espigão d`Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100106,
              "nome"=> "Guajará-Mirim",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100114,
              "nome"=> "Jaru",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100122,
              "nome"=> "Ji-Paraná",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100130,
              "nome"=> "Machadinho d`Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100148,
              "nome"=> "Nova Brasilândia d`Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100155,
              "nome"=> "Ouro Preto do Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100189,
              "nome"=> "Pimenta Bueno",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100205,
              "nome"=> "Porto Velho",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100254,
              "nome"=> "Presidente Médici",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100262,
              "nome"=> "Rio Crespo",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100288,
              "nome"=> "Rolim de Moura",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100296,
              "nome"=> "Santa Luzia d`Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100304,
              "nome"=> "Vilhena",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100320,
              "nome"=> "São Miguel do Guaporé",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100338,
              "nome"=> "Nova Mamoré",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100346,
              "nome"=> "Alvorada d`Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100379,
              "nome"=> "Alto Alegre dos Parecis",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100403,
              "nome"=> "Alto Paraíso",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100452,
              "nome"=> "Buritis",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100502,
              "nome"=> "Novo Horizonte do Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100601,
              "nome"=> "Cacaulândia",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100700,
              "nome"=> "Campo Novo de Rondônia",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100809,
              "nome"=> "Candeias do Jamari",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100908,
              "nome"=> "Castanheiras",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100924,
              "nome"=> "Chupinguaia",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1100940,
              "nome"=> "Cujubim",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101005,
              "nome"=> "Governador Jorge Teixeira",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101104,
              "nome"=> "Itapuã do Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101203,
              "nome"=> "Ministro Andreazza",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101302,
              "nome"=> "Mirante da Serra",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101401,
              "nome"=> "Monte Negro",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101435,
              "nome"=> "Nova União",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101450,
              "nome"=> "Parecis",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101468,
              "nome"=> "Pimenteiras do Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101476,
              "nome"=> "Primavera de Rondônia",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101484,
              "nome"=> "São Felipe d`Oeste",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101492,
              "nome"=> "São Francisco do Guaporé",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101500,
              "nome"=> "Seringueiras",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101559,
              "nome"=> "Teixeirópolis",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101609,
              "nome"=> "Theobroma",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101708,
              "nome"=> "Urupá",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101757,
              "nome"=> "Vale do Anari",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1101807,
              "nome"=> "Vale do Paraíso",
              "estadobrasil_id"=> 11
            ],
            [
              "id"=> 1200013,
              "nome"=> "Acrelândia",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200054,
              "nome"=> "Assis Brasil",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200104,
              "nome"=> "Brasiléia",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200138,
              "nome"=> "Bujari",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200179,
              "nome"=> "Capixaba",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200203,
              "nome"=> "Cruzeiro do Sul",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200252,
              "nome"=> "Epitaciolândia",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200302,
              "nome"=> "Feijó",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200328,
              "nome"=> "Jordão",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200336,
              "nome"=> "Mâncio Lima",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200344,
              "nome"=> "Manoel Urbano",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200351,
              "nome"=> "Marechal Thaumaturgo",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200385,
              "nome"=> "Plácido de Castro",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200393,
              "nome"=> "Porto Walter",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200401,
              "nome"=> "Rio Branco",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200427,
              "nome"=> "Rodrigues Alves",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200435,
              "nome"=> "Santa Rosa do Purus",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200450,
              "nome"=> "Senador Guiomard",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200500,
              "nome"=> "Sena Madureira",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200609,
              "nome"=> "Tarauacá",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200708,
              "nome"=> "Xapuri",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1200807,
              "nome"=> "Porto Acre",
              "estadobrasil_id"=> 12
            ],
            [
              "id"=> 1300029,
              "nome"=> "Alvarães",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300060,
              "nome"=> "Amaturá",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300086,
              "nome"=> "Anamã",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300102,
              "nome"=> "Anori",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300144,
              "nome"=> "Apuí",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300201,
              "nome"=> "Atalaia do Norte",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300300,
              "nome"=> "Autazes",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300409,
              "nome"=> "Barcelos",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300508,
              "nome"=> "Barreirinha",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300607,
              "nome"=> "Benjamin Constant",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300631,
              "nome"=> "Beruri",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300680,
              "nome"=> "Boa Vista do Ramos",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300706,
              "nome"=> "Boca do Acre",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300805,
              "nome"=> "Borba",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300839,
              "nome"=> "Caapiranga",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1300904,
              "nome"=> "Canutama",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301001,
              "nome"=> "Carauari",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301100,
              "nome"=> "Careiro",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301159,
              "nome"=> "Careiro da Várzea",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301209,
              "nome"=> "Coari",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301308,
              "nome"=> "Codajás",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301407,
              "nome"=> "Eirunepé",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301506,
              "nome"=> "Envira",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301605,
              "nome"=> "Fonte Boa",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301654,
              "nome"=> "Guajará",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301704,
              "nome"=> "Humaitá",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301803,
              "nome"=> "Ipixuna",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301852,
              "nome"=> "Iranduba",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301902,
              "nome"=> "Itacoatiara",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1301951,
              "nome"=> "Itamarati",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302009,
              "nome"=> "Itapiranga",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302108,
              "nome"=> "Japurá",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302207,
              "nome"=> "Juruá",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302306,
              "nome"=> "Jutaí",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302405,
              "nome"=> "Lábrea",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302504,
              "nome"=> "Manacapuru",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302553,
              "nome"=> "Manaquiri",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302603,
              "nome"=> "Manaus",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302702,
              "nome"=> "Manicoré",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302801,
              "nome"=> "Maraã",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1302900,
              "nome"=> "Maués",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303007,
              "nome"=> "Nhamundá",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303106,
              "nome"=> "Nova Olinda do Norte",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303205,
              "nome"=> "Novo Airão",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303304,
              "nome"=> "Novo Aripuanã",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303403,
              "nome"=> "Parintins",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303502,
              "nome"=> "Pauini",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303536,
              "nome"=> "Presidente Figueiredo",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303569,
              "nome"=> "Rio Preto da Eva",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303601,
              "nome"=> "Santa Isabel do Rio Negro",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303700,
              "nome"=> "Santo Antônio do Içá",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303809,
              "nome"=> "São Gabriel da Cachoeira",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303908,
              "nome"=> "São Paulo de Olivença",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1303957,
              "nome"=> "São Sebastião do Uatumã",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1304005,
              "nome"=> "Silves",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1304062,
              "nome"=> "Tabatinga",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1304104,
              "nome"=> "Tapauá",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1304203,
              "nome"=> "Tefé",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1304237,
              "nome"=> "Tonantins",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1304260,
              "nome"=> "Uarini",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1304302,
              "nome"=> "Urucará",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1304401,
              "nome"=> "Urucurituba",
              "estadobrasil_id"=> 13
            ],
            [
              "id"=> 1400027,
              "nome"=> "Amajari",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400050,
              "nome"=> "Alto Alegre",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400100,
              "nome"=> "Boa Vista",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400159,
              "nome"=> "Bonfim",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400175,
              "nome"=> "Cantá",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400209,
              "nome"=> "Caracaraí",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400233,
              "nome"=> "Caroebe",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400282,
              "nome"=> "Iracema",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400308,
              "nome"=> "Mucajaí",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400407,
              "nome"=> "Normandia",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400456,
              "nome"=> "Pacaraima",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400472,
              "nome"=> "Rorainópolis",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400506,
              "nome"=> "São João da Baliza",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400605,
              "nome"=> "São Luiz",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1400704,
              "nome"=> "Uiramutã",
              "estadobrasil_id"=> 14
            ],
            [
              "id"=> 1500107,
              "nome"=> "Abaetetuba",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500131,
              "nome"=> "Abel Figueiredo",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500206,
              "nome"=> "Acará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500305,
              "nome"=> "Afuá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500347,
              "nome"=> "Água Azul do Norte",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500404,
              "nome"=> "Alenquer",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500503,
              "nome"=> "Almeirim",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500602,
              "nome"=> "Altamira",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500701,
              "nome"=> "Anajás",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500800,
              "nome"=> "Ananindeua",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500859,
              "nome"=> "Anapu",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500909,
              "nome"=> "Augusto Corrêa",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1500958,
              "nome"=> "Aurora do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501006,
              "nome"=> "Aveiro",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501105,
              "nome"=> "Bagre",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501204,
              "nome"=> "Baião",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501253,
              "nome"=> "Bannach",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501303,
              "nome"=> "Barcarena",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501402,
              "nome"=> "Belém",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501451,
              "nome"=> "Belterra",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501501,
              "nome"=> "Benevides",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501576,
              "nome"=> "Bom Jesus do Tocantins",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501600,
              "nome"=> "Bonito",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501709,
              "nome"=> "Bragança",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501725,
              "nome"=> "Brasil Novo",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501758,
              "nome"=> "Brejo Grande do Araguaia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501782,
              "nome"=> "Breu Branco",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501808,
              "nome"=> "Breves",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501907,
              "nome"=> "Bujaru",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1501956,
              "nome"=> "Cachoeira do Piriá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502004,
              "nome"=> "Cachoeira do Arari",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502103,
              "nome"=> "Cametá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502152,
              "nome"=> "Canaã dos Carajás",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502202,
              "nome"=> "Capanema",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502301,
              "nome"=> "Capitão Poço",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502400,
              "nome"=> "Castanhal",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502509,
              "nome"=> "Chaves",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502608,
              "nome"=> "Colares",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502707,
              "nome"=> "Conceição do Araguaia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502756,
              "nome"=> "Concórdia do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502764,
              "nome"=> "Cumaru do Norte",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502772,
              "nome"=> "Curionópolis",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502806,
              "nome"=> "Curralinho",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502855,
              "nome"=> "Curuá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502905,
              "nome"=> "Curuçá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502939,
              "nome"=> "Dom Eliseu",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1502954,
              "nome"=> "Eldorado dos Carajás",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503002,
              "nome"=> "Faro",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503044,
              "nome"=> "Floresta do Araguaia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503077,
              "nome"=> "Garrafão do Norte",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503093,
              "nome"=> "Goianésia do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503101,
              "nome"=> "Gurupá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503200,
              "nome"=> "Igarapé-Açu",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503309,
              "nome"=> "Igarapé-Miri",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503408,
              "nome"=> "Inhangapi",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503457,
              "nome"=> "Ipixuna do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503507,
              "nome"=> "Irituia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503606,
              "nome"=> "Itaituba",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503705,
              "nome"=> "Itupiranga",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503754,
              "nome"=> "Jacareacanga",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503804,
              "nome"=> "Jacundá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1503903,
              "nome"=> "Juruti",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504000,
              "nome"=> "Limoeiro do Ajuru",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504059,
              "nome"=> "Mãe do Rio",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504109,
              "nome"=> "Magalhães Barata",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504208,
              "nome"=> "Marabá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504307,
              "nome"=> "Maracanã",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504406,
              "nome"=> "Marapanim",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504422,
              "nome"=> "Marituba",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504455,
              "nome"=> "Medicilândia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504505,
              "nome"=> "Melgaço",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504604,
              "nome"=> "Mocajuba",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504703,
              "nome"=> "Moju",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504752,
              "nome"=> "Mojuí dos Campos",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504802,
              "nome"=> "Monte Alegre",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504901,
              "nome"=> "Muaná",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504950,
              "nome"=> "Nova Esperança do Piriá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1504976,
              "nome"=> "Nova Ipixuna",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505007,
              "nome"=> "Nova Timboteua",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505031,
              "nome"=> "Novo Progresso",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505064,
              "nome"=> "Novo Repartimento",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505106,
              "nome"=> "Óbidos",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505205,
              "nome"=> "Oeiras do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505304,
              "nome"=> "Oriximiná",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505403,
              "nome"=> "Ourém",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505437,
              "nome"=> "Ourilândia do Norte",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505486,
              "nome"=> "Pacajá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505494,
              "nome"=> "Palestina do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505502,
              "nome"=> "Paragominas",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505536,
              "nome"=> "Parauapebas",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505551,
              "nome"=> "Pau d`Arco",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505601,
              "nome"=> "Peixe-Boi",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505635,
              "nome"=> "Piçarra",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505650,
              "nome"=> "Placas",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505700,
              "nome"=> "Ponta de Pedras",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505809,
              "nome"=> "Portel",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1505908,
              "nome"=> "Porto de Moz",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506005,
              "nome"=> "Prainha",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506104,
              "nome"=> "Primavera",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506112,
              "nome"=> "Quatipuru",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506138,
              "nome"=> "Redenção",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506161,
              "nome"=> "Rio Maria",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506187,
              "nome"=> "Rondon do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506195,
              "nome"=> "Rurópolis",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506203,
              "nome"=> "Salinópolis",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506302,
              "nome"=> "Salvaterra",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506351,
              "nome"=> "Santa Bárbara do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506401,
              "nome"=> "Santa Cruz do Arari",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506500,
              "nome"=> "Santa Isabel do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506559,
              "nome"=> "Santa Luzia do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506583,
              "nome"=> "Santa Maria das Barreiras",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506609,
              "nome"=> "Santa Maria do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506708,
              "nome"=> "Santana do Araguaia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506807,
              "nome"=> "Santarém",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1506906,
              "nome"=> "Santarém Novo",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507003,
              "nome"=> "Santo Antônio do Tauá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507102,
              "nome"=> "São Caetano de Odivelas",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507151,
              "nome"=> "São Domingos do Araguaia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507201,
              "nome"=> "São Domingos do Capim",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507300,
              "nome"=> "São Félix do Xingu",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507409,
              "nome"=> "São Francisco do Pará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507458,
              "nome"=> "São Geraldo do Araguaia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507466,
              "nome"=> "São João da Ponta",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507474,
              "nome"=> "São João de Pirabas",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507508,
              "nome"=> "São João do Araguaia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507607,
              "nome"=> "São Miguel do Guamá",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507706,
              "nome"=> "São Sebastião da Boa Vista",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507755,
              "nome"=> "Sapucaia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507805,
              "nome"=> "Senador José Porfírio",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507904,
              "nome"=> "Soure",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507953,
              "nome"=> "Tailândia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507961,
              "nome"=> "Terra Alta",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1507979,
              "nome"=> "Terra Santa",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508001,
              "nome"=> "Tomé-Açu",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508035,
              "nome"=> "Tracuateua",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508050,
              "nome"=> "Trairão",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508084,
              "nome"=> "Tucumã",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508100,
              "nome"=> "Tucuruí",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508126,
              "nome"=> "Ulianópolis",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508159,
              "nome"=> "Uruará",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508209,
              "nome"=> "Vigia",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508308,
              "nome"=> "Viseu",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508357,
              "nome"=> "Vitória do Xingu",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1508407,
              "nome"=> "Xinguara",
              "estadobrasil_id"=> 15
            ],
            [
              "id"=> 1600055,
              "nome"=> "Serra do Navio",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600105,
              "nome"=> "Amapá",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600154,
              "nome"=> "Pedra Branca do Amaparí",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600204,
              "nome"=> "Calçoene",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600212,
              "nome"=> "Cutias",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600238,
              "nome"=> "Ferreira Gomes",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600253,
              "nome"=> "Itaubal",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600279,
              "nome"=> "Laranjal do Jari",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600303,
              "nome"=> "Macapá",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600402,
              "nome"=> "Mazagão",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600501,
              "nome"=> "Oiapoque",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600535,
              "nome"=> "Porto Grande",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600550,
              "nome"=> "Pracuúba",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600600,
              "nome"=> "Santana",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600709,
              "nome"=> "Tartarugalzinho",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1600808,
              "nome"=> "Vitória do Jari",
              "estadobrasil_id"=> 16
            ],
            [
              "id"=> 1700251,
              "nome"=> "Abreulândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1700301,
              "nome"=> "Aguiarnópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1700350,
              "nome"=> "Aliança do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1700400,
              "nome"=> "Almas",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1700707,
              "nome"=> "Alvorada",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1701002,
              "nome"=> "Ananás",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1701051,
              "nome"=> "Angico",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1701101,
              "nome"=> "Aparecida do Rio Negro",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1701309,
              "nome"=> "Aragominas",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1701903,
              "nome"=> "Araguacema",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702000,
              "nome"=> "Araguaçu",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702109,
              "nome"=> "Araguaína",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702158,
              "nome"=> "Araguanã",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702208,
              "nome"=> "Araguatins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702307,
              "nome"=> "Arapoema",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702406,
              "nome"=> "Arraias",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702554,
              "nome"=> "Augustinópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702703,
              "nome"=> "Aurora do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1702901,
              "nome"=> "Axixá do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703008,
              "nome"=> "Babaçulândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703057,
              "nome"=> "Bandeirantes do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703073,
              "nome"=> "Barra do Ouro",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703107,
              "nome"=> "Barrolândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703206,
              "nome"=> "Bernardo Sayão",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703305,
              "nome"=> "Bom Jesus do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703602,
              "nome"=> "Brasilândia do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703701,
              "nome"=> "Brejinho de Nazaré",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703800,
              "nome"=> "Buriti do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703826,
              "nome"=> "Cachoeirinha",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703842,
              "nome"=> "Campos Lindos",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703867,
              "nome"=> "Cariri do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703883,
              "nome"=> "Carmolândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703891,
              "nome"=> "Carrasco Bonito",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1703909,
              "nome"=> "Caseara",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1704105,
              "nome"=> "Centenário",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1704600,
              "nome"=> "Chapada de Areia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1705102,
              "nome"=> "Chapada da Natividade",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1705508,
              "nome"=> "Colinas do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1705557,
              "nome"=> "Combinado",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1705607,
              "nome"=> "Conceição do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1706001,
              "nome"=> "Couto Magalhães",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1706100,
              "nome"=> "Cristalândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1706258,
              "nome"=> "Crixás do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1706506,
              "nome"=> "Darcinópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1707009,
              "nome"=> "Dianópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1707108,
              "nome"=> "Divinópolis do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1707207,
              "nome"=> "Dois Irmãos do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1707306,
              "nome"=> "Dueré",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1707405,
              "nome"=> "Esperantina",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1707553,
              "nome"=> "Fátima",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1707652,
              "nome"=> "Figueirópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1707702,
              "nome"=> "Filadélfia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1708205,
              "nome"=> "Formoso do Araguaia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1708254,
              "nome"=> "Fortaleza do Tabocão",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1708304,
              "nome"=> "Goianorte",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1709005,
              "nome"=> "Goiatins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1709302,
              "nome"=> "Guaraí",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1709500,
              "nome"=> "Gurupi",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1709807,
              "nome"=> "Ipueiras",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1710508,
              "nome"=> "Itacajá",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1710706,
              "nome"=> "Itaguatins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1710904,
              "nome"=> "Itapiratins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1711100,
              "nome"=> "Itaporã do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1711506,
              "nome"=> "Jaú do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1711803,
              "nome"=> "Juarina",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1711902,
              "nome"=> "Lagoa da Confusão",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1711951,
              "nome"=> "Lagoa do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1712009,
              "nome"=> "Lajeado",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1712157,
              "nome"=> "Lavandeira",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1712405,
              "nome"=> "Lizarda",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1712454,
              "nome"=> "Luzinópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1712504,
              "nome"=> "Marianópolis do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1712702,
              "nome"=> "Mateiros",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1712801,
              "nome"=> "Maurilândia do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1713205,
              "nome"=> "Miracema do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1713304,
              "nome"=> "Miranorte",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1713601,
              "nome"=> "Monte do Carmo",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1713700,
              "nome"=> "Monte Santo do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1713809,
              "nome"=> "Palmeiras do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1713957,
              "nome"=> "Muricilândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1714203,
              "nome"=> "Natividade",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1714302,
              "nome"=> "Nazaré",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1714880,
              "nome"=> "Nova Olinda",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1715002,
              "nome"=> "Nova Rosalândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1715101,
              "nome"=> "Novo Acordo",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1715150,
              "nome"=> "Novo Alegre",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1715259,
              "nome"=> "Novo Jardim",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1715507,
              "nome"=> "Oliveira de Fátima",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1715705,
              "nome"=> "Palmeirante",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1715754,
              "nome"=> "Palmeirópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1716109,
              "nome"=> "Paraíso do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1716208,
              "nome"=> "Paranã",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1716307,
              "nome"=> "Pau d`Arco",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1716505,
              "nome"=> "Pedro Afonso",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1716604,
              "nome"=> "Peixe",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1716653,
              "nome"=> "Pequizeiro",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1716703,
              "nome"=> "Colméia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1717008,
              "nome"=> "Pindorama do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1717206,
              "nome"=> "Piraquê",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1717503,
              "nome"=> "Pium",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1717800,
              "nome"=> "Ponte Alta do Bom Jesus",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1717909,
              "nome"=> "Ponte Alta do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718006,
              "nome"=> "Porto Alegre do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718204,
              "nome"=> "Porto Nacional",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718303,
              "nome"=> "Praia Norte",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718402,
              "nome"=> "Presidente Kennedy",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718451,
              "nome"=> "Pugmil",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718501,
              "nome"=> "Recursolândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718550,
              "nome"=> "Riachinho",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718659,
              "nome"=> "Rio da Conceição",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718709,
              "nome"=> "Rio dos Bois",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718758,
              "nome"=> "Rio Sono",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718808,
              "nome"=> "Sampaio",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718840,
              "nome"=> "Sandolândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718865,
              "nome"=> "Santa Fé do Araguaia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718881,
              "nome"=> "Santa Maria do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718899,
              "nome"=> "Santa Rita do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1718907,
              "nome"=> "Santa Rosa do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1719004,
              "nome"=> "Santa Tereza do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720002,
              "nome"=> "Santa Terezinha do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720101,
              "nome"=> "São Bento do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720150,
              "nome"=> "São Félix do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720200,
              "nome"=> "São Miguel do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720259,
              "nome"=> "São Salvador do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720309,
              "nome"=> "São Sebastião do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720499,
              "nome"=> "São Valério",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720655,
              "nome"=> "Silvanópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720804,
              "nome"=> "Sítio Novo do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720853,
              "nome"=> "Sucupira",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720903,
              "nome"=> "Taguatinga",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720937,
              "nome"=> "Taipas do Tocantins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1720978,
              "nome"=> "Talismã",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1721000,
              "nome"=> "Palmas",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1721109,
              "nome"=> "Tocantínia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1721208,
              "nome"=> "Tocantinópolis",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1721257,
              "nome"=> "Tupirama",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1721307,
              "nome"=> "Tupiratins",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1722081,
              "nome"=> "Wanderlândia",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 1722107,
              "nome"=> "Xambioá",
              "estadobrasil_id"=> 17
            ],
            [
              "id"=> 2100055,
              "nome"=> "Açailândia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100105,
              "nome"=> "Afonso Cunha",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100154,
              "nome"=> "Água Doce do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100204,
              "nome"=> "Alcântara",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100303,
              "nome"=> "Aldeias Altas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100402,
              "nome"=> "Altamira do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100436,
              "nome"=> "Alto Alegre do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100477,
              "nome"=> "Alto Alegre do Pindaré",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100501,
              "nome"=> "Alto Parnaíba",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100550,
              "nome"=> "Amapá do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100600,
              "nome"=> "Amarante do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100709,
              "nome"=> "Anajatuba",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100808,
              "nome"=> "Anapurus",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100832,
              "nome"=> "Apicum-Açu",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100873,
              "nome"=> "Araguanã",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100907,
              "nome"=> "Araioses",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2100956,
              "nome"=> "Arame",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101004,
              "nome"=> "Arari",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101103,
              "nome"=> "Axixá",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101202,
              "nome"=> "Bacabal",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101251,
              "nome"=> "Bacabeira",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101301,
              "nome"=> "Bacuri",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101350,
              "nome"=> "Bacurituba",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101400,
              "nome"=> "Balsas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101509,
              "nome"=> "Barão de Grajaú",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101608,
              "nome"=> "Barra do Corda",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101707,
              "nome"=> "Barreirinhas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101731,
              "nome"=> "Belágua",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101772,
              "nome"=> "Bela Vista do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101806,
              "nome"=> "Benedito Leite",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101905,
              "nome"=> "Bequimão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101939,
              "nome"=> "Bernardo do Mearim",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2101970,
              "nome"=> "Boa Vista do Gurupi",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102002,
              "nome"=> "Bom Jardim",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102036,
              "nome"=> "Bom Jesus das Selvas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102077,
              "nome"=> "Bom Lugar",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102101,
              "nome"=> "Brejo",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102150,
              "nome"=> "Brejo de Areia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102200,
              "nome"=> "Buriti",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102309,
              "nome"=> "Buriti Bravo",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102325,
              "nome"=> "Buriticupu",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102358,
              "nome"=> "Buritirana",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102374,
              "nome"=> "Cachoeira Grande",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102408,
              "nome"=> "Cajapió",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102507,
              "nome"=> "Cajari",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102556,
              "nome"=> "Campestre do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102606,
              "nome"=> "Cândido Mendes",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102705,
              "nome"=> "Cantanhede",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102754,
              "nome"=> "Capinzal do Norte",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102804,
              "nome"=> "Carolina",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2102903,
              "nome"=> "Carutapera",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103000,
              "nome"=> "Caxias",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103109,
              "nome"=> "Cedral",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103125,
              "nome"=> "Central do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103158,
              "nome"=> "Centro do Guilherme",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103174,
              "nome"=> "Centro Novo do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103208,
              "nome"=> "Chapadinha",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103257,
              "nome"=> "Cidelândia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103307,
              "nome"=> "Codó",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103406,
              "nome"=> "Coelho Neto",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103505,
              "nome"=> "Colinas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103554,
              "nome"=> "Conceição do Lago-Açu",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103604,
              "nome"=> "Coroatá",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103703,
              "nome"=> "Cururupu",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103752,
              "nome"=> "Davinópolis",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103802,
              "nome"=> "Dom Pedro",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2103901,
              "nome"=> "Duque Bacelar",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104008,
              "nome"=> "Esperantinópolis",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104057,
              "nome"=> "Estreito",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104073,
              "nome"=> "Feira Nova do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104081,
              "nome"=> "Fernando Falcão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104099,
              "nome"=> "Formosa da Serra Negra",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104107,
              "nome"=> "Fortaleza dos Nogueiras",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104206,
              "nome"=> "Fortuna",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104305,
              "nome"=> "Godofredo Viana",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104404,
              "nome"=> "Gonçalves Dias",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104503,
              "nome"=> "Governador Archer",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104552,
              "nome"=> "Governador Edison Lobão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104602,
              "nome"=> "Governador Eugênio Barros",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104628,
              "nome"=> "Governador Luiz Rocha",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104651,
              "nome"=> "Governador Newton Bello",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104677,
              "nome"=> "Governador Nunes Freire",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104701,
              "nome"=> "Graça Aranha",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104800,
              "nome"=> "Grajaú",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2104909,
              "nome"=> "Guimarães",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105005,
              "nome"=> "Humberto de Campos",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105104,
              "nome"=> "Icatu",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105153,
              "nome"=> "Igarapé do Meio",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105203,
              "nome"=> "Igarapé Grande",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105302,
              "nome"=> "Imperatriz",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105351,
              "nome"=> "Itaipava do Grajaú",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105401,
              "nome"=> "Itapecuru Mirim",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105427,
              "nome"=> "Itinga do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105450,
              "nome"=> "Jatobá",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105476,
              "nome"=> "Jenipapo dos Vieiras",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105500,
              "nome"=> "João Lisboa",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105609,
              "nome"=> "Joselândia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105658,
              "nome"=> "Junco do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105708,
              "nome"=> "Lago da Pedra",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105807,
              "nome"=> "Lago do Junco",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105906,
              "nome"=> "Lago Verde",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105922,
              "nome"=> "Lagoa do Mato",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105948,
              "nome"=> "Lago dos Rodrigues",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105963,
              "nome"=> "Lagoa Grande do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2105989,
              "nome"=> "Lajeado Novo",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106003,
              "nome"=> "Lima Campos",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106102,
              "nome"=> "Loreto",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106201,
              "nome"=> "Luís Domingues",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106300,
              "nome"=> "Magalhães de Almeida",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106326,
              "nome"=> "Maracaçumé",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106359,
              "nome"=> "Marajá do Sena",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106375,
              "nome"=> "Maranhãozinho",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106409,
              "nome"=> "Mata Roma",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106508,
              "nome"=> "Matinha",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106607,
              "nome"=> "Matões",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106631,
              "nome"=> "Matões do Norte",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106672,
              "nome"=> "Milagres do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106706,
              "nome"=> "Mirador",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106755,
              "nome"=> "Miranda do Norte",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106805,
              "nome"=> "Mirinzal",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2106904,
              "nome"=> "Monção",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107001,
              "nome"=> "Montes Altos",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107100,
              "nome"=> "Morros",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107209,
              "nome"=> "Nina Rodrigues",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107258,
              "nome"=> "Nova Colinas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107308,
              "nome"=> "Nova Iorque",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107357,
              "nome"=> "Nova Olinda do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107407,
              "nome"=> "Olho d`Água das Cunhãs",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107456,
              "nome"=> "Olinda Nova do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107506,
              "nome"=> "Paço do Lumiar",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107605,
              "nome"=> "Palmeirândia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107704,
              "nome"=> "Paraibano",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107803,
              "nome"=> "Parnarama",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2107902,
              "nome"=> "Passagem Franca",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108009,
              "nome"=> "Pastos Bons",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108058,
              "nome"=> "Paulino Neves",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108108,
              "nome"=> "Paulo Ramos",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108207,
              "nome"=> "Pedreiras",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108256,
              "nome"=> "Pedro do Rosário",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108306,
              "nome"=> "Penalva",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108405,
              "nome"=> "Peri Mirim",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108454,
              "nome"=> "Peritoró",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108504,
              "nome"=> "Pindaré-Mirim",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108603,
              "nome"=> "Pinheiro",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108702,
              "nome"=> "Pio XII",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108801,
              "nome"=> "Pirapemas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2108900,
              "nome"=> "Poção de Pedras",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109007,
              "nome"=> "Porto Franco",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109056,
              "nome"=> "Porto Rico do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109106,
              "nome"=> "Presidente Dutra",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109205,
              "nome"=> "Presidente Juscelino",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109239,
              "nome"=> "Presidente Médici",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109270,
              "nome"=> "Presidente Sarney",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109304,
              "nome"=> "Presidente Vargas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109403,
              "nome"=> "Primeira Cruz",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109452,
              "nome"=> "Raposa",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109502,
              "nome"=> "Riachão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109551,
              "nome"=> "Ribamar Fiquene",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109601,
              "nome"=> "Rosário",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109700,
              "nome"=> "Sambaíba",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109759,
              "nome"=> "Santa Filomena do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109809,
              "nome"=> "Santa Helena",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2109908,
              "nome"=> "Santa Inês",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110005,
              "nome"=> "Santa Luzia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110039,
              "nome"=> "Santa Luzia do Paruá",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110104,
              "nome"=> "Santa Quitéria do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110203,
              "nome"=> "Santa Rita",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110237,
              "nome"=> "Santana do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110278,
              "nome"=> "Santo Amaro do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110302,
              "nome"=> "Santo Antônio dos Lopes",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110401,
              "nome"=> "São Benedito do Rio Preto",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110500,
              "nome"=> "São Bento",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110609,
              "nome"=> "São Bernardo",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110658,
              "nome"=> "São Domingos do Azeitão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110708,
              "nome"=> "São Domingos do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110807,
              "nome"=> "São Félix de Balsas",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110856,
              "nome"=> "São Francisco do Brejão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2110906,
              "nome"=> "São Francisco do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111003,
              "nome"=> "São João Batista",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111029,
              "nome"=> "São João do Carú",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111052,
              "nome"=> "São João do Paraíso",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111078,
              "nome"=> "São João do Soter",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111102,
              "nome"=> "São João dos Patos",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111201,
              "nome"=> "São José de Ribamar",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111250,
              "nome"=> "São José dos Basílios",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111300,
              "nome"=> "São Luís",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111409,
              "nome"=> "São Luís Gonzaga do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111508,
              "nome"=> "São Mateus do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111532,
              "nome"=> "São Pedro da Água Branca",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111573,
              "nome"=> "São Pedro dos Crentes",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111607,
              "nome"=> "São Raimundo das Mangabeiras",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111631,
              "nome"=> "São Raimundo do Doca Bezerra",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111672,
              "nome"=> "São Roberto",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111706,
              "nome"=> "São Vicente Ferrer",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111722,
              "nome"=> "Satubinha",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111748,
              "nome"=> "Senador Alexandre Costa",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111763,
              "nome"=> "Senador La Rocque",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111789,
              "nome"=> "Serrano do Maranhão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111805,
              "nome"=> "Sítio Novo",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111904,
              "nome"=> "Sucupira do Norte",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2111953,
              "nome"=> "Sucupira do Riachão",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112001,
              "nome"=> "Tasso Fragoso",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112100,
              "nome"=> "Timbiras",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112209,
              "nome"=> "Timon",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112233,
              "nome"=> "Trizidela do Vale",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112274,
              "nome"=> "Tufilândia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112308,
              "nome"=> "Tuntum",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112407,
              "nome"=> "Turiaçu",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112456,
              "nome"=> "Turilândia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112506,
              "nome"=> "Tutóia",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112605,
              "nome"=> "Urbano Santos",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112704,
              "nome"=> "Vargem Grande",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112803,
              "nome"=> "Viana",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112852,
              "nome"=> "Vila Nova dos Martírios",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2112902,
              "nome"=> "Vitória do Mearim",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2113009,
              "nome"=> "Vitorino Freire",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2114007,
              "nome"=> "Zé Doca",
              "estadobrasil_id"=> 21
            ],
            [
              "id"=> 2200053,
              "nome"=> "Acauã",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200103,
              "nome"=> "Agricolândia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200202,
              "nome"=> "Água Branca",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200251,
              "nome"=> "Alagoinha do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200277,
              "nome"=> "Alegrete do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200301,
              "nome"=> "Alto Longá",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200400,
              "nome"=> "Altos",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200459,
              "nome"=> "Alvorada do Gurguéia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200509,
              "nome"=> "Amarante",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200608,
              "nome"=> "Angical do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200707,
              "nome"=> "Anísio de Abreu",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200806,
              "nome"=> "Antônio Almeida",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200905,
              "nome"=> "Aroazes",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2200954,
              "nome"=> "Aroeiras do Itaim",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201002,
              "nome"=> "Arraial",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201051,
              "nome"=> "Assunção do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201101,
              "nome"=> "Avelino Lopes",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201150,
              "nome"=> "Baixa Grande do Ribeiro",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201176,
              "nome"=> "Barra d`Alcântara",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201200,
              "nome"=> "Barras",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201309,
              "nome"=> "Barreiras do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201408,
              "nome"=> "Barro Duro",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201507,
              "nome"=> "Batalha",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201556,
              "nome"=> "Bela Vista do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201572,
              "nome"=> "Belém do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201606,
              "nome"=> "Beneditinos",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201705,
              "nome"=> "Bertolínia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201739,
              "nome"=> "Betânia do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201770,
              "nome"=> "Boa Hora",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201804,
              "nome"=> "Bocaina",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201903,
              "nome"=> "Bom Jesus",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201919,
              "nome"=> "Bom Princípio do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201929,
              "nome"=> "Bonfim do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201945,
              "nome"=> "Boqueirão do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201960,
              "nome"=> "Brasileira",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2201988,
              "nome"=> "Brejo do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202000,
              "nome"=> "Buriti dos Lopes",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202026,
              "nome"=> "Buriti dos Montes",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202059,
              "nome"=> "Cabeceiras do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202075,
              "nome"=> "Cajazeiras do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202083,
              "nome"=> "Cajueiro da Praia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202091,
              "nome"=> "Caldeirão Grande do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202109,
              "nome"=> "Campinas do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202117,
              "nome"=> "Campo Alegre do Fidalgo",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202133,
              "nome"=> "Campo Grande do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202174,
              "nome"=> "Campo Largo do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202208,
              "nome"=> "Campo Maior",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202251,
              "nome"=> "Canavieira",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202307,
              "nome"=> "Canto do Buriti",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202406,
              "nome"=> "Capitão de Campos",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202455,
              "nome"=> "Capitão Gervásio Oliveira",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202505,
              "nome"=> "Caracol",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202539,
              "nome"=> "Caraúbas do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202554,
              "nome"=> "Caridade do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202604,
              "nome"=> "Castelo do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202653,
              "nome"=> "Caxingó",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202703,
              "nome"=> "Cocal",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202711,
              "nome"=> "Cocal de Telha",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202729,
              "nome"=> "Cocal dos Alves",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202737,
              "nome"=> "Coivaras",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202752,
              "nome"=> "Colônia do Gurguéia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202778,
              "nome"=> "Colônia do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202802,
              "nome"=> "Conceição do Canindé",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202851,
              "nome"=> "Coronel José Dias",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2202901,
              "nome"=> "Corrente",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203008,
              "nome"=> "Cristalândia do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203107,
              "nome"=> "Cristino Castro",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203206,
              "nome"=> "Curimatá",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203230,
              "nome"=> "Currais",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203255,
              "nome"=> "Curralinhos",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203271,
              "nome"=> "Curral Novo do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203305,
              "nome"=> "Demerval Lobão",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203354,
              "nome"=> "Dirceu Arcoverde",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203404,
              "nome"=> "Dom Expedito Lopes",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203420,
              "nome"=> "Domingos Mourão",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203453,
              "nome"=> "Dom Inocêncio",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203503,
              "nome"=> "Elesbão Veloso",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203602,
              "nome"=> "Eliseu Martins",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203701,
              "nome"=> "Esperantina",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203750,
              "nome"=> "Fartura do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203800,
              "nome"=> "Flores do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203859,
              "nome"=> "Floresta do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2203909,
              "nome"=> "Floriano",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204006,
              "nome"=> "Francinópolis",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204105,
              "nome"=> "Francisco Ayres",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204154,
              "nome"=> "Francisco Macedo",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204204,
              "nome"=> "Francisco Santos",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204303,
              "nome"=> "Fronteiras",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204352,
              "nome"=> "Geminiano",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204402,
              "nome"=> "Gilbués",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204501,
              "nome"=> "Guadalupe",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204550,
              "nome"=> "Guaribas",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204600,
              "nome"=> "Hugo Napoleão",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204659,
              "nome"=> "Ilha Grande",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204709,
              "nome"=> "Inhuma",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204808,
              "nome"=> "Ipiranga do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2204907,
              "nome"=> "Isaías Coelho",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205003,
              "nome"=> "Itainópolis",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205102,
              "nome"=> "Itaueira",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205151,
              "nome"=> "Jacobina do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205201,
              "nome"=> "Jaicós",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205250,
              "nome"=> "Jardim do Mulato",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205276,
              "nome"=> "Jatobá do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205300,
              "nome"=> "Jerumenha",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205359,
              "nome"=> "João Costa",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205409,
              "nome"=> "Joaquim Pires",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205458,
              "nome"=> "Joca Marques",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205508,
              "nome"=> "José de Freitas",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205516,
              "nome"=> "Juazeiro do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205524,
              "nome"=> "Júlio Borges",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205532,
              "nome"=> "Jurema",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205540,
              "nome"=> "Lagoinha do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205557,
              "nome"=> "Lagoa Alegre",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205565,
              "nome"=> "Lagoa do Barro do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205573,
              "nome"=> "Lagoa de São Francisco",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205581,
              "nome"=> "Lagoa do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205599,
              "nome"=> "Lagoa do Sítio",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205607,
              "nome"=> "Landri Sales",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205706,
              "nome"=> "Luís Correia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205805,
              "nome"=> "Luzilândia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205854,
              "nome"=> "Madeiro",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205904,
              "nome"=> "Manoel Emídio",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2205953,
              "nome"=> "Marcolândia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206001,
              "nome"=> "Marcos Parente",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206050,
              "nome"=> "Massapê do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206100,
              "nome"=> "Matias Olímpio",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206209,
              "nome"=> "Miguel Alves",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206308,
              "nome"=> "Miguel Leão",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206357,
              "nome"=> "Milton Brandão",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206407,
              "nome"=> "Monsenhor Gil",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206506,
              "nome"=> "Monsenhor Hipólito",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206605,
              "nome"=> "Monte Alegre do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206654,
              "nome"=> "Morro Cabeça no Tempo",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206670,
              "nome"=> "Morro do Chapéu do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206696,
              "nome"=> "Murici dos Portelas",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206704,
              "nome"=> "Nazaré do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206720,
              "nome"=> "Nazária",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206753,
              "nome"=> "Nossa Senhora de Nazaré",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206803,
              "nome"=> "Nossa Senhora dos Remédios",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206902,
              "nome"=> "Novo Oriente do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2206951,
              "nome"=> "Novo Santo Antônio",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207009,
              "nome"=> "Oeiras",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207108,
              "nome"=> "Olho d`Água do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207207,
              "nome"=> "Padre Marcos",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207306,
              "nome"=> "Paes Landim",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207355,
              "nome"=> "Pajeú do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207405,
              "nome"=> "Palmeira do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207504,
              "nome"=> "Palmeirais",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207553,
              "nome"=> "Paquetá",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207603,
              "nome"=> "Parnaguá",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207702,
              "nome"=> "Parnaíba",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207751,
              "nome"=> "Passagem Franca do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207777,
              "nome"=> "Patos do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207793,
              "nome"=> "Pau d`Arco do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207801,
              "nome"=> "Paulistana",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207850,
              "nome"=> "Pavussu",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207900,
              "nome"=> "Pedro II",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207934,
              "nome"=> "Pedro Laurentino",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2207959,
              "nome"=> "Nova Santa Rita",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208007,
              "nome"=> "Picos",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208106,
              "nome"=> "Pimenteiras",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208205,
              "nome"=> "Pio IX",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208304,
              "nome"=> "Piracuruca",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208403,
              "nome"=> "Piripiri",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208502,
              "nome"=> "Porto",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208551,
              "nome"=> "Porto Alegre do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208601,
              "nome"=> "Prata do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208650,
              "nome"=> "Queimada Nova",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208700,
              "nome"=> "Redenção do Gurguéia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208809,
              "nome"=> "Regeneração",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208858,
              "nome"=> "Riacho Frio",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208874,
              "nome"=> "Ribeira do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2208908,
              "nome"=> "Ribeiro Gonçalves",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209005,
              "nome"=> "Rio Grande do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209104,
              "nome"=> "Santa Cruz do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209153,
              "nome"=> "Santa Cruz dos Milagres",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209203,
              "nome"=> "Santa Filomena",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209302,
              "nome"=> "Santa Luz",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209351,
              "nome"=> "Santana do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209377,
              "nome"=> "Santa Rosa do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209401,
              "nome"=> "Santo Antônio de Lisboa",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209450,
              "nome"=> "Santo Antônio dos Milagres",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209500,
              "nome"=> "Santo Inácio do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209559,
              "nome"=> "São Braz do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209609,
              "nome"=> "São Félix do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209658,
              "nome"=> "São Francisco de Assis do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209708,
              "nome"=> "São Francisco do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209757,
              "nome"=> "São Gonçalo do Gurguéia",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209807,
              "nome"=> "São Gonçalo do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209856,
              "nome"=> "São João da Canabrava",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209872,
              "nome"=> "São João da Fronteira",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209906,
              "nome"=> "São João da Serra",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209955,
              "nome"=> "São João da Varjota",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2209971,
              "nome"=> "São João do Arraial",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210003,
              "nome"=> "São João do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210052,
              "nome"=> "São José do Divino",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210102,
              "nome"=> "São José do Peixe",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210201,
              "nome"=> "São José do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210300,
              "nome"=> "São Julião",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210359,
              "nome"=> "São Lourenço do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210375,
              "nome"=> "São Luis do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210383,
              "nome"=> "São Miguel da Baixa Grande",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210391,
              "nome"=> "São Miguel do Fidalgo",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210409,
              "nome"=> "São Miguel do Tapuio",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210508,
              "nome"=> "São Pedro do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210607,
              "nome"=> "São Raimundo Nonato",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210623,
              "nome"=> "Sebastião Barros",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210631,
              "nome"=> "Sebastião Leal",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210656,
              "nome"=> "Sigefredo Pacheco",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210706,
              "nome"=> "Simões",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210805,
              "nome"=> "Simplício Mendes",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210904,
              "nome"=> "Socorro do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210938,
              "nome"=> "Sussuapara",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210953,
              "nome"=> "Tamboril do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2210979,
              "nome"=> "Tanque do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211001,
              "nome"=> "Teresina",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211100,
              "nome"=> "União",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211209,
              "nome"=> "Uruçuí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211308,
              "nome"=> "Valença do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211357,
              "nome"=> "Várzea Branca",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211407,
              "nome"=> "Várzea Grande",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211506,
              "nome"=> "Vera Mendes",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211605,
              "nome"=> "Vila Nova do Piauí",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2211704,
              "nome"=> "Wall Ferraz",
              "estadobrasil_id"=> 22
            ],
            [
              "id"=> 2300101,
              "nome"=> "Abaiara",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300150,
              "nome"=> "Acarape",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300200,
              "nome"=> "Acaraú",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300309,
              "nome"=> "Acopiara",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300408,
              "nome"=> "Aiuaba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300507,
              "nome"=> "Alcântaras",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300606,
              "nome"=> "Altaneira",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300705,
              "nome"=> "Alto Santo",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300754,
              "nome"=> "Amontada",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300804,
              "nome"=> "Antonina do Norte",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2300903,
              "nome"=> "Apuiarés",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301000,
              "nome"=> "Aquiraz",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301109,
              "nome"=> "Aracati",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301208,
              "nome"=> "Aracoiaba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301257,
              "nome"=> "Ararendá",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301307,
              "nome"=> "Araripe",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301406,
              "nome"=> "Aratuba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301505,
              "nome"=> "Arneiroz",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301604,
              "nome"=> "Assaré",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301703,
              "nome"=> "Aurora",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301802,
              "nome"=> "Baixio",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301851,
              "nome"=> "Banabuiú",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301901,
              "nome"=> "Barbalha",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2301950,
              "nome"=> "Barreira",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302008,
              "nome"=> "Barro",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302057,
              "nome"=> "Barroquinha",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302107,
              "nome"=> "Baturité",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302206,
              "nome"=> "Beberibe",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302305,
              "nome"=> "Bela Cruz",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302404,
              "nome"=> "Boa Viagem",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302503,
              "nome"=> "Brejo Santo",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302602,
              "nome"=> "Camocim",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302701,
              "nome"=> "Campos Sales",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302800,
              "nome"=> "Canindé",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2302909,
              "nome"=> "Capistrano",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303006,
              "nome"=> "Caridade",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303105,
              "nome"=> "Cariré",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303204,
              "nome"=> "Caririaçu",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303303,
              "nome"=> "Cariús",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303402,
              "nome"=> "Carnaubal",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303501,
              "nome"=> "Cascavel",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303600,
              "nome"=> "Catarina",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303659,
              "nome"=> "Catunda",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303709,
              "nome"=> "Caucaia",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303808,
              "nome"=> "Cedro",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303907,
              "nome"=> "Chaval",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303931,
              "nome"=> "Choró",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2303956,
              "nome"=> "Chorozinho",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304004,
              "nome"=> "Coreaú",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304103,
              "nome"=> "Crateús",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304202,
              "nome"=> "Crato",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304236,
              "nome"=> "Croatá",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304251,
              "nome"=> "Cruz",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304269,
              "nome"=> "Deputado Irapuan Pinheiro",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304277,
              "nome"=> "Ererê",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304285,
              "nome"=> "Eusébio",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304301,
              "nome"=> "Farias Brito",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304350,
              "nome"=> "Forquilha",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304400,
              "nome"=> "Fortaleza",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304459,
              "nome"=> "Fortim",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304509,
              "nome"=> "Frecheirinha",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304608,
              "nome"=> "General Sampaio",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304657,
              "nome"=> "Graça",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304707,
              "nome"=> "Granja",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304806,
              "nome"=> "Granjeiro",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304905,
              "nome"=> "Groaíras",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2304954,
              "nome"=> "Guaiúba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305001,
              "nome"=> "Guaraciaba do Norte",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305100,
              "nome"=> "Guaramiranga",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305209,
              "nome"=> "Hidrolândia",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305233,
              "nome"=> "Horizonte",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305266,
              "nome"=> "Ibaretama",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305308,
              "nome"=> "Ibiapina",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305332,
              "nome"=> "Ibicuitinga",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305357,
              "nome"=> "Icapuí",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305407,
              "nome"=> "Icó",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305506,
              "nome"=> "Iguatu",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305605,
              "nome"=> "Independência",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305654,
              "nome"=> "Ipaporanga",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305704,
              "nome"=> "Ipaumirim",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305803,
              "nome"=> "Ipu",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2305902,
              "nome"=> "Ipueiras",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306009,
              "nome"=> "Iracema",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306108,
              "nome"=> "Irauçuba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306207,
              "nome"=> "Itaiçaba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306256,
              "nome"=> "Itaitinga",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306306,
              "nome"=> "Itapagé",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306405,
              "nome"=> "Itapipoca",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306504,
              "nome"=> "Itapiúna",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306553,
              "nome"=> "Itarema",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306603,
              "nome"=> "Itatira",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306702,
              "nome"=> "Jaguaretama",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306801,
              "nome"=> "Jaguaribara",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2306900,
              "nome"=> "Jaguaribe",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307007,
              "nome"=> "Jaguaruana",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307106,
              "nome"=> "Jardim",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307205,
              "nome"=> "Jati",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307254,
              "nome"=> "Jijoca de Jericoacoara",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307304,
              "nome"=> "Juazeiro do Norte",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307403,
              "nome"=> "Jucás",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307502,
              "nome"=> "Lavras da Mangabeira",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307601,
              "nome"=> "Limoeiro do Norte",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307635,
              "nome"=> "Madalena",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307650,
              "nome"=> "Maracanaú",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307700,
              "nome"=> "Maranguape",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307809,
              "nome"=> "Marco",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2307908,
              "nome"=> "Martinópole",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308005,
              "nome"=> "Massapê",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308104,
              "nome"=> "Mauriti",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308203,
              "nome"=> "Meruoca",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308302,
              "nome"=> "Milagres",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308351,
              "nome"=> "Milhã",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308377,
              "nome"=> "Miraíma",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308401,
              "nome"=> "Missão Velha",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308500,
              "nome"=> "Mombaça",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308609,
              "nome"=> "Monsenhor Tabosa",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308708,
              "nome"=> "Morada Nova",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308807,
              "nome"=> "Moraújo",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2308906,
              "nome"=> "Morrinhos",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309003,
              "nome"=> "Mucambo",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309102,
              "nome"=> "Mulungu",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309201,
              "nome"=> "Nova Olinda",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309300,
              "nome"=> "Nova Russas",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309409,
              "nome"=> "Novo Oriente",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309458,
              "nome"=> "Ocara",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309508,
              "nome"=> "Orós",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309607,
              "nome"=> "Pacajus",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309706,
              "nome"=> "Pacatuba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309805,
              "nome"=> "Pacoti",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2309904,
              "nome"=> "Pacujá",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310001,
              "nome"=> "Palhano",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310100,
              "nome"=> "Palmácia",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310209,
              "nome"=> "Paracuru",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310258,
              "nome"=> "Paraipaba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310308,
              "nome"=> "Parambu",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310407,
              "nome"=> "Paramoti",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310506,
              "nome"=> "Pedra Branca",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310605,
              "nome"=> "Penaforte",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310704,
              "nome"=> "Pentecoste",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310803,
              "nome"=> "Pereiro",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310852,
              "nome"=> "Pindoretama",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310902,
              "nome"=> "Piquet Carneiro",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2310951,
              "nome"=> "Pires Ferreira",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311009,
              "nome"=> "Poranga",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311108,
              "nome"=> "Porteiras",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311207,
              "nome"=> "Potengi",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311231,
              "nome"=> "Potiretama",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311264,
              "nome"=> "Quiterianópolis",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311306,
              "nome"=> "Quixadá",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311355,
              "nome"=> "Quixelô",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311405,
              "nome"=> "Quixeramobim",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311504,
              "nome"=> "Quixeré",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311603,
              "nome"=> "Redenção",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311702,
              "nome"=> "Reriutaba",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311801,
              "nome"=> "Russas",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311900,
              "nome"=> "Saboeiro",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2311959,
              "nome"=> "Salitre",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312007,
              "nome"=> "Santana do Acaraú",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312106,
              "nome"=> "Santana do Cariri",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312205,
              "nome"=> "Santa Quitéria",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312304,
              "nome"=> "São Benedito",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312403,
              "nome"=> "São Gonçalo do Amarante",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312502,
              "nome"=> "São João do Jaguaribe",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312601,
              "nome"=> "São Luís do Curu",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312700,
              "nome"=> "Senador Pompeu",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312809,
              "nome"=> "Senador Sá",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2312908,
              "nome"=> "Sobral",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313005,
              "nome"=> "Solonópole",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313104,
              "nome"=> "Tabuleiro do Norte",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313203,
              "nome"=> "Tamboril",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313252,
              "nome"=> "Tarrafas",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313302,
              "nome"=> "Tauá",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313351,
              "nome"=> "Tejuçuoca",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313401,
              "nome"=> "Tianguá",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313500,
              "nome"=> "Trairi",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313559,
              "nome"=> "Tururu",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313609,
              "nome"=> "Ubajara",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313708,
              "nome"=> "Umari",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313757,
              "nome"=> "Umirim",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313807,
              "nome"=> "Uruburetama",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313906,
              "nome"=> "Uruoca",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2313955,
              "nome"=> "Varjota",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2314003,
              "nome"=> "Várzea Alegre",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2314102,
              "nome"=> "Viçosa do Ceará",
              "estadobrasil_id"=> 23
            ],
            [
              "id"=> 2400109,
              "nome"=> "Acari",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2400208,
              "nome"=> "Açu",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2400307,
              "nome"=> "Afonso Bezerra",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2400406,
              "nome"=> "Água Nova",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2400505,
              "nome"=> "Alexandria",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2400604,
              "nome"=> "Almino Afonso",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2400703,
              "nome"=> "Alto do Rodrigues",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2400802,
              "nome"=> "Angicos",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2400901,
              "nome"=> "Antônio Martins",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401008,
              "nome"=> "Apodi",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401107,
              "nome"=> "Areia Branca",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401206,
              "nome"=> "Arês",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401305,
              "nome"=> "Augusto Severo",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401404,
              "nome"=> "Baía Formosa",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401453,
              "nome"=> "Baraúna",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401503,
              "nome"=> "Barcelona",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401602,
              "nome"=> "Bento Fernandes",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401651,
              "nome"=> "Bodó",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401701,
              "nome"=> "Bom Jesus",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401800,
              "nome"=> "Brejinho",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401859,
              "nome"=> "Caiçara do Norte",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2401909,
              "nome"=> "Caiçara do Rio do Vento",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402006,
              "nome"=> "Caicó",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402105,
              "nome"=> "Campo Redondo",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402204,
              "nome"=> "Canguaretama",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402303,
              "nome"=> "Caraúbas",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402402,
              "nome"=> "Carnaúba dos Dantas",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402501,
              "nome"=> "Carnaubais",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402600,
              "nome"=> "Ceará-Mirim",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402709,
              "nome"=> "Cerro Corá",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402808,
              "nome"=> "Coronel Ezequiel",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2402907,
              "nome"=> "Coronel João Pessoa",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403004,
              "nome"=> "Cruzeta",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403103,
              "nome"=> "Currais Novos",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403202,
              "nome"=> "Doutor Severiano",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403251,
              "nome"=> "Parnamirim",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403301,
              "nome"=> "Encanto",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403400,
              "nome"=> "Equador",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403509,
              "nome"=> "Espírito Santo",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403608,
              "nome"=> "Extremoz",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403707,
              "nome"=> "Felipe Guerra",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403756,
              "nome"=> "Fernando Pedroza",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403806,
              "nome"=> "Florânia",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2403905,
              "nome"=> "Francisco Dantas",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404002,
              "nome"=> "Frutuoso Gomes",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404101,
              "nome"=> "Galinhos",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404200,
              "nome"=> "Goianinha",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404309,
              "nome"=> "Governador Dix-Sept Rosado",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404408,
              "nome"=> "Grossos",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404507,
              "nome"=> "Guamaré",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404606,
              "nome"=> "Ielmo Marinho",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404705,
              "nome"=> "Ipanguaçu",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404804,
              "nome"=> "Ipueira",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404853,
              "nome"=> "Itajá",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2404903,
              "nome"=> "Itaú",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405009,
              "nome"=> "Jaçanã",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405108,
              "nome"=> "Jandaíra",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405207,
              "nome"=> "Janduís",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405306,
              "nome"=> "Januário Cicco",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405405,
              "nome"=> "Japi",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405504,
              "nome"=> "Jardim de Angicos",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405603,
              "nome"=> "Jardim de Piranhas",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405702,
              "nome"=> "Jardim do Seridó",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405801,
              "nome"=> "João Câmara",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2405900,
              "nome"=> "João Dias",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406007,
              "nome"=> "José da Penha",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406106,
              "nome"=> "Jucurutu",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406155,
              "nome"=> "Jundiá",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406205,
              "nome"=> "Lagoa d`Anta",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406304,
              "nome"=> "Lagoa de Pedras",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406403,
              "nome"=> "Lagoa de Velhos",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406502,
              "nome"=> "Lagoa Nova",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406601,
              "nome"=> "Lagoa Salgada",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406700,
              "nome"=> "Lajes",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406809,
              "nome"=> "Lajes Pintadas",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2406908,
              "nome"=> "Lucrécia",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407005,
              "nome"=> "Luís Gomes",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407104,
              "nome"=> "Macaíba",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407203,
              "nome"=> "Macau",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407252,
              "nome"=> "Major Sales",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407302,
              "nome"=> "Marcelino Vieira",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407401,
              "nome"=> "Martins",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407500,
              "nome"=> "Maxaranguape",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407609,
              "nome"=> "Messias Targino",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407708,
              "nome"=> "Montanhas",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407807,
              "nome"=> "Monte Alegre",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2407906,
              "nome"=> "Monte das Gameleiras",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408003,
              "nome"=> "Mossoró",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408102,
              "nome"=> "Natal",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408201,
              "nome"=> "Nísia Floresta",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408300,
              "nome"=> "Nova Cruz",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408409,
              "nome"=> "Olho-d`Água do Borges",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408508,
              "nome"=> "Ouro Branco",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408607,
              "nome"=> "Paraná",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408706,
              "nome"=> "Paraú",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408805,
              "nome"=> "Parazinho",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408904,
              "nome"=> "Parelhas",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2408953,
              "nome"=> "Rio do Fogo",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409100,
              "nome"=> "Passa e Fica",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409209,
              "nome"=> "Passagem",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409308,
              "nome"=> "Patu",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409332,
              "nome"=> "Santa Maria",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409407,
              "nome"=> "Pau dos Ferros",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409506,
              "nome"=> "Pedra Grande",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409605,
              "nome"=> "Pedra Preta",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409704,
              "nome"=> "Pedro Avelino",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409803,
              "nome"=> "Pedro Velho",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2409902,
              "nome"=> "Pendências",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410009,
              "nome"=> "Pilões",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410108,
              "nome"=> "Poço Branco",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410207,
              "nome"=> "Portalegre",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410256,
              "nome"=> "Porto do Mangue",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410306,
              "nome"=> "Serra Caiada",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410405,
              "nome"=> "Pureza",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410504,
              "nome"=> "Rafael Fernandes",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410603,
              "nome"=> "Rafael Godeiro",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410702,
              "nome"=> "Riacho da Cruz",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410801,
              "nome"=> "Riacho de Santana",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2410900,
              "nome"=> "Riachuelo",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411007,
              "nome"=> "Rodolfo Fernandes",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411056,
              "nome"=> "Tibau",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411106,
              "nome"=> "Ruy Barbosa",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411205,
              "nome"=> "Santa Cruz",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411403,
              "nome"=> "Santana do Matos",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411429,
              "nome"=> "Santana do Seridó",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411502,
              "nome"=> "Santo Antônio",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411601,
              "nome"=> "São Bento do Norte",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411700,
              "nome"=> "São Bento do Trairí",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411809,
              "nome"=> "São Fernando",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2411908,
              "nome"=> "São Francisco do Oeste",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412005,
              "nome"=> "São Gonçalo do Amarante",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412104,
              "nome"=> "São João do Sabugi",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412203,
              "nome"=> "São José de Mipibu",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412302,
              "nome"=> "São José do Campestre",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412401,
              "nome"=> "São José do Seridó",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412500,
              "nome"=> "São Miguel",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412559,
              "nome"=> "São Miguel do Gostoso",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412609,
              "nome"=> "São Paulo do Potengi",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412708,
              "nome"=> "São Pedro",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412807,
              "nome"=> "São Rafael",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2412906,
              "nome"=> "São Tomé",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413003,
              "nome"=> "São Vicente",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413102,
              "nome"=> "Senador Elói de Souza",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413201,
              "nome"=> "Senador Georgino Avelino",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413300,
              "nome"=> "Serra de São Bento",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413359,
              "nome"=> "Serra do Mel",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413409,
              "nome"=> "Serra Negra do Norte",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413508,
              "nome"=> "Serrinha",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413557,
              "nome"=> "Serrinha dos Pintos",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413607,
              "nome"=> "Severiano Melo",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413706,
              "nome"=> "Sítio Novo",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413805,
              "nome"=> "Taboleiro Grande",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2413904,
              "nome"=> "Taipu",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414001,
              "nome"=> "Tangará",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414100,
              "nome"=> "Tenente Ananias",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414159,
              "nome"=> "Tenente Laurentino Cruz",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414209,
              "nome"=> "Tibau do Sul",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414308,
              "nome"=> "Timbaúba dos Batistas",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414407,
              "nome"=> "Touros",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414456,
              "nome"=> "Triunfo Potiguar",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414506,
              "nome"=> "Umarizal",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414605,
              "nome"=> "Upanema",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414704,
              "nome"=> "Várzea",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414753,
              "nome"=> "Venha-Ver",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414803,
              "nome"=> "Vera Cruz",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2414902,
              "nome"=> "Viçosa",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2415008,
              "nome"=> "Vila Flor",
              "estadobrasil_id"=> 24
            ],
            [
              "id"=> 2500106,
              "nome"=> "Água Branca",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500205,
              "nome"=> "Aguiar",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500304,
              "nome"=> "Alagoa Grande",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500403,
              "nome"=> "Alagoa Nova",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500502,
              "nome"=> "Alagoinha",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500536,
              "nome"=> "Alcantil",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500577,
              "nome"=> "Algodão de Jandaíra",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500601,
              "nome"=> "Alhandra",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500700,
              "nome"=> "São João do Rio do Peixe",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500734,
              "nome"=> "Amparo",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500775,
              "nome"=> "Aparecida",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500809,
              "nome"=> "Araçagi",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2500908,
              "nome"=> "Arara",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501005,
              "nome"=> "Araruna",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501104,
              "nome"=> "Areia",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501153,
              "nome"=> "Areia de Baraúnas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501203,
              "nome"=> "Areial",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501302,
              "nome"=> "Aroeiras",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501351,
              "nome"=> "Assunção",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501401,
              "nome"=> "Baía da Traição",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501500,
              "nome"=> "Bananeiras",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501534,
              "nome"=> "Baraúna",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501575,
              "nome"=> "Barra de Santana",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501609,
              "nome"=> "Barra de Santa Rosa",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501708,
              "nome"=> "Barra de São Miguel",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501807,
              "nome"=> "Bayeux",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2501906,
              "nome"=> "Belém",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502003,
              "nome"=> "Belém do Brejo do Cruz",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502052,
              "nome"=> "Bernardino Batista",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502102,
              "nome"=> "Boa Ventura",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502151,
              "nome"=> "Boa Vista",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502201,
              "nome"=> "Bom Jesus",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502300,
              "nome"=> "Bom Sucesso",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502409,
              "nome"=> "Bonito de Santa Fé",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502508,
              "nome"=> "Boqueirão",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502607,
              "nome"=> "Igaracy",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502706,
              "nome"=> "Borborema",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502805,
              "nome"=> "Brejo do Cruz",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2502904,
              "nome"=> "Brejo dos Santos",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503001,
              "nome"=> "Caaporã",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503100,
              "nome"=> "Cabaceiras",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503209,
              "nome"=> "Cabedelo",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503308,
              "nome"=> "Cachoeira dos Índios",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503407,
              "nome"=> "Cacimba de Areia",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503506,
              "nome"=> "Cacimba de Dentro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503555,
              "nome"=> "Cacimbas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503605,
              "nome"=> "Caiçara",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503704,
              "nome"=> "Cajazeiras",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503753,
              "nome"=> "Cajazeirinhas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503803,
              "nome"=> "Caldas Brandão",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2503902,
              "nome"=> "Camalaú",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504009,
              "nome"=> "Campina Grande",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504033,
              "nome"=> "Capim",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504074,
              "nome"=> "Caraúbas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504108,
              "nome"=> "Carrapateira",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504157,
              "nome"=> "Casserengue",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504207,
              "nome"=> "Catingueira",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504306,
              "nome"=> "Catolé do Rocha",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504355,
              "nome"=> "Caturité",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504405,
              "nome"=> "Conceição",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504504,
              "nome"=> "Condado",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504603,
              "nome"=> "Conde",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504702,
              "nome"=> "Congo",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504801,
              "nome"=> "Coremas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504850,
              "nome"=> "Coxixola",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2504900,
              "nome"=> "Cruz do Espírito Santo",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505006,
              "nome"=> "Cubati",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505105,
              "nome"=> "Cuité",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505204,
              "nome"=> "Cuitegi",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505238,
              "nome"=> "Cuité de Mamanguape",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505279,
              "nome"=> "Curral de Cima",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505303,
              "nome"=> "Curral Velho",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505352,
              "nome"=> "Damião",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505402,
              "nome"=> "Desterro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505501,
              "nome"=> "Vista Serrana",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505600,
              "nome"=> "Diamante",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505709,
              "nome"=> "Dona Inês",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505808,
              "nome"=> "Duas Estradas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2505907,
              "nome"=> "Emas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506004,
              "nome"=> "Esperança",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506103,
              "nome"=> "Fagundes",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506202,
              "nome"=> "Frei Martinho",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506251,
              "nome"=> "Gado Bravo",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506301,
              "nome"=> "Guarabira",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506400,
              "nome"=> "Gurinhém",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506509,
              "nome"=> "Gurjão",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506608,
              "nome"=> "Ibiara",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506707,
              "nome"=> "Imaculada",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506806,
              "nome"=> "Ingá",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2506905,
              "nome"=> "Itabaiana",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507002,
              "nome"=> "Itaporanga",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507101,
              "nome"=> "Itapororoca",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507200,
              "nome"=> "Itatuba",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507309,
              "nome"=> "Jacaraú",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507408,
              "nome"=> "Jericó",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507507,
              "nome"=> "João Pessoa",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507606,
              "nome"=> "Juarez Távora",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507705,
              "nome"=> "Juazeirinho",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507804,
              "nome"=> "Junco do Seridó",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2507903,
              "nome"=> "Juripiranga",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508000,
              "nome"=> "Juru",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508109,
              "nome"=> "Lagoa",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508208,
              "nome"=> "Lagoa de Dentro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508307,
              "nome"=> "Lagoa Seca",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508406,
              "nome"=> "Lastro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508505,
              "nome"=> "Livramento",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508554,
              "nome"=> "Logradouro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508604,
              "nome"=> "Lucena",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508703,
              "nome"=> "Mãe d`Água",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508802,
              "nome"=> "Malta",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2508901,
              "nome"=> "Mamanguape",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509008,
              "nome"=> "Manaíra",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509057,
              "nome"=> "Marcação",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509107,
              "nome"=> "Mari",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509156,
              "nome"=> "Marizópolis",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509206,
              "nome"=> "Massaranduba",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509305,
              "nome"=> "Mataraca",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509339,
              "nome"=> "Matinhas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509370,
              "nome"=> "Mato Grosso",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509396,
              "nome"=> "Maturéia",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509404,
              "nome"=> "Mogeiro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509503,
              "nome"=> "Montadas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509602,
              "nome"=> "Monte Horebe",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509701,
              "nome"=> "Monteiro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509800,
              "nome"=> "Mulungu",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2509909,
              "nome"=> "Natuba",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510006,
              "nome"=> "Nazarezinho",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510105,
              "nome"=> "Nova Floresta",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510204,
              "nome"=> "Nova Olinda",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510303,
              "nome"=> "Nova Palmeira",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510402,
              "nome"=> "Olho d`Água",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510501,
              "nome"=> "Olivedos",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510600,
              "nome"=> "Ouro Velho",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510659,
              "nome"=> "Parari",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510709,
              "nome"=> "Passagem",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510808,
              "nome"=> "Patos",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2510907,
              "nome"=> "Paulista",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511004,
              "nome"=> "Pedra Branca",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511103,
              "nome"=> "Pedra Lavrada",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511202,
              "nome"=> "Pedras de Fogo",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511301,
              "nome"=> "Piancó",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511400,
              "nome"=> "Picuí",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511509,
              "nome"=> "Pilar",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511608,
              "nome"=> "Pilões",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511707,
              "nome"=> "Pilõezinhos",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511806,
              "nome"=> "Pirpirituba",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2511905,
              "nome"=> "Pitimbu",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512002,
              "nome"=> "Pocinhos",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512036,
              "nome"=> "Poço Dantas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512077,
              "nome"=> "Poço de José de Moura",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512101,
              "nome"=> "Pombal",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512200,
              "nome"=> "Prata",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512309,
              "nome"=> "Princesa Isabel",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512408,
              "nome"=> "Puxinanã",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512507,
              "nome"=> "Queimadas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512606,
              "nome"=> "Quixabá",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512705,
              "nome"=> "Remígio",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512721,
              "nome"=> "Pedro Régis",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512747,
              "nome"=> "Riachão",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512754,
              "nome"=> "Riachão do Bacamarte",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512762,
              "nome"=> "Riachão do Poço",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512788,
              "nome"=> "Riacho de Santo Antônio",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512804,
              "nome"=> "Riacho dos Cavalos",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2512903,
              "nome"=> "Rio Tinto",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513000,
              "nome"=> "Salgadinho",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513109,
              "nome"=> "Salgado de São Félix",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513158,
              "nome"=> "Santa Cecília",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513208,
              "nome"=> "Santa Cruz",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513307,
              "nome"=> "Santa Helena",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513356,
              "nome"=> "Santa Inês",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513406,
              "nome"=> "Santa Luzia",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513505,
              "nome"=> "Santana de Mangueira",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513604,
              "nome"=> "Santana dos Garrotes",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513653,
              "nome"=> "Joca Claudino",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513703,
              "nome"=> "Santa Rita",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513802,
              "nome"=> "Santa Teresinha",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513851,
              "nome"=> "Santo André",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513901,
              "nome"=> "São Bento",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513927,
              "nome"=> "São Bentinho",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513943,
              "nome"=> "São Domingos do Cariri",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513968,
              "nome"=> "São Domingos",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2513984,
              "nome"=> "São Francisco",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514008,
              "nome"=> "São João do Cariri",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514107,
              "nome"=> "São João do Tigre",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514206,
              "nome"=> "São José da Lagoa Tapada",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514305,
              "nome"=> "São José de Caiana",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514404,
              "nome"=> "São José de Espinharas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514453,
              "nome"=> "São José dos Ramos",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514503,
              "nome"=> "São José de Piranhas",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514552,
              "nome"=> "São José de Princesa",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514602,
              "nome"=> "São José do Bonfim",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514651,
              "nome"=> "São José do Brejo do Cruz",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514701,
              "nome"=> "São José do Sabugi",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514800,
              "nome"=> "São José dos Cordeiros",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2514909,
              "nome"=> "São Mamede",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515005,
              "nome"=> "São Miguel de Taipu",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515104,
              "nome"=> "São Sebastião de Lagoa de Roça",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515203,
              "nome"=> "São Sebastião do Umbuzeiro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515302,
              "nome"=> "Sapé",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515401,
              "nome"=> "São Vicente do Seridó",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515500,
              "nome"=> "Serra Branca",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515609,
              "nome"=> "Serra da Raiz",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515708,
              "nome"=> "Serra Grande",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515807,
              "nome"=> "Serra Redonda",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515906,
              "nome"=> "Serraria",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515930,
              "nome"=> "Sertãozinho",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2515971,
              "nome"=> "Sobrado",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516003,
              "nome"=> "Solânea",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516102,
              "nome"=> "Soledade",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516151,
              "nome"=> "Sossêgo",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516201,
              "nome"=> "Sousa",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516300,
              "nome"=> "Sumé",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516409,
              "nome"=> "Tacima",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516508,
              "nome"=> "Taperoá",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516607,
              "nome"=> "Tavares",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516706,
              "nome"=> "Teixeira",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516755,
              "nome"=> "Tenório",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516805,
              "nome"=> "Triunfo",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2516904,
              "nome"=> "Uiraúna",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2517001,
              "nome"=> "Umbuzeiro",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2517100,
              "nome"=> "Várzea",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2517209,
              "nome"=> "Vieirópolis",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2517407,
              "nome"=> "Zabelê",
              "estadobrasil_id"=> 25
            ],
            [
              "id"=> 2600054,
              "nome"=> "Abreu e Lima",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600104,
              "nome"=> "Afogados da Ingazeira",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600203,
              "nome"=> "Afrânio",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600302,
              "nome"=> "Agrestina",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600401,
              "nome"=> "Água Preta",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600500,
              "nome"=> "Águas Belas",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600609,
              "nome"=> "Alagoinha",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600708,
              "nome"=> "Aliança",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600807,
              "nome"=> "Altinho",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2600906,
              "nome"=> "Amaraji",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601003,
              "nome"=> "Angelim",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601052,
              "nome"=> "Araçoiaba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601102,
              "nome"=> "Araripina",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601201,
              "nome"=> "Arcoverde",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601300,
              "nome"=> "Barra de Guabiraba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601409,
              "nome"=> "Barreiros",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601508,
              "nome"=> "Belém de Maria",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601607,
              "nome"=> "Belém de São Francisco",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601706,
              "nome"=> "Belo Jardim",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601805,
              "nome"=> "Betânia",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2601904,
              "nome"=> "Bezerros",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602001,
              "nome"=> "Bodocó",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602100,
              "nome"=> "Bom Conselho",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602209,
              "nome"=> "Bom Jardim",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602308,
              "nome"=> "Bonito",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602407,
              "nome"=> "Brejão",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602506,
              "nome"=> "Brejinho",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602605,
              "nome"=> "Brejo da Madre de Deus",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602704,
              "nome"=> "Buenos Aires",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602803,
              "nome"=> "Buíque",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2602902,
              "nome"=> "Cabo de Santo Agostinho",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603009,
              "nome"=> "Cabrobó",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603108,
              "nome"=> "Cachoeirinha",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603207,
              "nome"=> "Caetés",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603306,
              "nome"=> "Calçado",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603405,
              "nome"=> "Calumbi",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603454,
              "nome"=> "Camaragibe",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603504,
              "nome"=> "Camocim de São Félix",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603603,
              "nome"=> "Camutanga",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603702,
              "nome"=> "Canhotinho",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603801,
              "nome"=> "Capoeiras",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603900,
              "nome"=> "Carnaíba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2603926,
              "nome"=> "Carnaubeira da Penha",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604007,
              "nome"=> "Carpina",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604106,
              "nome"=> "Caruaru",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604155,
              "nome"=> "Casinhas",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604205,
              "nome"=> "Catende",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604304,
              "nome"=> "Cedro",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604403,
              "nome"=> "Chã de Alegria",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604502,
              "nome"=> "Chã Grande",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604601,
              "nome"=> "Condado",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604700,
              "nome"=> "Correntes",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604809,
              "nome"=> "Cortês",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2604908,
              "nome"=> "Cumaru",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605004,
              "nome"=> "Cupira",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605103,
              "nome"=> "Custódia",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605152,
              "nome"=> "Dormentes",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605202,
              "nome"=> "Escada",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605301,
              "nome"=> "Exu",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605400,
              "nome"=> "Feira Nova",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605459,
              "nome"=> "Fernando de Noronha",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605509,
              "nome"=> "Ferreiros",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605608,
              "nome"=> "Flores",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605707,
              "nome"=> "Floresta",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605806,
              "nome"=> "Frei Miguelinho",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2605905,
              "nome"=> "Gameleira",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606002,
              "nome"=> "Garanhuns",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606101,
              "nome"=> "Glória do Goitá",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606200,
              "nome"=> "Goiana",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606309,
              "nome"=> "Granito",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606408,
              "nome"=> "Gravatá",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606507,
              "nome"=> "Iati",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606606,
              "nome"=> "Ibimirim",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606705,
              "nome"=> "Ibirajuba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606804,
              "nome"=> "Igarassu",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2606903,
              "nome"=> "Iguaraci",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607000,
              "nome"=> "Inajá",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607109,
              "nome"=> "Ingazeira",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607208,
              "nome"=> "Ipojuca",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607307,
              "nome"=> "Ipubi",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607406,
              "nome"=> "Itacuruba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607505,
              "nome"=> "Itaíba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607604,
              "nome"=> "Ilha de Itamaracá",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607653,
              "nome"=> "Itambé",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607703,
              "nome"=> "Itapetim",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607752,
              "nome"=> "Itapissuma",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607802,
              "nome"=> "Itaquitinga",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607901,
              "nome"=> "Jaboatão dos Guararapes",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2607950,
              "nome"=> "Jaqueira",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608008,
              "nome"=> "Jataúba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608057,
              "nome"=> "Jatobá",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608107,
              "nome"=> "João Alfredo",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608206,
              "nome"=> "Joaquim Nabuco",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608255,
              "nome"=> "Jucati",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608305,
              "nome"=> "Jupi",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608404,
              "nome"=> "Jurema",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608453,
              "nome"=> "Lagoa do Carro",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608503,
              "nome"=> "Lagoa do Itaenga",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608602,
              "nome"=> "Lagoa do Ouro",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608701,
              "nome"=> "Lagoa dos Gatos",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608750,
              "nome"=> "Lagoa Grande",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608800,
              "nome"=> "Lajedo",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2608909,
              "nome"=> "Limoeiro",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609006,
              "nome"=> "Macaparana",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609105,
              "nome"=> "Machados",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609154,
              "nome"=> "Manari",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609204,
              "nome"=> "Maraial",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609303,
              "nome"=> "Mirandiba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609402,
              "nome"=> "Moreno",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609501,
              "nome"=> "Nazaré da Mata",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609600,
              "nome"=> "Olinda",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609709,
              "nome"=> "Orobó",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609808,
              "nome"=> "Orocó",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2609907,
              "nome"=> "Ouricuri",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610004,
              "nome"=> "Palmares",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610103,
              "nome"=> "Palmeirina",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610202,
              "nome"=> "Panelas",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610301,
              "nome"=> "Paranatama",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610400,
              "nome"=> "Parnamirim",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610509,
              "nome"=> "Passira",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610608,
              "nome"=> "Paudalho",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610707,
              "nome"=> "Paulista",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610806,
              "nome"=> "Pedra",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2610905,
              "nome"=> "Pesqueira",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611002,
              "nome"=> "Petrolândia",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611101,
              "nome"=> "Petrolina",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611200,
              "nome"=> "Poção",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611309,
              "nome"=> "Pombos",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611408,
              "nome"=> "Primavera",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611507,
              "nome"=> "Quipapá",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611533,
              "nome"=> "Quixaba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611606,
              "nome"=> "Recife",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611705,
              "nome"=> "Riacho das Almas",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611804,
              "nome"=> "Ribeirão",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2611903,
              "nome"=> "Rio Formoso",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612000,
              "nome"=> "Sairé",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612109,
              "nome"=> "Salgadinho",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612208,
              "nome"=> "Salgueiro",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612307,
              "nome"=> "Saloá",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612406,
              "nome"=> "Sanharó",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612455,
              "nome"=> "Santa Cruz",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612471,
              "nome"=> "Santa Cruz da Baixa Verde",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612505,
              "nome"=> "Santa Cruz do Capibaribe",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612554,
              "nome"=> "Santa Filomena",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612604,
              "nome"=> "Santa Maria da Boa Vista",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612703,
              "nome"=> "Santa Maria do Cambucá",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612802,
              "nome"=> "Santa Terezinha",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2612901,
              "nome"=> "São Benedito do Sul",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613008,
              "nome"=> "São Bento do Una",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613107,
              "nome"=> "São Caitano",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613206,
              "nome"=> "São João",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613305,
              "nome"=> "São Joaquim do Monte",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613404,
              "nome"=> "São José da Coroa Grande",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613503,
              "nome"=> "São José do Belmonte",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613602,
              "nome"=> "São José do Egito",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613701,
              "nome"=> "São Lourenço da Mata",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613800,
              "nome"=> "São Vicente Ferrer",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2613909,
              "nome"=> "Serra Talhada",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614006,
              "nome"=> "Serrita",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614105,
              "nome"=> "Sertânia",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614204,
              "nome"=> "Sirinhaém",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614303,
              "nome"=> "Moreilândia",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614402,
              "nome"=> "Solidão",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614501,
              "nome"=> "Surubim",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614600,
              "nome"=> "Tabira",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614709,
              "nome"=> "Tacaimbó",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614808,
              "nome"=> "Tacaratu",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2614857,
              "nome"=> "Tamandaré",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615003,
              "nome"=> "Taquaritinga do Norte",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615102,
              "nome"=> "Terezinha",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615201,
              "nome"=> "Terra Nova",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615300,
              "nome"=> "Timbaúba",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615409,
              "nome"=> "Toritama",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615508,
              "nome"=> "Tracunhaém",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615607,
              "nome"=> "Trindade",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615706,
              "nome"=> "Triunfo",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615805,
              "nome"=> "Tupanatinga",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2615904,
              "nome"=> "Tuparetama",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2616001,
              "nome"=> "Venturosa",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2616100,
              "nome"=> "Verdejante",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2616183,
              "nome"=> "Vertente do Lério",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2616209,
              "nome"=> "Vertentes",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2616308,
              "nome"=> "Vicência",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2616407,
              "nome"=> "Vitória de Santo Antão",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2616506,
              "nome"=> "Xexéu",
              "estadobrasil_id"=> 26
            ],
            [
              "id"=> 2700102,
              "nome"=> "Água Branca",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2700201,
              "nome"=> "Anadia",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2700300,
              "nome"=> "Arapiraca",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2700409,
              "nome"=> "Atalaia",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2700508,
              "nome"=> "Barra de Santo Antônio",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2700607,
              "nome"=> "Barra de São Miguel",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2700706,
              "nome"=> "Batalha",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2700805,
              "nome"=> "Belém",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2700904,
              "nome"=> "Belo Monte",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701001,
              "nome"=> "Boca da Mata",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701100,
              "nome"=> "Branquinha",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701209,
              "nome"=> "Cacimbinhas",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701308,
              "nome"=> "Cajueiro",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701357,
              "nome"=> "Campestre",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701407,
              "nome"=> "Campo Alegre",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701506,
              "nome"=> "Campo Grande",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701605,
              "nome"=> "Canapi",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701704,
              "nome"=> "Capela",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701803,
              "nome"=> "Carneiros",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2701902,
              "nome"=> "Chã Preta",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702009,
              "nome"=> "Coité do Nóia",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702108,
              "nome"=> "Colônia Leopoldina",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702207,
              "nome"=> "Coqueiro Seco",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702306,
              "nome"=> "Coruripe",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702355,
              "nome"=> "Craíbas",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702405,
              "nome"=> "Delmiro Gouveia",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702504,
              "nome"=> "Dois Riachos",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702553,
              "nome"=> "Estrela de Alagoas",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702603,
              "nome"=> "Feira Grande",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702702,
              "nome"=> "Feliz Deserto",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702801,
              "nome"=> "Flexeiras",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2702900,
              "nome"=> "Girau do Ponciano",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703007,
              "nome"=> "Ibateguara",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703106,
              "nome"=> "Igaci",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703205,
              "nome"=> "Igreja Nova",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703304,
              "nome"=> "Inhapi",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703403,
              "nome"=> "Jacaré dos Homens",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703502,
              "nome"=> "Jacuípe",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703601,
              "nome"=> "Japaratinga",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703700,
              "nome"=> "Jaramataia",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703759,
              "nome"=> "Jequiá da Praia",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703809,
              "nome"=> "Joaquim Gomes",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2703908,
              "nome"=> "Jundiá",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704005,
              "nome"=> "Junqueiro",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704104,
              "nome"=> "Lagoa da Canoa",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704203,
              "nome"=> "Limoeiro de Anadia",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704302,
              "nome"=> "Maceió",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704401,
              "nome"=> "Major Isidoro",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704500,
              "nome"=> "Maragogi",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704609,
              "nome"=> "Maravilha",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704708,
              "nome"=> "Marechal Deodoro",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704807,
              "nome"=> "Maribondo",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2704906,
              "nome"=> "Mar Vermelho",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705002,
              "nome"=> "Mata Grande",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705101,
              "nome"=> "Matriz de Camaragibe",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705200,
              "nome"=> "Messias",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705309,
              "nome"=> "Minador do Negrão",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705408,
              "nome"=> "Monteirópolis",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705507,
              "nome"=> "Murici",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705606,
              "nome"=> "Novo Lino",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705705,
              "nome"=> "Olho d`Água das Flores",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705804,
              "nome"=> "Olho d`Água do Casado",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2705903,
              "nome"=> "Olho d`Água Grande",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706000,
              "nome"=> "Olivença",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706109,
              "nome"=> "Ouro Branco",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706208,
              "nome"=> "Palestina",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706307,
              "nome"=> "Palmeira dos Índios",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706406,
              "nome"=> "Pão de Açúcar",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706422,
              "nome"=> "Pariconha",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706448,
              "nome"=> "Paripueira",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706505,
              "nome"=> "Passo de Camaragibe",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706604,
              "nome"=> "Paulo Jacinto",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706703,
              "nome"=> "Penedo",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706802,
              "nome"=> "Piaçabuçu",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2706901,
              "nome"=> "Pilar",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707008,
              "nome"=> "Pindoba",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707107,
              "nome"=> "Piranhas",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707206,
              "nome"=> "Poço das Trincheiras",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707305,
              "nome"=> "Porto Calvo",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707404,
              "nome"=> "Porto de Pedras",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707503,
              "nome"=> "Porto Real do Colégio",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707602,
              "nome"=> "Quebrangulo",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707701,
              "nome"=> "Rio Largo",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707800,
              "nome"=> "Roteiro",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2707909,
              "nome"=> "Santa Luzia do Norte",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708006,
              "nome"=> "Santana do Ipanema",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708105,
              "nome"=> "Santana do Mundaú",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708204,
              "nome"=> "São Brás",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708303,
              "nome"=> "São José da Laje",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708402,
              "nome"=> "São José da Tapera",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708501,
              "nome"=> "São Luís do Quitunde",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708600,
              "nome"=> "São Miguel dos Campos",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708709,
              "nome"=> "São Miguel dos Milagres",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708808,
              "nome"=> "São Sebastião",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708907,
              "nome"=> "Satuba",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2708956,
              "nome"=> "Senador Rui Palmeira",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2709004,
              "nome"=> "Tanque d`Arca",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2709103,
              "nome"=> "Taquarana",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2709152,
              "nome"=> "Teotônio Vilela",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2709202,
              "nome"=> "Traipu",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2709301,
              "nome"=> "União dos Palmares",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2709400,
              "nome"=> "Viçosa",
              "estadobrasil_id"=> 27
            ],
            [
              "id"=> 2800100,
              "nome"=> "Amparo de São Francisco",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2800209,
              "nome"=> "Aquidabã",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2800308,
              "nome"=> "Aracaju",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2800407,
              "nome"=> "Arauá",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2800506,
              "nome"=> "Areia Branca",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2800605,
              "nome"=> "Barra dos Coqueiros",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2800670,
              "nome"=> "Boquim",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2800704,
              "nome"=> "Brejo Grande",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801009,
              "nome"=> "Campo do Brito",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801108,
              "nome"=> "Canhoba",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801207,
              "nome"=> "Canindé de São Francisco",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801306,
              "nome"=> "Capela",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801405,
              "nome"=> "Carira",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801504,
              "nome"=> "Carmópolis",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801603,
              "nome"=> "Cedro de São João",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801702,
              "nome"=> "Cristinápolis",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2801900,
              "nome"=> "Cumbe",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802007,
              "nome"=> "Divina Pastora",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802106,
              "nome"=> "Estância",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802205,
              "nome"=> "Feira Nova",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802304,
              "nome"=> "Frei Paulo",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802403,
              "nome"=> "Gararu",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802502,
              "nome"=> "General Maynard",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802601,
              "nome"=> "Gracho Cardoso",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802700,
              "nome"=> "Ilha das Flores",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802809,
              "nome"=> "Indiaroba",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2802908,
              "nome"=> "Itabaiana",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803005,
              "nome"=> "Itabaianinha",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803104,
              "nome"=> "Itabi",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803203,
              "nome"=> "Itaporanga d`Ajuda",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803302,
              "nome"=> "Japaratuba",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803401,
              "nome"=> "Japoatã",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803500,
              "nome"=> "Lagarto",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803609,
              "nome"=> "Laranjeiras",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803708,
              "nome"=> "Macambira",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803807,
              "nome"=> "Malhada dos Bois",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2803906,
              "nome"=> "Malhador",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804003,
              "nome"=> "Maruim",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804102,
              "nome"=> "Moita Bonita",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804201,
              "nome"=> "Monte Alegre de Sergipe",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804300,
              "nome"=> "Muribeca",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804409,
              "nome"=> "Neópolis",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804458,
              "nome"=> "Nossa Senhora Aparecida",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804508,
              "nome"=> "Nossa Senhora da Glória",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804607,
              "nome"=> "Nossa Senhora das Dores",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804706,
              "nome"=> "Nossa Senhora de Lourdes",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804805,
              "nome"=> "Nossa Senhora do Socorro",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2804904,
              "nome"=> "Pacatuba",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805000,
              "nome"=> "Pedra Mole",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805109,
              "nome"=> "Pedrinhas",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805208,
              "nome"=> "Pinhão",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805307,
              "nome"=> "Pirambu",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805406,
              "nome"=> "Poço Redondo",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805505,
              "nome"=> "Poço Verde",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805604,
              "nome"=> "Porto da Folha",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805703,
              "nome"=> "Propriá",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805802,
              "nome"=> "Riachão do Dantas",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2805901,
              "nome"=> "Riachuelo",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806008,
              "nome"=> "Ribeirópolis",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806107,
              "nome"=> "Rosário do Catete",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806206,
              "nome"=> "Salgado",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806305,
              "nome"=> "Santa Luzia do Itanhy",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806404,
              "nome"=> "Santana do São Francisco",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806503,
              "nome"=> "Santa Rosa de Lima",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806602,
              "nome"=> "Santo Amaro das Brotas",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806701,
              "nome"=> "São Cristóvão",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806800,
              "nome"=> "São Domingos",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2806909,
              "nome"=> "São Francisco",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2807006,
              "nome"=> "São Miguel do Aleixo",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2807105,
              "nome"=> "Simão Dias",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2807204,
              "nome"=> "Siriri",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2807303,
              "nome"=> "Telha",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2807402,
              "nome"=> "Tobias Barreto",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2807501,
              "nome"=> "Tomar do Geru",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2807600,
              "nome"=> "Umbaúba",
              "estadobrasil_id"=> 28
            ],
            [
              "id"=> 2900108,
              "nome"=> "Abaíra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900207,
              "nome"=> "Abaré",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900306,
              "nome"=> "Acajutiba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900355,
              "nome"=> "Adustina",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900405,
              "nome"=> "Água Fria",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900504,
              "nome"=> "Érico Cardoso",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900603,
              "nome"=> "Aiquara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900702,
              "nome"=> "Alagoinhas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900801,
              "nome"=> "Alcobaça",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2900900,
              "nome"=> "Almadina",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901007,
              "nome"=> "Amargosa",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901106,
              "nome"=> "Amélia Rodrigues",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901155,
              "nome"=> "América Dourada",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901205,
              "nome"=> "Anagé",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901304,
              "nome"=> "Andaraí",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901353,
              "nome"=> "Andorinha",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901403,
              "nome"=> "Angical",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901502,
              "nome"=> "Anguera",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901601,
              "nome"=> "Antas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901700,
              "nome"=> "Antônio Cardoso",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901809,
              "nome"=> "Antônio Gonçalves",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901908,
              "nome"=> "Aporá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2901957,
              "nome"=> "Apuarema",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902005,
              "nome"=> "Aracatu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902054,
              "nome"=> "Araças",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902104,
              "nome"=> "Araci",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902203,
              "nome"=> "Aramari",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902252,
              "nome"=> "Arataca",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902302,
              "nome"=> "Aratuípe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902401,
              "nome"=> "Aurelino Leal",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902500,
              "nome"=> "Baianópolis",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902609,
              "nome"=> "Baixa Grande",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902658,
              "nome"=> "Banzaê",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902708,
              "nome"=> "Barra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902807,
              "nome"=> "Barra da Estiva",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2902906,
              "nome"=> "Barra do Choça",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903003,
              "nome"=> "Barra do Mendes",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903102,
              "nome"=> "Barra do Rocha",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903201,
              "nome"=> "Barreiras",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903235,
              "nome"=> "Barro Alto",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903276,
              "nome"=> "Barrocas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903300,
              "nome"=> "Barro Preto",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903409,
              "nome"=> "Belmonte",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903508,
              "nome"=> "Belo Campo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903607,
              "nome"=> "Biritinga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903706,
              "nome"=> "Boa Nova",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903805,
              "nome"=> "Boa Vista do Tupim",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903904,
              "nome"=> "Bom Jesus da Lapa",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2903953,
              "nome"=> "Bom Jesus da Serra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904001,
              "nome"=> "Boninal",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904050,
              "nome"=> "Bonito",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904100,
              "nome"=> "Boquira",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904209,
              "nome"=> "Botuporã",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904308,
              "nome"=> "Brejões",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904407,
              "nome"=> "Brejolândia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904506,
              "nome"=> "Brotas de Macaúbas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904605,
              "nome"=> "Brumado",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904704,
              "nome"=> "Buerarema",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904753,
              "nome"=> "Buritirama",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904803,
              "nome"=> "Caatiba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904852,
              "nome"=> "Cabaceiras do Paraguaçu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2904902,
              "nome"=> "Cachoeira",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905008,
              "nome"=> "Caculé",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905107,
              "nome"=> "Caém",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905156,
              "nome"=> "Caetanos",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905206,
              "nome"=> "Caetité",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905305,
              "nome"=> "Cafarnaum",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905404,
              "nome"=> "Cairu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905503,
              "nome"=> "Caldeirão Grande",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905602,
              "nome"=> "Camacan",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905701,
              "nome"=> "Camaçari",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905800,
              "nome"=> "Camamu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2905909,
              "nome"=> "Campo Alegre de Lourdes",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906006,
              "nome"=> "Campo Formoso",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906105,
              "nome"=> "Canápolis",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906204,
              "nome"=> "Canarana",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906303,
              "nome"=> "Canavieiras",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906402,
              "nome"=> "Candeal",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906501,
              "nome"=> "Candeias",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906600,
              "nome"=> "Candiba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906709,
              "nome"=> "Cândido Sales",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906808,
              "nome"=> "Cansanção",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906824,
              "nome"=> "Canudos",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906857,
              "nome"=> "Capela do Alto Alegre",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906873,
              "nome"=> "Capim Grosso",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906899,
              "nome"=> "Caraíbas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2906907,
              "nome"=> "Caravelas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907004,
              "nome"=> "Cardeal da Silva",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907103,
              "nome"=> "Carinhanha",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907202,
              "nome"=> "Casa Nova",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907301,
              "nome"=> "Castro Alves",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907400,
              "nome"=> "Catolândia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907509,
              "nome"=> "Catu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907558,
              "nome"=> "Caturama",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907608,
              "nome"=> "Central",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907707,
              "nome"=> "Chorrochó",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907806,
              "nome"=> "Cícero Dantas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2907905,
              "nome"=> "Cipó",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908002,
              "nome"=> "Coaraci",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908101,
              "nome"=> "Cocos",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908200,
              "nome"=> "Conceição da Feira",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908309,
              "nome"=> "Conceição do Almeida",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908408,
              "nome"=> "Conceição do Coité",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908507,
              "nome"=> "Conceição do Jacuípe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908606,
              "nome"=> "Conde",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908705,
              "nome"=> "Condeúba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908804,
              "nome"=> "Contendas do Sincorá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2908903,
              "nome"=> "Coração de Maria",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909000,
              "nome"=> "Cordeiros",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909109,
              "nome"=> "Coribe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909208,
              "nome"=> "Coronel João Sá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909307,
              "nome"=> "Correntina",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909406,
              "nome"=> "Cotegipe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909505,
              "nome"=> "Cravolândia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909604,
              "nome"=> "Crisópolis",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909703,
              "nome"=> "Cristópolis",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909802,
              "nome"=> "Cruz das Almas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2909901,
              "nome"=> "Curaçá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910008,
              "nome"=> "Dário Meira",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910057,
              "nome"=> "Dias d`Ávila",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910107,
              "nome"=> "Dom Basílio",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910206,
              "nome"=> "Dom Macedo Costa",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910305,
              "nome"=> "Elísio Medrado",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910404,
              "nome"=> "Encruzilhada",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910503,
              "nome"=> "Entre Rios",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910602,
              "nome"=> "Esplanada",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910701,
              "nome"=> "Euclides da Cunha",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910727,
              "nome"=> "Eunápolis",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910750,
              "nome"=> "Fátima",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910776,
              "nome"=> "Feira da Mata",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910800,
              "nome"=> "Feira de Santana",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910859,
              "nome"=> "Filadélfia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2910909,
              "nome"=> "Firmino Alves",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911006,
              "nome"=> "Floresta Azul",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911105,
              "nome"=> "Formosa do Rio Preto",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911204,
              "nome"=> "Gandu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911253,
              "nome"=> "Gavião",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911303,
              "nome"=> "Gentio do Ouro",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911402,
              "nome"=> "Glória",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911501,
              "nome"=> "Gongogi",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911600,
              "nome"=> "Governador Mangabeira",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911659,
              "nome"=> "Guajeru",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911709,
              "nome"=> "Guanambi",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911808,
              "nome"=> "Guaratinga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911857,
              "nome"=> "Heliópolis",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2911907,
              "nome"=> "Iaçu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912004,
              "nome"=> "Ibiassucê",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912103,
              "nome"=> "Ibicaraí",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912202,
              "nome"=> "Ibicoara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912301,
              "nome"=> "Ibicuí",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912400,
              "nome"=> "Ibipeba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912509,
              "nome"=> "Ibipitanga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912608,
              "nome"=> "Ibiquera",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912707,
              "nome"=> "Ibirapitanga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912806,
              "nome"=> "Ibirapuã",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2912905,
              "nome"=> "Ibirataia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913002,
              "nome"=> "Ibitiara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913101,
              "nome"=> "Ibititá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913200,
              "nome"=> "Ibotirama",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913309,
              "nome"=> "Ichu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913408,
              "nome"=> "Igaporã",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913457,
              "nome"=> "Igrapiúna",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913507,
              "nome"=> "Iguaí",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913606,
              "nome"=> "Ilhéus",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913705,
              "nome"=> "Inhambupe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913804,
              "nome"=> "Ipecaetá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2913903,
              "nome"=> "Ipiaú",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914000,
              "nome"=> "Ipirá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914109,
              "nome"=> "Ipupiara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914208,
              "nome"=> "Irajuba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914307,
              "nome"=> "Iramaia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914406,
              "nome"=> "Iraquara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914505,
              "nome"=> "Irará",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914604,
              "nome"=> "Irecê",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914653,
              "nome"=> "Itabela",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914703,
              "nome"=> "Itaberaba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914802,
              "nome"=> "Itabuna",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2914901,
              "nome"=> "Itacaré",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915007,
              "nome"=> "Itaeté",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915106,
              "nome"=> "Itagi",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915205,
              "nome"=> "Itagibá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915304,
              "nome"=> "Itagimirim",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915353,
              "nome"=> "Itaguaçu da Bahia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915403,
              "nome"=> "Itaju do Colônia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915502,
              "nome"=> "Itajuípe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915601,
              "nome"=> "Itamaraju",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915700,
              "nome"=> "Itamari",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915809,
              "nome"=> "Itambé",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2915908,
              "nome"=> "Itanagra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916005,
              "nome"=> "Itanhém",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916104,
              "nome"=> "Itaparica",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916203,
              "nome"=> "Itapé",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916302,
              "nome"=> "Itapebi",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916401,
              "nome"=> "Itapetinga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916500,
              "nome"=> "Itapicuru",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916609,
              "nome"=> "Itapitanga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916708,
              "nome"=> "Itaquara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916807,
              "nome"=> "Itarantim",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916856,
              "nome"=> "Itatim",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2916906,
              "nome"=> "Itiruçu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917003,
              "nome"=> "Itiúba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917102,
              "nome"=> "Itororó",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917201,
              "nome"=> "Ituaçu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917300,
              "nome"=> "Ituberá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917334,
              "nome"=> "Iuiú",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917359,
              "nome"=> "Jaborandi",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917409,
              "nome"=> "Jacaraci",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917508,
              "nome"=> "Jacobina",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917607,
              "nome"=> "Jaguaquara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917706,
              "nome"=> "Jaguarari",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917805,
              "nome"=> "Jaguaripe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2917904,
              "nome"=> "Jandaíra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918001,
              "nome"=> "Jequié",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918100,
              "nome"=> "Jeremoabo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918209,
              "nome"=> "Jiquiriçá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918308,
              "nome"=> "Jitaúna",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918357,
              "nome"=> "João Dourado",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918407,
              "nome"=> "Juazeiro",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918456,
              "nome"=> "Jucuruçu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918506,
              "nome"=> "Jussara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918555,
              "nome"=> "Jussari",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918605,
              "nome"=> "Jussiape",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918704,
              "nome"=> "Lafaiete Coutinho",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918753,
              "nome"=> "Lagoa Real",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918803,
              "nome"=> "Laje",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2918902,
              "nome"=> "Lajedão",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919009,
              "nome"=> "Lajedinho",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919058,
              "nome"=> "Lajedo do Tabocal",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919108,
              "nome"=> "Lamarão",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919157,
              "nome"=> "Lapão",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919207,
              "nome"=> "Lauro de Freitas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919306,
              "nome"=> "Lençóis",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919405,
              "nome"=> "Licínio de Almeida",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919504,
              "nome"=> "Livramento de Nossa Senhora",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919553,
              "nome"=> "Luís Eduardo Magalhães",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919603,
              "nome"=> "Macajuba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919702,
              "nome"=> "Macarani",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919801,
              "nome"=> "Macaúbas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919900,
              "nome"=> "Macururé",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919926,
              "nome"=> "Madre de Deus",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2919959,
              "nome"=> "Maetinga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920007,
              "nome"=> "Maiquinique",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920106,
              "nome"=> "Mairi",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920205,
              "nome"=> "Malhada",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920304,
              "nome"=> "Malhada de Pedras",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920403,
              "nome"=> "Manoel Vitorino",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920452,
              "nome"=> "Mansidão",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920502,
              "nome"=> "Maracás",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920601,
              "nome"=> "Maragogipe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920700,
              "nome"=> "Maraú",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920809,
              "nome"=> "Marcionílio Souza",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2920908,
              "nome"=> "Mascote",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921005,
              "nome"=> "Mata de São João",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921054,
              "nome"=> "Matina",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921104,
              "nome"=> "Medeiros Neto",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921203,
              "nome"=> "Miguel Calmon",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921302,
              "nome"=> "Milagres",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921401,
              "nome"=> "Mirangaba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921450,
              "nome"=> "Mirante",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921500,
              "nome"=> "Monte Santo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921609,
              "nome"=> "Morpará",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921708,
              "nome"=> "Morro do Chapéu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921807,
              "nome"=> "Mortugaba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2921906,
              "nome"=> "Mucugê",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922003,
              "nome"=> "Mucuri",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922052,
              "nome"=> "Mulungu do Morro",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922102,
              "nome"=> "Mundo Novo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922201,
              "nome"=> "Muniz Ferreira",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922250,
              "nome"=> "Muquém de São Francisco",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922300,
              "nome"=> "Muritiba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922409,
              "nome"=> "Mutuípe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922508,
              "nome"=> "Nazaré",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922607,
              "nome"=> "Nilo Peçanha",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922656,
              "nome"=> "Nordestina",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922706,
              "nome"=> "Nova Canaã",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922730,
              "nome"=> "Nova Fátima",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922755,
              "nome"=> "Nova Ibiá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922805,
              "nome"=> "Nova Itarana",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922854,
              "nome"=> "Nova Redenção",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2922904,
              "nome"=> "Nova Soure",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923001,
              "nome"=> "Nova Viçosa",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923035,
              "nome"=> "Novo Horizonte",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923050,
              "nome"=> "Novo Triunfo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923100,
              "nome"=> "Olindina",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923209,
              "nome"=> "Oliveira dos Brejinhos",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923308,
              "nome"=> "Ouriçangas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923357,
              "nome"=> "Ourolândia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923407,
              "nome"=> "Palmas de Monte Alto",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923506,
              "nome"=> "Palmeiras",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923605,
              "nome"=> "Paramirim",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923704,
              "nome"=> "Paratinga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923803,
              "nome"=> "Paripiranga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2923902,
              "nome"=> "Pau Brasil",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924009,
              "nome"=> "Paulo Afonso",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924058,
              "nome"=> "Pé de Serra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924108,
              "nome"=> "Pedrão",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924207,
              "nome"=> "Pedro Alexandre",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924306,
              "nome"=> "Piatã",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924405,
              "nome"=> "Pilão Arcado",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924504,
              "nome"=> "Pindaí",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924603,
              "nome"=> "Pindobaçu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924652,
              "nome"=> "Pintadas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924678,
              "nome"=> "Piraí do Norte",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924702,
              "nome"=> "Piripá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924801,
              "nome"=> "Piritiba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2924900,
              "nome"=> "Planaltino",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925006,
              "nome"=> "Planalto",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925105,
              "nome"=> "Poções",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925204,
              "nome"=> "Pojuca",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925253,
              "nome"=> "Ponto Novo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925303,
              "nome"=> "Porto Seguro",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925402,
              "nome"=> "Potiraguá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925501,
              "nome"=> "Prado",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925600,
              "nome"=> "Presidente Dutra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925709,
              "nome"=> "Presidente Jânio Quadros",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925758,
              "nome"=> "Presidente Tancredo Neves",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925808,
              "nome"=> "Queimadas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925907,
              "nome"=> "Quijingue",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925931,
              "nome"=> "Quixabeira",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2925956,
              "nome"=> "Rafael Jambeiro",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926004,
              "nome"=> "Remanso",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926103,
              "nome"=> "Retirolândia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926202,
              "nome"=> "Riachão das Neves",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926301,
              "nome"=> "Riachão do Jacuípe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926400,
              "nome"=> "Riacho de Santana",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926509,
              "nome"=> "Ribeira do Amparo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926608,
              "nome"=> "Ribeira do Pombal",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926657,
              "nome"=> "Ribeirão do Largo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926707,
              "nome"=> "Rio de Contas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926806,
              "nome"=> "Rio do Antônio",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2926905,
              "nome"=> "Rio do Pires",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927002,
              "nome"=> "Rio Real",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927101,
              "nome"=> "Rodelas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927200,
              "nome"=> "Ruy Barbosa",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927309,
              "nome"=> "Salinas da Margarida",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927408,
              "nome"=> "Salvador",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927507,
              "nome"=> "Santa Bárbara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927606,
              "nome"=> "Santa Brígida",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927705,
              "nome"=> "Santa Cruz Cabrália",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927804,
              "nome"=> "Santa Cruz da Vitória",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2927903,
              "nome"=> "Santa Inês",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928000,
              "nome"=> "Santaluz",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928059,
              "nome"=> "Santa Luzia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928109,
              "nome"=> "Santa Maria da Vitória",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928208,
              "nome"=> "Santana",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928307,
              "nome"=> "Santanópolis",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928406,
              "nome"=> "Santa Rita de Cássia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928505,
              "nome"=> "Santa Teresinha",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928604,
              "nome"=> "Santo Amaro",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928703,
              "nome"=> "Santo Antônio de Jesus",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928802,
              "nome"=> "Santo Estêvão",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928901,
              "nome"=> "São Desidério",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2928950,
              "nome"=> "São Domingos",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929008,
              "nome"=> "São Félix",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929057,
              "nome"=> "São Félix do Coribe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929107,
              "nome"=> "São Felipe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929206,
              "nome"=> "São Francisco do Conde",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929255,
              "nome"=> "São Gabriel",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929305,
              "nome"=> "São Gonçalo dos Campos",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929354,
              "nome"=> "São José da Vitória",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929370,
              "nome"=> "São José do Jacuípe",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929404,
              "nome"=> "São Miguel das Matas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929503,
              "nome"=> "São Sebastião do Passé",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929602,
              "nome"=> "Sapeaçu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929701,
              "nome"=> "Sátiro Dias",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929750,
              "nome"=> "Saubara",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929800,
              "nome"=> "Saúde",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2929909,
              "nome"=> "Seabra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930006,
              "nome"=> "Sebastião Laranjeiras",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930105,
              "nome"=> "Senhor do Bonfim",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930154,
              "nome"=> "Serra do Ramalho",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930204,
              "nome"=> "Sento Sé",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930303,
              "nome"=> "Serra Dourada",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930402,
              "nome"=> "Serra Preta",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930501,
              "nome"=> "Serrinha",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930600,
              "nome"=> "Serrolândia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930709,
              "nome"=> "Simões Filho",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930758,
              "nome"=> "Sítio do Mato",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930766,
              "nome"=> "Sítio do Quinto",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930774,
              "nome"=> "Sobradinho",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930808,
              "nome"=> "Souto Soares",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2930907,
              "nome"=> "Tabocas do Brejo Velho",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931004,
              "nome"=> "Tanhaçu",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931053,
              "nome"=> "Tanque Novo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931103,
              "nome"=> "Tanquinho",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931202,
              "nome"=> "Taperoá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931301,
              "nome"=> "Tapiramutá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931350,
              "nome"=> "Teixeira de Freitas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931400,
              "nome"=> "Teodoro Sampaio",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931509,
              "nome"=> "Teofilândia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931608,
              "nome"=> "Teolândia",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931707,
              "nome"=> "Terra Nova",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931806,
              "nome"=> "Tremedal",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2931905,
              "nome"=> "Tucano",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932002,
              "nome"=> "Uauá",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932101,
              "nome"=> "Ubaíra",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932200,
              "nome"=> "Ubaitaba",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932309,
              "nome"=> "Ubatã",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932408,
              "nome"=> "Uibaí",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932457,
              "nome"=> "Umburanas",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932507,
              "nome"=> "Una",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932606,
              "nome"=> "Urandi",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932705,
              "nome"=> "Uruçuca",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932804,
              "nome"=> "Utinga",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2932903,
              "nome"=> "Valença",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933000,
              "nome"=> "Valente",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933059,
              "nome"=> "Várzea da Roça",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933109,
              "nome"=> "Várzea do Poço",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933158,
              "nome"=> "Várzea Nova",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933174,
              "nome"=> "Varzedo",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933208,
              "nome"=> "Vera Cruz",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933257,
              "nome"=> "Vereda",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933307,
              "nome"=> "Vitória da Conquista",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933406,
              "nome"=> "Wagner",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933455,
              "nome"=> "Wanderley",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933505,
              "nome"=> "Wenceslau Guimarães",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 2933604,
              "nome"=> "Xique-Xique",
              "estadobrasil_id"=> 29
            ],
            [
              "id"=> 3100104,
              "nome"=> "Abadia dos Dourados",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3100203,
              "nome"=> "Abaeté",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3100302,
              "nome"=> "Abre Campo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3100401,
              "nome"=> "Acaiaca",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3100500,
              "nome"=> "Açucena",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3100609,
              "nome"=> "Água Boa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3100708,
              "nome"=> "Água Comprida",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3100807,
              "nome"=> "Aguanil",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3100906,
              "nome"=> "Águas Formosas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101003,
              "nome"=> "Águas Vermelhas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101102,
              "nome"=> "Aimorés",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101201,
              "nome"=> "Aiuruoca",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101300,
              "nome"=> "Alagoa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101409,
              "nome"=> "Albertina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101508,
              "nome"=> "Além Paraíba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101607,
              "nome"=> "Alfenas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101631,
              "nome"=> "Alfredo Vasconcelos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101706,
              "nome"=> "Almenara",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101805,
              "nome"=> "Alpercata",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3101904,
              "nome"=> "Alpinópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102001,
              "nome"=> "Alterosa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102050,
              "nome"=> "Alto Caparaó",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102100,
              "nome"=> "Alto Rio Doce",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102209,
              "nome"=> "Alvarenga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102308,
              "nome"=> "Alvinópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102407,
              "nome"=> "Alvorada de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102506,
              "nome"=> "Amparo do Serra",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102605,
              "nome"=> "Andradas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102704,
              "nome"=> "Cachoeira de Pajeú",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102803,
              "nome"=> "Andrelândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102852,
              "nome"=> "Angelândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3102902,
              "nome"=> "Antônio Carlos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103009,
              "nome"=> "Antônio Dias",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103108,
              "nome"=> "Antônio Prado de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103207,
              "nome"=> "Araçaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103306,
              "nome"=> "Aracitaba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103405,
              "nome"=> "Araçuaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103504,
              "nome"=> "Araguari",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103603,
              "nome"=> "Arantina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103702,
              "nome"=> "Araponga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103751,
              "nome"=> "Araporã",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103801,
              "nome"=> "Arapuá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3103900,
              "nome"=> "Araújos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104007,
              "nome"=> "Araxá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104106,
              "nome"=> "Arceburgo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104205,
              "nome"=> "Arcos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104304,
              "nome"=> "Areado",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104403,
              "nome"=> "Argirita",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104452,
              "nome"=> "Aricanduva",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104502,
              "nome"=> "Arinos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104601,
              "nome"=> "Astolfo Dutra",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104700,
              "nome"=> "Ataléia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104809,
              "nome"=> "Augusto de Lima",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3104908,
              "nome"=> "Baependi",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105004,
              "nome"=> "Baldim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105103,
              "nome"=> "Bambuí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105202,
              "nome"=> "Bandeira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105301,
              "nome"=> "Bandeira do Sul",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105400,
              "nome"=> "Barão de Cocais",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105509,
              "nome"=> "Barão de Monte Alto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105608,
              "nome"=> "Barbacena",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105707,
              "nome"=> "Barra Longa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3105905,
              "nome"=> "Barroso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106002,
              "nome"=> "Bela Vista de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106101,
              "nome"=> "Belmiro Braga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106200,
              "nome"=> "Belo Horizonte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106309,
              "nome"=> "Belo Oriente",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106408,
              "nome"=> "Belo Vale",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106507,
              "nome"=> "Berilo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106606,
              "nome"=> "Bertópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106655,
              "nome"=> "Berizal",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106705,
              "nome"=> "Betim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106804,
              "nome"=> "Bias Fortes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3106903,
              "nome"=> "Bicas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107000,
              "nome"=> "Biquinhas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107109,
              "nome"=> "Boa Esperança",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107208,
              "nome"=> "Bocaina de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107307,
              "nome"=> "Bocaiúva",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107406,
              "nome"=> "Bom Despacho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107505,
              "nome"=> "Bom Jardim de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107604,
              "nome"=> "Bom Jesus da Penha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107703,
              "nome"=> "Bom Jesus do Amparo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107802,
              "nome"=> "Bom Jesus do Galho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3107901,
              "nome"=> "Bom Repouso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108008,
              "nome"=> "Bom Sucesso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108107,
              "nome"=> "Bonfim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108206,
              "nome"=> "Bonfinópolis de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108255,
              "nome"=> "Bonito de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108305,
              "nome"=> "Borda da Mata",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108404,
              "nome"=> "Botelhos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108503,
              "nome"=> "Botumirim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108552,
              "nome"=> "Brasilândia de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108602,
              "nome"=> "Brasília de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108701,
              "nome"=> "Brás Pires",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108800,
              "nome"=> "Braúnas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3108909,
              "nome"=> "Brazópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109006,
              "nome"=> "Brumadinho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109105,
              "nome"=> "Bueno Brandão",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109204,
              "nome"=> "Buenópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109253,
              "nome"=> "Bugre",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109303,
              "nome"=> "Buritis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109402,
              "nome"=> "Buritizeiro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109451,
              "nome"=> "Cabeceira Grande",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109501,
              "nome"=> "Cabo Verde",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109600,
              "nome"=> "Cachoeira da Prata",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109709,
              "nome"=> "Cachoeira de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109808,
              "nome"=> "Cachoeira Dourada",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3109907,
              "nome"=> "Caetanópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110004,
              "nome"=> "Caeté",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110103,
              "nome"=> "Caiana",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110202,
              "nome"=> "Cajuri",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110301,
              "nome"=> "Caldas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110400,
              "nome"=> "Camacho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110509,
              "nome"=> "Camanducaia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110608,
              "nome"=> "Cambuí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110707,
              "nome"=> "Cambuquira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110806,
              "nome"=> "Campanário",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3110905,
              "nome"=> "Campanha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111002,
              "nome"=> "Campestre",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111101,
              "nome"=> "Campina Verde",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111150,
              "nome"=> "Campo Azul",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111200,
              "nome"=> "Campo Belo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111309,
              "nome"=> "Campo do Meio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111408,
              "nome"=> "Campo Florido",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111507,
              "nome"=> "Campos Altos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111606,
              "nome"=> "Campos Gerais",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111705,
              "nome"=> "Canaã",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111804,
              "nome"=> "Canápolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3111903,
              "nome"=> "Cana Verde",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112000,
              "nome"=> "Candeias",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112059,
              "nome"=> "Cantagalo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112109,
              "nome"=> "Caparaó",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112208,
              "nome"=> "Capela Nova",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112307,
              "nome"=> "Capelinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112406,
              "nome"=> "Capetinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112505,
              "nome"=> "Capim Branco",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112604,
              "nome"=> "Capinópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112653,
              "nome"=> "Capitão Andrade",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112703,
              "nome"=> "Capitão Enéas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112802,
              "nome"=> "Capitólio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3112901,
              "nome"=> "Caputira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113008,
              "nome"=> "Caraí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113107,
              "nome"=> "Caranaíba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113206,
              "nome"=> "Carandaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113305,
              "nome"=> "Carangola",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113404,
              "nome"=> "Caratinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113503,
              "nome"=> "Carbonita",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113602,
              "nome"=> "Careaçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113701,
              "nome"=> "Carlos Chagas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113800,
              "nome"=> "Carmésia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3113909,
              "nome"=> "Carmo da Cachoeira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114006,
              "nome"=> "Carmo da Mata",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114105,
              "nome"=> "Carmo de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114204,
              "nome"=> "Carmo do Cajuru",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114303,
              "nome"=> "Carmo do Paranaíba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114402,
              "nome"=> "Carmo do Rio Claro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114501,
              "nome"=> "Carmópolis de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114550,
              "nome"=> "Carneirinho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114600,
              "nome"=> "Carrancas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114709,
              "nome"=> "Carvalhópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114808,
              "nome"=> "Carvalhos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3114907,
              "nome"=> "Casa Grande",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115003,
              "nome"=> "Cascalho Rico",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115102,
              "nome"=> "Cássia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115201,
              "nome"=> "Conceição da Barra de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115300,
              "nome"=> "Cataguases",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115359,
              "nome"=> "Catas Altas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115409,
              "nome"=> "Catas Altas da Noruega",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115458,
              "nome"=> "Catuji",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115474,
              "nome"=> "Catuti",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115508,
              "nome"=> "Caxambu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115607,
              "nome"=> "Cedro do Abaeté",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115706,
              "nome"=> "Central de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115805,
              "nome"=> "Centralina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3115904,
              "nome"=> "Chácara",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116001,
              "nome"=> "Chalé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116100,
              "nome"=> "Chapada do Norte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116159,
              "nome"=> "Chapada Gaúcha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116209,
              "nome"=> "Chiador",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116308,
              "nome"=> "Cipotânea",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116407,
              "nome"=> "Claraval",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116506,
              "nome"=> "Claro dos Poções",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116605,
              "nome"=> "Cláudio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116704,
              "nome"=> "Coimbra",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116803,
              "nome"=> "Coluna",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3116902,
              "nome"=> "Comendador Gomes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117009,
              "nome"=> "Comercinho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117108,
              "nome"=> "Conceição da Aparecida",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117207,
              "nome"=> "Conceição das Pedras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117306,
              "nome"=> "Conceição das Alagoas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117405,
              "nome"=> "Conceição de Ipanema",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117504,
              "nome"=> "Conceição do Mato Dentro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117603,
              "nome"=> "Conceição do Pará",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117702,
              "nome"=> "Conceição do Rio Verde",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117801,
              "nome"=> "Conceição dos Ouros",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117836,
              "nome"=> "Cônego Marinho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117876,
              "nome"=> "Confins",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3117900,
              "nome"=> "Congonhal",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118007,
              "nome"=> "Congonhas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118106,
              "nome"=> "Congonhas do Norte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118205,
              "nome"=> "Conquista",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118304,
              "nome"=> "Conselheiro Lafaiete",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118403,
              "nome"=> "Conselheiro Pena",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118502,
              "nome"=> "Consolação",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118601,
              "nome"=> "Contagem",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118700,
              "nome"=> "Coqueiral",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118809,
              "nome"=> "Coração de Jesus",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3118908,
              "nome"=> "Cordisburgo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119005,
              "nome"=> "Cordislândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119104,
              "nome"=> "Corinto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119203,
              "nome"=> "Coroaci",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119302,
              "nome"=> "Coromandel",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119401,
              "nome"=> "Coronel Fabriciano",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119500,
              "nome"=> "Coronel Murta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119609,
              "nome"=> "Coronel Pacheco",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119708,
              "nome"=> "Coronel Xavier Chaves",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119807,
              "nome"=> "Córrego Danta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119906,
              "nome"=> "Córrego do Bom Jesus",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3119955,
              "nome"=> "Córrego Fundo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120003,
              "nome"=> "Córrego Novo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120102,
              "nome"=> "Couto de Magalhães de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120151,
              "nome"=> "Crisólita",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120201,
              "nome"=> "Cristais",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120300,
              "nome"=> "Cristália",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120409,
              "nome"=> "Cristiano Otoni",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120508,
              "nome"=> "Cristina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120607,
              "nome"=> "Crucilândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120706,
              "nome"=> "Cruzeiro da Fortaleza",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120805,
              "nome"=> "Cruzília",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120839,
              "nome"=> "Cuparaque",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120870,
              "nome"=> "Curral de Dentro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3120904,
              "nome"=> "Curvelo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121001,
              "nome"=> "Datas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121100,
              "nome"=> "Delfim Moreira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121209,
              "nome"=> "Delfinópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121258,
              "nome"=> "Delta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121308,
              "nome"=> "Descoberto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121407,
              "nome"=> "Desterro de Entre Rios",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121506,
              "nome"=> "Desterro do Melo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121605,
              "nome"=> "Diamantina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121704,
              "nome"=> "Diogo de Vasconcelos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121803,
              "nome"=> "Dionísio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3121902,
              "nome"=> "Divinésia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122009,
              "nome"=> "Divino",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122108,
              "nome"=> "Divino das Laranjeiras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122207,
              "nome"=> "Divinolândia de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122306,
              "nome"=> "Divinópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122355,
              "nome"=> "Divisa Alegre",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122405,
              "nome"=> "Divisa Nova",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122454,
              "nome"=> "Divisópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122470,
              "nome"=> "Dom Bosco",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122504,
              "nome"=> "Dom Cavati",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122603,
              "nome"=> "Dom Joaquim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122702,
              "nome"=> "Dom Silvério",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122801,
              "nome"=> "Dom Viçoso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3122900,
              "nome"=> "Dona Eusébia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123007,
              "nome"=> "Dores de Campos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123106,
              "nome"=> "Dores de Guanhães",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123205,
              "nome"=> "Dores do Indaiá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123304,
              "nome"=> "Dores do Turvo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123403,
              "nome"=> "Doresópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123502,
              "nome"=> "Douradoquara",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123528,
              "nome"=> "Durandé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123601,
              "nome"=> "Elói Mendes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123700,
              "nome"=> "Engenheiro Caldas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123809,
              "nome"=> "Engenheiro Navarro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123858,
              "nome"=> "Entre Folhas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3123908,
              "nome"=> "Entre Rios de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124005,
              "nome"=> "Ervália",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124104,
              "nome"=> "Esmeraldas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124203,
              "nome"=> "Espera Feliz",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124302,
              "nome"=> "Espinosa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124401,
              "nome"=> "Espírito Santo do Dourado",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124500,
              "nome"=> "Estiva",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124609,
              "nome"=> "Estrela Dalva",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124708,
              "nome"=> "Estrela do Indaiá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124807,
              "nome"=> "Estrela do Sul",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3124906,
              "nome"=> "Eugenópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125002,
              "nome"=> "Ewbank da Câmara",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125101,
              "nome"=> "Extrema",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125200,
              "nome"=> "Fama",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125309,
              "nome"=> "Faria Lemos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125408,
              "nome"=> "Felício dos Santos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125507,
              "nome"=> "São Gonçalo do Rio Preto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125606,
              "nome"=> "Felisburgo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125705,
              "nome"=> "Felixlândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125804,
              "nome"=> "Fernandes Tourinho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125903,
              "nome"=> "Ferros",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3125952,
              "nome"=> "Fervedouro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126000,
              "nome"=> "Florestal",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126109,
              "nome"=> "Formiga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126208,
              "nome"=> "Formoso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126307,
              "nome"=> "Fortaleza de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126406,
              "nome"=> "Fortuna de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126505,
              "nome"=> "Francisco Badaró",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126604,
              "nome"=> "Francisco Dumont",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126703,
              "nome"=> "Francisco Sá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126752,
              "nome"=> "Franciscópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126802,
              "nome"=> "Frei Gaspar",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126901,
              "nome"=> "Frei Inocêncio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3126950,
              "nome"=> "Frei Lagonegro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127008,
              "nome"=> "Fronteira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127057,
              "nome"=> "Fronteira dos Vales",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127073,
              "nome"=> "Fruta de Leite",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127107,
              "nome"=> "Frutal",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127206,
              "nome"=> "Funilândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127305,
              "nome"=> "Galiléia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127339,
              "nome"=> "Gameleiras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127354,
              "nome"=> "Glaucilândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127370,
              "nome"=> "Goiabeira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127388,
              "nome"=> "Goianá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127404,
              "nome"=> "Gonçalves",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127503,
              "nome"=> "Gonzaga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127602,
              "nome"=> "Gouveia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127701,
              "nome"=> "Governador Valadares",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127800,
              "nome"=> "Grão Mogol",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3127909,
              "nome"=> "Grupiara",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128006,
              "nome"=> "Guanhães",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128105,
              "nome"=> "Guapé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128204,
              "nome"=> "Guaraciaba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128253,
              "nome"=> "Guaraciama",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128303,
              "nome"=> "Guaranésia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128402,
              "nome"=> "Guarani",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128501,
              "nome"=> "Guarará",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128600,
              "nome"=> "Guarda-Mor",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128709,
              "nome"=> "Guaxupé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128808,
              "nome"=> "Guidoval",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3128907,
              "nome"=> "Guimarânia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129004,
              "nome"=> "Guiricema",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129103,
              "nome"=> "Gurinhatã",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129202,
              "nome"=> "Heliodora",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129301,
              "nome"=> "Iapu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129400,
              "nome"=> "Ibertioga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129509,
              "nome"=> "Ibiá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129608,
              "nome"=> "Ibiaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129657,
              "nome"=> "Ibiracatu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129707,
              "nome"=> "Ibiraci",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129806,
              "nome"=> "Ibirité",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3129905,
              "nome"=> "Ibitiúra de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130002,
              "nome"=> "Ibituruna",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130051,
              "nome"=> "Icaraí de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130101,
              "nome"=> "Igarapé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130200,
              "nome"=> "Igaratinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130309,
              "nome"=> "Iguatama",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130408,
              "nome"=> "Ijaci",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130507,
              "nome"=> "Ilicínea",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130556,
              "nome"=> "Imbé de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130606,
              "nome"=> "Inconfidentes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130655,
              "nome"=> "Indaiabira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130705,
              "nome"=> "Indianópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130804,
              "nome"=> "Ingaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3130903,
              "nome"=> "Inhapim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131000,
              "nome"=> "Inhaúma",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131109,
              "nome"=> "Inimutaba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131158,
              "nome"=> "Ipaba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131208,
              "nome"=> "Ipanema",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131307,
              "nome"=> "Ipatinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131406,
              "nome"=> "Ipiaçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131505,
              "nome"=> "Ipuiúna",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131604,
              "nome"=> "Iraí de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131703,
              "nome"=> "Itabira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131802,
              "nome"=> "Itabirinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3131901,
              "nome"=> "Itabirito",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132008,
              "nome"=> "Itacambira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132107,
              "nome"=> "Itacarambi",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132206,
              "nome"=> "Itaguara",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132305,
              "nome"=> "Itaipé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132404,
              "nome"=> "Itajubá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132503,
              "nome"=> "Itamarandiba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132602,
              "nome"=> "Itamarati de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132701,
              "nome"=> "Itambacuri",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132800,
              "nome"=> "Itambé do Mato Dentro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3132909,
              "nome"=> "Itamogi",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133006,
              "nome"=> "Itamonte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133105,
              "nome"=> "Itanhandu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133204,
              "nome"=> "Itanhomi",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133303,
              "nome"=> "Itaobim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133402,
              "nome"=> "Itapagipe",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133501,
              "nome"=> "Itapecerica",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133600,
              "nome"=> "Itapeva",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133709,
              "nome"=> "Itatiaiuçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133758,
              "nome"=> "Itaú de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133808,
              "nome"=> "Itaúna",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3133907,
              "nome"=> "Itaverava",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134004,
              "nome"=> "Itinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134103,
              "nome"=> "Itueta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134202,
              "nome"=> "Ituiutaba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134301,
              "nome"=> "Itumirim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134400,
              "nome"=> "Iturama",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134509,
              "nome"=> "Itutinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134608,
              "nome"=> "Jaboticatubas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134707,
              "nome"=> "Jacinto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134806,
              "nome"=> "Jacuí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3134905,
              "nome"=> "Jacutinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135001,
              "nome"=> "Jaguaraçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135050,
              "nome"=> "Jaíba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135076,
              "nome"=> "Jampruca",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135100,
              "nome"=> "Janaúba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135209,
              "nome"=> "Januária",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135308,
              "nome"=> "Japaraíba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135357,
              "nome"=> "Japonvar",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135407,
              "nome"=> "Jeceaba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135456,
              "nome"=> "Jenipapo de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135506,
              "nome"=> "Jequeri",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135605,
              "nome"=> "Jequitaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135704,
              "nome"=> "Jequitibá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135803,
              "nome"=> "Jequitinhonha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3135902,
              "nome"=> "Jesuânia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136009,
              "nome"=> "Joaíma",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136108,
              "nome"=> "Joanésia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136207,
              "nome"=> "João Monlevade",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136306,
              "nome"=> "João Pinheiro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136405,
              "nome"=> "Joaquim Felício",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136504,
              "nome"=> "Jordânia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136520,
              "nome"=> "José Gonçalves de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136553,
              "nome"=> "José Raydan",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136579,
              "nome"=> "Josenópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136603,
              "nome"=> "Nova União",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136652,
              "nome"=> "Juatuba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136702,
              "nome"=> "Juiz de Fora",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136801,
              "nome"=> "Juramento",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136900,
              "nome"=> "Juruaia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3136959,
              "nome"=> "Juvenília",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137007,
              "nome"=> "Ladainha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137106,
              "nome"=> "Lagamar",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137205,
              "nome"=> "Lagoa da Prata",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137304,
              "nome"=> "Lagoa dos Patos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137403,
              "nome"=> "Lagoa Dourada",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137502,
              "nome"=> "Lagoa Formosa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137536,
              "nome"=> "Lagoa Grande",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137601,
              "nome"=> "Lagoa Santa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137700,
              "nome"=> "Lajinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137809,
              "nome"=> "Lambari",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3137908,
              "nome"=> "Lamim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138005,
              "nome"=> "Laranjal",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138104,
              "nome"=> "Lassance",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138203,
              "nome"=> "Lavras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138302,
              "nome"=> "Leandro Ferreira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138351,
              "nome"=> "Leme do Prado",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138401,
              "nome"=> "Leopoldina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138500,
              "nome"=> "Liberdade",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138609,
              "nome"=> "Lima Duarte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138625,
              "nome"=> "Limeira do Oeste",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138658,
              "nome"=> "Lontra",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138674,
              "nome"=> "Luisburgo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138682,
              "nome"=> "Luislândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138708,
              "nome"=> "Luminárias",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138807,
              "nome"=> "Luz",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3138906,
              "nome"=> "Machacalis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139003,
              "nome"=> "Machado",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139102,
              "nome"=> "Madre de Deus de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139201,
              "nome"=> "Malacacheta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139250,
              "nome"=> "Mamonas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139300,
              "nome"=> "Manga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139409,
              "nome"=> "Manhuaçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139508,
              "nome"=> "Manhumirim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139607,
              "nome"=> "Mantena",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139706,
              "nome"=> "Maravilhas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139805,
              "nome"=> "Mar de Espanha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3139904,
              "nome"=> "Maria da Fé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140001,
              "nome"=> "Mariana",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140100,
              "nome"=> "Marilac",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140159,
              "nome"=> "Mário Campos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140209,
              "nome"=> "Maripá de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140308,
              "nome"=> "Marliéria",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140407,
              "nome"=> "Marmelópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140506,
              "nome"=> "Martinho Campos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140530,
              "nome"=> "Martins Soares",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140555,
              "nome"=> "Mata Verde",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140605,
              "nome"=> "Materlândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140704,
              "nome"=> "Mateus Leme",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140803,
              "nome"=> "Matias Barbosa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140852,
              "nome"=> "Matias Cardoso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3140902,
              "nome"=> "Matipó",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141009,
              "nome"=> "Mato Verde",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141108,
              "nome"=> "Matozinhos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141207,
              "nome"=> "Matutina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141306,
              "nome"=> "Medeiros",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141405,
              "nome"=> "Medina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141504,
              "nome"=> "Mendes Pimentel",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141603,
              "nome"=> "Mercês",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141702,
              "nome"=> "Mesquita",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141801,
              "nome"=> "Minas Novas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3141900,
              "nome"=> "Minduri",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142007,
              "nome"=> "Mirabela",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142106,
              "nome"=> "Miradouro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142205,
              "nome"=> "Miraí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142254,
              "nome"=> "Miravânia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142304,
              "nome"=> "Moeda",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142403,
              "nome"=> "Moema",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142502,
              "nome"=> "Monjolos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142601,
              "nome"=> "Monsenhor Paulo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142700,
              "nome"=> "Montalvânia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142809,
              "nome"=> "Monte Alegre de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3142908,
              "nome"=> "Monte Azul",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143005,
              "nome"=> "Monte Belo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143104,
              "nome"=> "Monte Carmelo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143153,
              "nome"=> "Monte Formoso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143203,
              "nome"=> "Monte Santo de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143302,
              "nome"=> "Montes Claros",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143401,
              "nome"=> "Monte Sião",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143450,
              "nome"=> "Montezuma",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143500,
              "nome"=> "Morada Nova de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143609,
              "nome"=> "Morro da Garça",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143708,
              "nome"=> "Morro do Pilar",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143807,
              "nome"=> "Munhoz",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3143906,
              "nome"=> "Muriaé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144003,
              "nome"=> "Mutum",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144102,
              "nome"=> "Muzambinho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144201,
              "nome"=> "Nacip Raydan",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144300,
              "nome"=> "Nanuque",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144359,
              "nome"=> "Naque",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144375,
              "nome"=> "Natalândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144409,
              "nome"=> "Natércia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144508,
              "nome"=> "Nazareno",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144607,
              "nome"=> "Nepomuceno",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144656,
              "nome"=> "Ninheira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144672,
              "nome"=> "Nova Belém",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144706,
              "nome"=> "Nova Era",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144805,
              "nome"=> "Nova Lima",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3144904,
              "nome"=> "Nova Módica",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145000,
              "nome"=> "Nova Ponte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145059,
              "nome"=> "Nova Porteirinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145109,
              "nome"=> "Nova Resende",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145208,
              "nome"=> "Nova Serrana",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145307,
              "nome"=> "Novo Cruzeiro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145356,
              "nome"=> "Novo Oriente de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145372,
              "nome"=> "Novorizonte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145406,
              "nome"=> "Olaria",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145455,
              "nome"=> "Olhos-d`Água",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145505,
              "nome"=> "Olímpio Noronha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145604,
              "nome"=> "Oliveira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145703,
              "nome"=> "Oliveira Fortes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145802,
              "nome"=> "Onça de Pitangui",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145851,
              "nome"=> "Oratórios",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145877,
              "nome"=> "Orizânia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3145901,
              "nome"=> "Ouro Branco",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146008,
              "nome"=> "Ouro Fino",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146107,
              "nome"=> "Ouro Preto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146206,
              "nome"=> "Ouro Verde de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146255,
              "nome"=> "Padre Carvalho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146305,
              "nome"=> "Padre Paraíso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146404,
              "nome"=> "Paineiras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146503,
              "nome"=> "Pains",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146552,
              "nome"=> "Pai Pedro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146602,
              "nome"=> "Paiva",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146701,
              "nome"=> "Palma",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146750,
              "nome"=> "Palmópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3146909,
              "nome"=> "Papagaios",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147006,
              "nome"=> "Paracatu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147105,
              "nome"=> "Pará de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147204,
              "nome"=> "Paraguaçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147303,
              "nome"=> "Paraisópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147402,
              "nome"=> "Paraopeba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147501,
              "nome"=> "Passabém",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147600,
              "nome"=> "Passa Quatro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147709,
              "nome"=> "Passa Tempo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147808,
              "nome"=> "Passa-Vinte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147907,
              "nome"=> "Passos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3147956,
              "nome"=> "Patis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148004,
              "nome"=> "Patos de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148103,
              "nome"=> "Patrocínio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148202,
              "nome"=> "Patrocínio do Muriaé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148301,
              "nome"=> "Paula Cândido",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148400,
              "nome"=> "Paulistas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148509,
              "nome"=> "Pavão",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148608,
              "nome"=> "Peçanha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148707,
              "nome"=> "Pedra Azul",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148756,
              "nome"=> "Pedra Bonita",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148806,
              "nome"=> "Pedra do Anta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3148905,
              "nome"=> "Pedra do Indaiá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149002,
              "nome"=> "Pedra Dourada",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149101,
              "nome"=> "Pedralva",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149150,
              "nome"=> "Pedras de Maria da Cruz",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149200,
              "nome"=> "Pedrinópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149309,
              "nome"=> "Pedro Leopoldo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149408,
              "nome"=> "Pedro Teixeira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149507,
              "nome"=> "Pequeri",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149606,
              "nome"=> "Pequi",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149705,
              "nome"=> "Perdigão",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149804,
              "nome"=> "Perdizes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149903,
              "nome"=> "Perdões",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3149952,
              "nome"=> "Periquito",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150000,
              "nome"=> "Pescador",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150109,
              "nome"=> "Piau",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150158,
              "nome"=> "Piedade de Caratinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150208,
              "nome"=> "Piedade de Ponte Nova",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150307,
              "nome"=> "Piedade do Rio Grande",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150406,
              "nome"=> "Piedade dos Gerais",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150505,
              "nome"=> "Pimenta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150539,
              "nome"=> "Pingo-d`Água",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150570,
              "nome"=> "Pintópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150604,
              "nome"=> "Piracema",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150703,
              "nome"=> "Pirajuba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150802,
              "nome"=> "Piranga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3150901,
              "nome"=> "Piranguçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151008,
              "nome"=> "Piranguinho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151107,
              "nome"=> "Pirapetinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151206,
              "nome"=> "Pirapora",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151305,
              "nome"=> "Piraúba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151404,
              "nome"=> "Pitangui",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151503,
              "nome"=> "Piumhi",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151602,
              "nome"=> "Planura",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151701,
              "nome"=> "Poço Fundo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151800,
              "nome"=> "Poços de Caldas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3151909,
              "nome"=> "Pocrane",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152006,
              "nome"=> "Pompéu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152105,
              "nome"=> "Ponte Nova",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152131,
              "nome"=> "Ponto Chique",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152170,
              "nome"=> "Ponto dos Volantes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152204,
              "nome"=> "Porteirinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152303,
              "nome"=> "Porto Firme",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152402,
              "nome"=> "Poté",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152501,
              "nome"=> "Pouso Alegre",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152600,
              "nome"=> "Pouso Alto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152709,
              "nome"=> "Prados",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152808,
              "nome"=> "Prata",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3152907,
              "nome"=> "Pratápolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153004,
              "nome"=> "Pratinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153103,
              "nome"=> "Presidente Bernardes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153202,
              "nome"=> "Presidente Juscelino",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153301,
              "nome"=> "Presidente Kubitschek",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153400,
              "nome"=> "Presidente Olegário",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153509,
              "nome"=> "Alto Jequitibá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153608,
              "nome"=> "Prudente de Morais",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153707,
              "nome"=> "Quartel Geral",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153806,
              "nome"=> "Queluzito",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3153905,
              "nome"=> "Raposos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154002,
              "nome"=> "Raul Soares",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154101,
              "nome"=> "Recreio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154150,
              "nome"=> "Reduto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154200,
              "nome"=> "Resende Costa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154309,
              "nome"=> "Resplendor",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154408,
              "nome"=> "Ressaquinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154457,
              "nome"=> "Riachinho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154507,
              "nome"=> "Riacho dos Machados",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154606,
              "nome"=> "Ribeirão das Neves",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154705,
              "nome"=> "Ribeirão Vermelho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154804,
              "nome"=> "Rio Acima",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3154903,
              "nome"=> "Rio Casca",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155009,
              "nome"=> "Rio Doce",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155108,
              "nome"=> "Rio do Prado",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155207,
              "nome"=> "Rio Espera",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155306,
              "nome"=> "Rio Manso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155405,
              "nome"=> "Rio Novo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155504,
              "nome"=> "Rio Paranaíba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155603,
              "nome"=> "Rio Pardo de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155702,
              "nome"=> "Rio Piracicaba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155801,
              "nome"=> "Rio Pomba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3155900,
              "nome"=> "Rio Preto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156007,
              "nome"=> "Rio Vermelho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156106,
              "nome"=> "Ritápolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156205,
              "nome"=> "Rochedo de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156304,
              "nome"=> "Rodeiro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156403,
              "nome"=> "Romaria",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156452,
              "nome"=> "Rosário da Limeira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156502,
              "nome"=> "Rubelita",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156601,
              "nome"=> "Rubim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156700,
              "nome"=> "Sabará",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156809,
              "nome"=> "Sabinópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3156908,
              "nome"=> "Sacramento",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157005,
              "nome"=> "Salinas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157104,
              "nome"=> "Salto da Divisa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157203,
              "nome"=> "Santa Bárbara",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157252,
              "nome"=> "Santa Bárbara do Leste",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157278,
              "nome"=> "Santa Bárbara do Monte Verde",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157302,
              "nome"=> "Santa Bárbara do Tugúrio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157336,
              "nome"=> "Santa Cruz de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157377,
              "nome"=> "Santa Cruz de Salinas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157401,
              "nome"=> "Santa Cruz do Escalvado",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157500,
              "nome"=> "Santa Efigênia de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157609,
              "nome"=> "Santa Fé de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157658,
              "nome"=> "Santa Helena de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157708,
              "nome"=> "Santa Juliana",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157807,
              "nome"=> "Santa Luzia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3157906,
              "nome"=> "Santa Margarida",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158003,
              "nome"=> "Santa Maria de Itabira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158102,
              "nome"=> "Santa Maria do Salto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158201,
              "nome"=> "Santa Maria do Suaçuí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158300,
              "nome"=> "Santana da Vargem",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158409,
              "nome"=> "Santana de Cataguases",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158508,
              "nome"=> "Santana de Pirapama",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158607,
              "nome"=> "Santana do Deserto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158706,
              "nome"=> "Santana do Garambéu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158805,
              "nome"=> "Santana do Jacaré",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158904,
              "nome"=> "Santana do Manhuaçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3158953,
              "nome"=> "Santana do Paraíso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159001,
              "nome"=> "Santana do Riacho",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159100,
              "nome"=> "Santana dos Montes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159209,
              "nome"=> "Santa Rita de Caldas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159308,
              "nome"=> "Santa Rita de Jacutinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159357,
              "nome"=> "Santa Rita de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159407,
              "nome"=> "Santa Rita de Ibitipoca",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159506,
              "nome"=> "Santa Rita do Itueto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159605,
              "nome"=> "Santa Rita do Sapucaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159704,
              "nome"=> "Santa Rosa da Serra",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159803,
              "nome"=> "Santa Vitória",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3159902,
              "nome"=> "Santo Antônio do Amparo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160009,
              "nome"=> "Santo Antônio do Aventureiro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160108,
              "nome"=> "Santo Antônio do Grama",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160207,
              "nome"=> "Santo Antônio do Itambé",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160306,
              "nome"=> "Santo Antônio do Jacinto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160405,
              "nome"=> "Santo Antônio do Monte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160454,
              "nome"=> "Santo Antônio do Retiro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160504,
              "nome"=> "Santo Antônio do Rio Abaixo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160603,
              "nome"=> "Santo Hipólito",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160702,
              "nome"=> "Santos Dumont",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160801,
              "nome"=> "São Bento Abade",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160900,
              "nome"=> "São Brás do Suaçuí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3160959,
              "nome"=> "São Domingos das Dores",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161007,
              "nome"=> "São Domingos do Prata",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161056,
              "nome"=> "São Félix de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161106,
              "nome"=> "São Francisco",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161205,
              "nome"=> "São Francisco de Paula",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161304,
              "nome"=> "São Francisco de Sales",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161403,
              "nome"=> "São Francisco do Glória",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161502,
              "nome"=> "São Geraldo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161601,
              "nome"=> "São Geraldo da Piedade",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161650,
              "nome"=> "São Geraldo do Baixio",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161700,
              "nome"=> "São Gonçalo do Abaeté",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161809,
              "nome"=> "São Gonçalo do Pará",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3161908,
              "nome"=> "São Gonçalo do Rio Abaixo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162005,
              "nome"=> "São Gonçalo do Sapucaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162104,
              "nome"=> "São Gotardo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162203,
              "nome"=> "São João Batista do Glória",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162252,
              "nome"=> "São João da Lagoa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162302,
              "nome"=> "São João da Mata",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162401,
              "nome"=> "São João da Ponte",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162450,
              "nome"=> "São João das Missões",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162500,
              "nome"=> "São João del Rei",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162559,
              "nome"=> "São João do Manhuaçu",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162575,
              "nome"=> "São João do Manteninha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162609,
              "nome"=> "São João do Oriente",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162658,
              "nome"=> "São João do Pacuí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162708,
              "nome"=> "São João do Paraíso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162807,
              "nome"=> "São João Evangelista",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162906,
              "nome"=> "São João Nepomuceno",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162922,
              "nome"=> "São Joaquim de Bicas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162948,
              "nome"=> "São José da Barra",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3162955,
              "nome"=> "São José da Lapa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163003,
              "nome"=> "São José da Safira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163102,
              "nome"=> "São José da Varginha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163201,
              "nome"=> "São José do Alegre",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163300,
              "nome"=> "São José do Divino",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163409,
              "nome"=> "São José do Goiabal",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163508,
              "nome"=> "São José do Jacuri",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163607,
              "nome"=> "São José do Mantimento",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163706,
              "nome"=> "São Lourenço",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163805,
              "nome"=> "São Miguel do Anta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3163904,
              "nome"=> "São Pedro da União",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164001,
              "nome"=> "São Pedro dos Ferros",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164100,
              "nome"=> "São Pedro do Suaçuí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164209,
              "nome"=> "São Romão",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164308,
              "nome"=> "São Roque de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164407,
              "nome"=> "São Sebastião da Bela Vista",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164431,
              "nome"=> "São Sebastião da Vargem Alegre",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164472,
              "nome"=> "São Sebastião do Anta",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164506,
              "nome"=> "São Sebastião do Maranhão",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164605,
              "nome"=> "São Sebastião do Oeste",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164704,
              "nome"=> "São Sebastião do Paraíso",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164803,
              "nome"=> "São Sebastião do Rio Preto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3164902,
              "nome"=> "São Sebastião do Rio Verde",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165008,
              "nome"=> "São Tiago",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165107,
              "nome"=> "São Tomás de Aquino",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165206,
              "nome"=> "São Thomé das Letras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165305,
              "nome"=> "São Vicente de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165404,
              "nome"=> "Sapucaí-Mirim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165503,
              "nome"=> "Sardoá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165537,
              "nome"=> "Sarzedo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165552,
              "nome"=> "Setubinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165560,
              "nome"=> "Sem-Peixe",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165578,
              "nome"=> "Senador Amaral",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165602,
              "nome"=> "Senador Cortes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165701,
              "nome"=> "Senador Firmino",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165800,
              "nome"=> "Senador José Bento",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3165909,
              "nome"=> "Senador Modestino Gonçalves",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166006,
              "nome"=> "Senhora de Oliveira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166105,
              "nome"=> "Senhora do Porto",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166204,
              "nome"=> "Senhora dos Remédios",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166303,
              "nome"=> "Sericita",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166402,
              "nome"=> "Seritinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166501,
              "nome"=> "Serra Azul de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166600,
              "nome"=> "Serra da Saudade",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166709,
              "nome"=> "Serra dos Aimorés",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166808,
              "nome"=> "Serra do Salitre",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166907,
              "nome"=> "Serrania",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3166956,
              "nome"=> "Serranópolis de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167004,
              "nome"=> "Serranos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167103,
              "nome"=> "Serro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167202,
              "nome"=> "Sete Lagoas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167301,
              "nome"=> "Silveirânia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167400,
              "nome"=> "Silvianópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167509,
              "nome"=> "Simão Pereira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167608,
              "nome"=> "Simonésia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167707,
              "nome"=> "Sobrália",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167806,
              "nome"=> "Soledade de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3167905,
              "nome"=> "Tabuleiro",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168002,
              "nome"=> "Taiobeiras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168051,
              "nome"=> "Taparuba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168101,
              "nome"=> "Tapira",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168200,
              "nome"=> "Tapiraí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168309,
              "nome"=> "Taquaraçu de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168408,
              "nome"=> "Tarumirim",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168507,
              "nome"=> "Teixeiras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168606,
              "nome"=> "Teófilo Otoni",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168705,
              "nome"=> "Timóteo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168804,
              "nome"=> "Tiradentes",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3168903,
              "nome"=> "Tiros",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169000,
              "nome"=> "Tocantins",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169059,
              "nome"=> "Tocos do Moji",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169109,
              "nome"=> "Toledo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169208,
              "nome"=> "Tombos",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169307,
              "nome"=> "Três Corações",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169356,
              "nome"=> "Três Marias",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169406,
              "nome"=> "Três Pontas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169505,
              "nome"=> "Tumiritinga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169604,
              "nome"=> "Tupaciguara",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169703,
              "nome"=> "Turmalina",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169802,
              "nome"=> "Turvolândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3169901,
              "nome"=> "Ubá",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170008,
              "nome"=> "Ubaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170057,
              "nome"=> "Ubaporanga",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170107,
              "nome"=> "Uberaba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170206,
              "nome"=> "Uberlândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170305,
              "nome"=> "Umburatiba",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170404,
              "nome"=> "Unaí",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170438,
              "nome"=> "União de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170479,
              "nome"=> "Uruana de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170503,
              "nome"=> "Urucânia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170529,
              "nome"=> "Urucuia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170578,
              "nome"=> "Vargem Alegre",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170602,
              "nome"=> "Vargem Bonita",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170651,
              "nome"=> "Vargem Grande do Rio Pardo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170701,
              "nome"=> "Varginha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170750,
              "nome"=> "Varjão de Minas",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170800,
              "nome"=> "Várzea da Palma",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3170909,
              "nome"=> "Varzelândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171006,
              "nome"=> "Vazante",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171030,
              "nome"=> "Verdelândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171071,
              "nome"=> "Veredinha",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171105,
              "nome"=> "Veríssimo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171154,
              "nome"=> "Vermelho Novo",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171204,
              "nome"=> "Vespasiano",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171303,
              "nome"=> "Viçosa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171402,
              "nome"=> "Vieiras",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171501,
              "nome"=> "Mathias Lobato",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171600,
              "nome"=> "Virgem da Lapa",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171709,
              "nome"=> "Virgínia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171808,
              "nome"=> "Virginópolis",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3171907,
              "nome"=> "Virgolândia",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3172004,
              "nome"=> "Visconde do Rio Branco",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3172103,
              "nome"=> "Volta Grande",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3172202,
              "nome"=> "Wenceslau Braz",
              "estadobrasil_id"=> 31
            ],
            [
              "id"=> 3200102,
              "nome"=> "Afonso Cláudio",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200136,
              "nome"=> "Águia Branca",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200169,
              "nome"=> "Água Doce do Norte",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200201,
              "nome"=> "Alegre",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200300,
              "nome"=> "Alfredo Chaves",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200359,
              "nome"=> "Alto Rio Novo",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200409,
              "nome"=> "Anchieta",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200508,
              "nome"=> "Apiacá",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200607,
              "nome"=> "Aracruz",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200706,
              "nome"=> "Atilio Vivacqua",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200805,
              "nome"=> "Baixo Guandu",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3200904,
              "nome"=> "Barra de São Francisco",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201001,
              "nome"=> "Boa Esperança",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201100,
              "nome"=> "Bom Jesus do Norte",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201159,
              "nome"=> "Brejetuba",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201209,
              "nome"=> "Cachoeiro de Itapemirim",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201308,
              "nome"=> "Cariacica",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201407,
              "nome"=> "Castelo",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201506,
              "nome"=> "Colatina",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201605,
              "nome"=> "Conceição da Barra",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201704,
              "nome"=> "Conceição do Castelo",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201803,
              "nome"=> "Divino de São Lourenço",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3201902,
              "nome"=> "Domingos Martins",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202009,
              "nome"=> "Dores do Rio Preto",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202108,
              "nome"=> "Ecoporanga",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202207,
              "nome"=> "Fundão",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202256,
              "nome"=> "Governador Lindenberg",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202306,
              "nome"=> "Guaçuí",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202405,
              "nome"=> "Guarapari",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202454,
              "nome"=> "Ibatiba",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202504,
              "nome"=> "Ibiraçu",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202553,
              "nome"=> "Ibitirama",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202603,
              "nome"=> "Iconha",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202652,
              "nome"=> "Irupi",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202702,
              "nome"=> "Itaguaçu",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202801,
              "nome"=> "Itapemirim",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3202900,
              "nome"=> "Itarana",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203007,
              "nome"=> "Iúna",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203056,
              "nome"=> "Jaguaré",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203106,
              "nome"=> "Jerônimo Monteiro",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203130,
              "nome"=> "João Neiva",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203163,
              "nome"=> "Laranja da Terra",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203205,
              "nome"=> "Linhares",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203304,
              "nome"=> "Mantenópolis",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203320,
              "nome"=> "Marataízes",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203346,
              "nome"=> "Marechal Floriano",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203353,
              "nome"=> "Marilândia",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203403,
              "nome"=> "Mimoso do Sul",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203502,
              "nome"=> "Montanha",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203601,
              "nome"=> "Mucurici",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203700,
              "nome"=> "Muniz Freire",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203809,
              "nome"=> "Muqui",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3203908,
              "nome"=> "Nova Venécia",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204005,
              "nome"=> "Pancas",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204054,
              "nome"=> "Pedro Canário",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204104,
              "nome"=> "Pinheiros",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204203,
              "nome"=> "Piúma",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204252,
              "nome"=> "Ponto Belo",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204302,
              "nome"=> "Presidente Kennedy",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204351,
              "nome"=> "Rio Bananal",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204401,
              "nome"=> "Rio Novo do Sul",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204500,
              "nome"=> "Santa Leopoldina",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204559,
              "nome"=> "Santa Maria de Jetibá",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204609,
              "nome"=> "Santa Teresa",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204658,
              "nome"=> "São Domingos do Norte",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204708,
              "nome"=> "São Gabriel da Palha",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204807,
              "nome"=> "São José do Calçado",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204906,
              "nome"=> "São Mateus",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3204955,
              "nome"=> "São Roque do Canaã",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205002,
              "nome"=> "Serra",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205010,
              "nome"=> "Sooretama",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205036,
              "nome"=> "Vargem Alta",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205069,
              "nome"=> "Venda Nova do Imigrante",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205101,
              "nome"=> "Viana",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205150,
              "nome"=> "Vila Pavão",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205176,
              "nome"=> "Vila Valério",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205200,
              "nome"=> "Vila Velha",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3205309,
              "nome"=> "Vitória",
              "estadobrasil_id"=> 32
            ],
            [
              "id"=> 3300100,
              "nome"=> "Angra dos Reis",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300159,
              "nome"=> "Aperibé",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300209,
              "nome"=> "Araruama",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300225,
              "nome"=> "Areal",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300233,
              "nome"=> "Armação dos Búzios",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300258,
              "nome"=> "Arraial do Cabo",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300308,
              "nome"=> "Barra do Piraí",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300407,
              "nome"=> "Barra Mansa",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300456,
              "nome"=> "Belford Roxo",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300506,
              "nome"=> "Bom Jardim",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300605,
              "nome"=> "Bom Jesus do Itabapoana",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300704,
              "nome"=> "Cabo Frio",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300803,
              "nome"=> "Cachoeiras de Macacu",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300902,
              "nome"=> "Cambuci",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300936,
              "nome"=> "Carapebus",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3300951,
              "nome"=> "Comendador Levy Gasparian",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301009,
              "nome"=> "Campos dos Goytacazes",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301108,
              "nome"=> "Cantagalo",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301157,
              "nome"=> "Cardoso Moreira",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301207,
              "nome"=> "Carmo",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301306,
              "nome"=> "Casimiro de Abreu",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301405,
              "nome"=> "Conceição de Macabu",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301504,
              "nome"=> "Cordeiro",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301603,
              "nome"=> "Duas Barras",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301702,
              "nome"=> "Duque de Caxias",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301801,
              "nome"=> "Engenheiro Paulo de Frontin",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301850,
              "nome"=> "Guapimirim",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301876,
              "nome"=> "Iguaba Grande",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3301900,
              "nome"=> "Itaboraí",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302007,
              "nome"=> "Itaguaí",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302056,
              "nome"=> "Italva",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302106,
              "nome"=> "Itaocara",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302205,
              "nome"=> "Itaperuna",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302254,
              "nome"=> "Itatiaia",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302270,
              "nome"=> "Japeri",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302304,
              "nome"=> "Laje do Muriaé",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302403,
              "nome"=> "Macaé",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302452,
              "nome"=> "Macuco",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302502,
              "nome"=> "Magé",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302601,
              "nome"=> "Mangaratiba",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302700,
              "nome"=> "Maricá",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302809,
              "nome"=> "Mendes",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302858,
              "nome"=> "Mesquita",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3302908,
              "nome"=> "Miguel Pereira",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303005,
              "nome"=> "Miracema",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303104,
              "nome"=> "Natividade",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303203,
              "nome"=> "Nilópolis",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303302,
              "nome"=> "Niterói",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303401,
              "nome"=> "Nova Friburgo",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303500,
              "nome"=> "Nova Iguaçu",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303609,
              "nome"=> "Paracambi",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303708,
              "nome"=> "Paraíba do Sul",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303807,
              "nome"=> "Paraty",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303856,
              "nome"=> "Paty do Alferes",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303906,
              "nome"=> "Petrópolis",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3303955,
              "nome"=> "Pinheiral",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304003,
              "nome"=> "Piraí",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304102,
              "nome"=> "Porciúncula",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304110,
              "nome"=> "Porto Real",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304128,
              "nome"=> "Quatis",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304144,
              "nome"=> "Queimados",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304151,
              "nome"=> "Quissamã",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304201,
              "nome"=> "Resende",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304300,
              "nome"=> "Rio Bonito",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304409,
              "nome"=> "Rio Claro",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304508,
              "nome"=> "Rio das Flores",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304524,
              "nome"=> "Rio das Ostras",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304557,
              "nome"=> "Rio de Janeiro",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304607,
              "nome"=> "Santa Maria Madalena",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304706,
              "nome"=> "Santo Antônio de Pádua",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304755,
              "nome"=> "São Francisco de Itabapoana",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304805,
              "nome"=> "São Fidélis",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3304904,
              "nome"=> "São Gonçalo",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305000,
              "nome"=> "São João da Barra",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305109,
              "nome"=> "São João de Meriti",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305133,
              "nome"=> "São José de Ubá",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305158,
              "nome"=> "São José do Vale do Rio Preto",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305208,
              "nome"=> "São Pedro da Aldeia",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305307,
              "nome"=> "São Sebastião do Alto",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305406,
              "nome"=> "Sapucaia",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305505,
              "nome"=> "Saquarema",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305554,
              "nome"=> "Seropédica",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305604,
              "nome"=> "Silva Jardim",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305703,
              "nome"=> "Sumidouro",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305752,
              "nome"=> "Tanguá",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305802,
              "nome"=> "Teresópolis",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3305901,
              "nome"=> "Trajano de Moraes",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3306008,
              "nome"=> "Três Rios",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3306107,
              "nome"=> "Valença",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3306156,
              "nome"=> "Varre-Sai",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3306206,
              "nome"=> "Vassouras",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3306305,
              "nome"=> "Volta Redonda",
              "estadobrasil_id"=> 33
            ],
            [
              "id"=> 3500105,
              "nome"=> "Adamantina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500204,
              "nome"=> "Adolfo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500303,
              "nome"=> "Aguaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500402,
              "nome"=> "Águas da Prata",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500501,
              "nome"=> "Águas de Lindóia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500550,
              "nome"=> "Águas de Santa Bárbara",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500600,
              "nome"=> "Águas de São Pedro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500709,
              "nome"=> "Agudos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500758,
              "nome"=> "Alambari",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500808,
              "nome"=> "Alfredo Marcondes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3500907,
              "nome"=> "Altair",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501004,
              "nome"=> "Altinópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501103,
              "nome"=> "Alto Alegre",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501152,
              "nome"=> "Alumínio",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501202,
              "nome"=> "Álvares Florence",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501301,
              "nome"=> "Álvares Machado",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501400,
              "nome"=> "Álvaro de Carvalho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501509,
              "nome"=> "Alvinlândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501608,
              "nome"=> "Americana",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501707,
              "nome"=> "Américo Brasiliense",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501806,
              "nome"=> "Américo de Campos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3501905,
              "nome"=> "Amparo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502002,
              "nome"=> "Analândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502101,
              "nome"=> "Andradina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502200,
              "nome"=> "Angatuba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502309,
              "nome"=> "Anhembi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502408,
              "nome"=> "Anhumas",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502507,
              "nome"=> "Aparecida",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502606,
              "nome"=> "Aparecida d`Oeste",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502705,
              "nome"=> "Apiaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502754,
              "nome"=> "Araçariguama",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502804,
              "nome"=> "Araçatuba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3502903,
              "nome"=> "Araçoiaba da Serra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503000,
              "nome"=> "Aramina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503109,
              "nome"=> "Arandu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503158,
              "nome"=> "Arapeí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503208,
              "nome"=> "Araraquara",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503307,
              "nome"=> "Araras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503356,
              "nome"=> "Arco-Íris",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503406,
              "nome"=> "Arealva",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503505,
              "nome"=> "Areias",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503604,
              "nome"=> "Areiópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503703,
              "nome"=> "Ariranha",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503802,
              "nome"=> "Artur Nogueira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503901,
              "nome"=> "Arujá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3503950,
              "nome"=> "Aspásia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504008,
              "nome"=> "Assis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504107,
              "nome"=> "Atibaia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504206,
              "nome"=> "Auriflama",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504305,
              "nome"=> "Avaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504404,
              "nome"=> "Avanhandava",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504503,
              "nome"=> "Avaré",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504602,
              "nome"=> "Bady Bassitt",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504701,
              "nome"=> "Balbinos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504800,
              "nome"=> "Bálsamo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3504909,
              "nome"=> "Bananal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505005,
              "nome"=> "Barão de Antonina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505104,
              "nome"=> "Barbosa",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505203,
              "nome"=> "Bariri",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505302,
              "nome"=> "Barra Bonita",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505351,
              "nome"=> "Barra do Chapéu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505401,
              "nome"=> "Barra do Turvo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505500,
              "nome"=> "Barretos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505609,
              "nome"=> "Barrinha",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505708,
              "nome"=> "Barueri",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505807,
              "nome"=> "Bastos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3505906,
              "nome"=> "Batatais",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506003,
              "nome"=> "Bauru",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506102,
              "nome"=> "Bebedouro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506201,
              "nome"=> "Bento de Abreu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506300,
              "nome"=> "Bernardino de Campos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506359,
              "nome"=> "Bertioga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506409,
              "nome"=> "Bilac",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506508,
              "nome"=> "Birigui",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506607,
              "nome"=> "Biritiba-Mirim",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506706,
              "nome"=> "Boa Esperança do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506805,
              "nome"=> "Bocaina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3506904,
              "nome"=> "Bofete",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507001,
              "nome"=> "Boituva",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507100,
              "nome"=> "Bom Jesus dos Perdões",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507159,
              "nome"=> "Bom Sucesso de Itararé",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507209,
              "nome"=> "Borá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507308,
              "nome"=> "Boracéia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507407,
              "nome"=> "Borborema",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507456,
              "nome"=> "Borebi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507506,
              "nome"=> "Botucatu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507605,
              "nome"=> "Bragança Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507704,
              "nome"=> "Braúna",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507753,
              "nome"=> "Brejo Alegre",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507803,
              "nome"=> "Brodowski",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3507902,
              "nome"=> "Brotas",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508009,
              "nome"=> "Buri",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508108,
              "nome"=> "Buritama",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508207,
              "nome"=> "Buritizal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508306,
              "nome"=> "Cabrália Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508405,
              "nome"=> "Cabreúva",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508504,
              "nome"=> "Caçapava",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508603,
              "nome"=> "Cachoeira Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508702,
              "nome"=> "Caconde",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508801,
              "nome"=> "Cafelândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3508900,
              "nome"=> "Caiabu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509007,
              "nome"=> "Caieiras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509106,
              "nome"=> "Caiuá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509205,
              "nome"=> "Cajamar",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509254,
              "nome"=> "Cajati",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509304,
              "nome"=> "Cajobi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509403,
              "nome"=> "Cajuru",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509452,
              "nome"=> "Campina do Monte Alegre",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509502,
              "nome"=> "Campinas",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509601,
              "nome"=> "Campo Limpo Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509700,
              "nome"=> "Campos do Jordão",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509809,
              "nome"=> "Campos Novos Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509908,
              "nome"=> "Cananéia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3509957,
              "nome"=> "Canas",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510005,
              "nome"=> "Cândido Mota",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510104,
              "nome"=> "Cândido Rodrigues",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510153,
              "nome"=> "Canitar",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510203,
              "nome"=> "Capão Bonito",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510302,
              "nome"=> "Capela do Alto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510401,
              "nome"=> "Capivari",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510500,
              "nome"=> "Caraguatatuba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510609,
              "nome"=> "Carapicuíba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510708,
              "nome"=> "Cardoso",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510807,
              "nome"=> "Casa Branca",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3510906,
              "nome"=> "Cássia dos Coqueiros",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511003,
              "nome"=> "Castilho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511102,
              "nome"=> "Catanduva",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511201,
              "nome"=> "Catiguá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511300,
              "nome"=> "Cedral",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511409,
              "nome"=> "Cerqueira César",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511508,
              "nome"=> "Cerquilho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511607,
              "nome"=> "Cesário Lange",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511706,
              "nome"=> "Charqueada",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3511904,
              "nome"=> "Clementina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512001,
              "nome"=> "Colina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512100,
              "nome"=> "Colômbia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512209,
              "nome"=> "Conchal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512308,
              "nome"=> "Conchas",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512407,
              "nome"=> "Cordeirópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512506,
              "nome"=> "Coroados",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512605,
              "nome"=> "Coronel Macedo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512704,
              "nome"=> "Corumbataí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512803,
              "nome"=> "Cosmópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3512902,
              "nome"=> "Cosmorama",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513009,
              "nome"=> "Cotia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513108,
              "nome"=> "Cravinhos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513207,
              "nome"=> "Cristais Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513306,
              "nome"=> "Cruzália",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513405,
              "nome"=> "Cruzeiro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513504,
              "nome"=> "Cubatão",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513603,
              "nome"=> "Cunha",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513702,
              "nome"=> "Descalvado",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513801,
              "nome"=> "Diadema",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513850,
              "nome"=> "Dirce Reis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3513900,
              "nome"=> "Divinolândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514007,
              "nome"=> "Dobrada",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514106,
              "nome"=> "Dois Córregos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514205,
              "nome"=> "Dolcinópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514304,
              "nome"=> "Dourado",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514403,
              "nome"=> "Dracena",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514502,
              "nome"=> "Duartina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514601,
              "nome"=> "Dumont",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514700,
              "nome"=> "Echaporã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514809,
              "nome"=> "Eldorado",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514908,
              "nome"=> "Elias Fausto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514924,
              "nome"=> "Elisiário",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3514957,
              "nome"=> "Embaúba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515004,
              "nome"=> "Embu das Artes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515103,
              "nome"=> "Embu-Guaçu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515129,
              "nome"=> "Emilianópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515152,
              "nome"=> "Engenheiro Coelho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515186,
              "nome"=> "Espírito Santo do Pinhal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515194,
              "nome"=> "Espírito Santo do Turvo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515202,
              "nome"=> "Estrela d`Oeste",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515301,
              "nome"=> "Estrela do Norte",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515350,
              "nome"=> "Euclides da Cunha Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515400,
              "nome"=> "Fartura",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515509,
              "nome"=> "Fernandópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515608,
              "nome"=> "Fernando Prestes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515657,
              "nome"=> "Fernão",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515707,
              "nome"=> "Ferraz de Vasconcelos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515806,
              "nome"=> "Flora Rica",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3515905,
              "nome"=> "Floreal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516002,
              "nome"=> "Flórida Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516101,
              "nome"=> "Florínia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516200,
              "nome"=> "Franca",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516309,
              "nome"=> "Francisco Morato",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516408,
              "nome"=> "Franco da Rocha",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516507,
              "nome"=> "Gabriel Monteiro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516606,
              "nome"=> "Gália",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516705,
              "nome"=> "Garça",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516804,
              "nome"=> "Gastão Vidigal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516853,
              "nome"=> "Gavião Peixoto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3516903,
              "nome"=> "General Salgado",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517000,
              "nome"=> "Getulina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517109,
              "nome"=> "Glicério",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517208,
              "nome"=> "Guaiçara",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517307,
              "nome"=> "Guaimbê",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517406,
              "nome"=> "Guaíra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517505,
              "nome"=> "Guapiaçu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517604,
              "nome"=> "Guapiara",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517703,
              "nome"=> "Guará",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517802,
              "nome"=> "Guaraçaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3517901,
              "nome"=> "Guaraci",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518008,
              "nome"=> "Guarani d`Oeste",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518107,
              "nome"=> "Guarantã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518206,
              "nome"=> "Guararapes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518305,
              "nome"=> "Guararema",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518404,
              "nome"=> "Guaratinguetá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518503,
              "nome"=> "Guareí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518602,
              "nome"=> "Guariba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518701,
              "nome"=> "Guarujá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518800,
              "nome"=> "Guarulhos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518859,
              "nome"=> "Guatapará",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3518909,
              "nome"=> "Guzolândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519006,
              "nome"=> "Herculândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519055,
              "nome"=> "Holambra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519071,
              "nome"=> "Hortolândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519105,
              "nome"=> "Iacanga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519204,
              "nome"=> "Iacri",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519253,
              "nome"=> "Iaras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519303,
              "nome"=> "Ibaté",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519402,
              "nome"=> "Ibirá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519501,
              "nome"=> "Ibirarema",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519600,
              "nome"=> "Ibitinga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519709,
              "nome"=> "Ibiúna",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519808,
              "nome"=> "Icém",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3519907,
              "nome"=> "Iepê",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520004,
              "nome"=> "Igaraçu do Tietê",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520103,
              "nome"=> "Igarapava",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520202,
              "nome"=> "Igaratá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520301,
              "nome"=> "Iguape",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520400,
              "nome"=> "Ilhabela",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520426,
              "nome"=> "Ilha Comprida",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520442,
              "nome"=> "Ilha Solteira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520509,
              "nome"=> "Indaiatuba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520608,
              "nome"=> "Indiana",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520707,
              "nome"=> "Indiaporã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520806,
              "nome"=> "Inúbia Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3520905,
              "nome"=> "Ipaussu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521002,
              "nome"=> "Iperó",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521101,
              "nome"=> "Ipeúna",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521150,
              "nome"=> "Ipiguá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521200,
              "nome"=> "Iporanga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521309,
              "nome"=> "Ipuã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521408,
              "nome"=> "Iracemápolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521507,
              "nome"=> "Irapuã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521606,
              "nome"=> "Irapuru",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521705,
              "nome"=> "Itaberá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521804,
              "nome"=> "Itaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3521903,
              "nome"=> "Itajobi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522000,
              "nome"=> "Itaju",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522109,
              "nome"=> "Itanhaém",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522158,
              "nome"=> "Itaóca",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522208,
              "nome"=> "Itapecerica da Serra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522307,
              "nome"=> "Itapetininga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522406,
              "nome"=> "Itapeva",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522505,
              "nome"=> "Itapevi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522604,
              "nome"=> "Itapira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522653,
              "nome"=> "Itapirapuã Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522703,
              "nome"=> "Itápolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522802,
              "nome"=> "Itaporanga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3522901,
              "nome"=> "Itapuí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523008,
              "nome"=> "Itapura",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523107,
              "nome"=> "Itaquaquecetuba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523206,
              "nome"=> "Itararé",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523305,
              "nome"=> "Itariri",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523404,
              "nome"=> "Itatiba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523503,
              "nome"=> "Itatinga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523602,
              "nome"=> "Itirapina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523701,
              "nome"=> "Itirapuã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523800,
              "nome"=> "Itobi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3523909,
              "nome"=> "Itu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524006,
              "nome"=> "Itupeva",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524105,
              "nome"=> "Ituverava",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524204,
              "nome"=> "Jaborandi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524303,
              "nome"=> "Jaboticabal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524402,
              "nome"=> "Jacareí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524501,
              "nome"=> "Jaci",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524600,
              "nome"=> "Jacupiranga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524709,
              "nome"=> "Jaguariúna",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524808,
              "nome"=> "Jales",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3524907,
              "nome"=> "Jambeiro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525003,
              "nome"=> "Jandira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525102,
              "nome"=> "Jardinópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525201,
              "nome"=> "Jarinu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525300,
              "nome"=> "Jaú",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525409,
              "nome"=> "Jeriquara",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525508,
              "nome"=> "Joanópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525607,
              "nome"=> "João Ramalho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525706,
              "nome"=> "José Bonifácio",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525805,
              "nome"=> "Júlio Mesquita",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525854,
              "nome"=> "Jumirim",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3525904,
              "nome"=> "Jundiaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526001,
              "nome"=> "Junqueirópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526100,
              "nome"=> "Juquiá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526209,
              "nome"=> "Juquitiba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526308,
              "nome"=> "Lagoinha",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526407,
              "nome"=> "Laranjal Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526506,
              "nome"=> "Lavínia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526605,
              "nome"=> "Lavrinhas",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526704,
              "nome"=> "Leme",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526803,
              "nome"=> "Lençóis Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3526902,
              "nome"=> "Limeira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527009,
              "nome"=> "Lindóia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527108,
              "nome"=> "Lins",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527207,
              "nome"=> "Lorena",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527256,
              "nome"=> "Lourdes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527306,
              "nome"=> "Louveira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527405,
              "nome"=> "Lucélia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527504,
              "nome"=> "Lucianópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527603,
              "nome"=> "Luís Antônio",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527702,
              "nome"=> "Luiziânia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527801,
              "nome"=> "Lupércio",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3527900,
              "nome"=> "Lutécia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528007,
              "nome"=> "Macatuba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528106,
              "nome"=> "Macaubal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528205,
              "nome"=> "Macedônia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528304,
              "nome"=> "Magda",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528403,
              "nome"=> "Mairinque",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528502,
              "nome"=> "Mairiporã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528601,
              "nome"=> "Manduri",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528700,
              "nome"=> "Marabá Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528809,
              "nome"=> "Maracaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528858,
              "nome"=> "Marapoama",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3528908,
              "nome"=> "Mariápolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529005,
              "nome"=> "Marília",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529104,
              "nome"=> "Marinópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529203,
              "nome"=> "Martinópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529302,
              "nome"=> "Matão",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529401,
              "nome"=> "Mauá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529500,
              "nome"=> "Mendonça",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529609,
              "nome"=> "Meridiano",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529658,
              "nome"=> "Mesópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529708,
              "nome"=> "Miguelópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529807,
              "nome"=> "Mineiros do Tietê",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3529906,
              "nome"=> "Miracatu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530003,
              "nome"=> "Mira Estrela",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530102,
              "nome"=> "Mirandópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530201,
              "nome"=> "Mirante do Paranapanema",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530300,
              "nome"=> "Mirassol",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530409,
              "nome"=> "Mirassolândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530508,
              "nome"=> "Mococa",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530607,
              "nome"=> "Mogi das Cruzes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530706,
              "nome"=> "Mogi Guaçu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530805,
              "nome"=> "Moji Mirim",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3530904,
              "nome"=> "Mombuca",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531001,
              "nome"=> "Monções",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531100,
              "nome"=> "Mongaguá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531209,
              "nome"=> "Monte Alegre do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531308,
              "nome"=> "Monte Alto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531407,
              "nome"=> "Monte Aprazível",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531506,
              "nome"=> "Monte Azul Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531605,
              "nome"=> "Monte Castelo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531704,
              "nome"=> "Monteiro Lobato",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531803,
              "nome"=> "Monte Mor",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3531902,
              "nome"=> "Morro Agudo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532009,
              "nome"=> "Morungaba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532058,
              "nome"=> "Motuca",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532108,
              "nome"=> "Murutinga do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532157,
              "nome"=> "Nantes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532207,
              "nome"=> "Narandiba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532306,
              "nome"=> "Natividade da Serra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532405,
              "nome"=> "Nazaré Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532504,
              "nome"=> "Neves Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532603,
              "nome"=> "Nhandeara",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532702,
              "nome"=> "Nipoã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532801,
              "nome"=> "Nova Aliança",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532827,
              "nome"=> "Nova Campina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532843,
              "nome"=> "Nova Canaã Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532868,
              "nome"=> "Nova Castilho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3532900,
              "nome"=> "Nova Europa",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533007,
              "nome"=> "Nova Granada",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533106,
              "nome"=> "Nova Guataporanga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533205,
              "nome"=> "Nova Independência",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533254,
              "nome"=> "Novais",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533304,
              "nome"=> "Nova Luzitânia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533403,
              "nome"=> "Nova Odessa",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533502,
              "nome"=> "Novo Horizonte",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533601,
              "nome"=> "Nuporanga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533700,
              "nome"=> "Ocauçu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533809,
              "nome"=> "Óleo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3533908,
              "nome"=> "Olímpia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534005,
              "nome"=> "Onda Verde",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534104,
              "nome"=> "Oriente",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534203,
              "nome"=> "Orindiúva",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534302,
              "nome"=> "Orlândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534401,
              "nome"=> "Osasco",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534500,
              "nome"=> "Oscar Bressane",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534609,
              "nome"=> "Osvaldo Cruz",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534708,
              "nome"=> "Ourinhos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534757,
              "nome"=> "Ouroeste",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534807,
              "nome"=> "Ouro Verde",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3534906,
              "nome"=> "Pacaembu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535002,
              "nome"=> "Palestina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535101,
              "nome"=> "Palmares Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535200,
              "nome"=> "Palmeira d`Oeste",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535309,
              "nome"=> "Palmital",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535408,
              "nome"=> "Panorama",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535507,
              "nome"=> "Paraguaçu Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535606,
              "nome"=> "Paraibuna",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535705,
              "nome"=> "Paraíso",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535804,
              "nome"=> "Paranapanema",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3535903,
              "nome"=> "Paranapuã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536000,
              "nome"=> "Parapuã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536109,
              "nome"=> "Pardinho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536208,
              "nome"=> "Pariquera-Açu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536257,
              "nome"=> "Parisi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536307,
              "nome"=> "Patrocínio Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536406,
              "nome"=> "Paulicéia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536505,
              "nome"=> "Paulínia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536570,
              "nome"=> "Paulistânia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536604,
              "nome"=> "Paulo de Faria",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536703,
              "nome"=> "Pederneiras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536802,
              "nome"=> "Pedra Bela",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3536901,
              "nome"=> "Pedranópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537008,
              "nome"=> "Pedregulho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537107,
              "nome"=> "Pedreira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537156,
              "nome"=> "Pedrinhas Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537206,
              "nome"=> "Pedro de Toledo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537305,
              "nome"=> "Penápolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537404,
              "nome"=> "Pereira Barreto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537503,
              "nome"=> "Pereiras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537602,
              "nome"=> "Peruíbe",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537701,
              "nome"=> "Piacatu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537800,
              "nome"=> "Piedade",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3537909,
              "nome"=> "Pilar do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538006,
              "nome"=> "Pindamonhangaba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538105,
              "nome"=> "Pindorama",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538204,
              "nome"=> "Pinhalzinho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538303,
              "nome"=> "Piquerobi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538501,
              "nome"=> "Piquete",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538600,
              "nome"=> "Piracaia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538709,
              "nome"=> "Piracicaba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538808,
              "nome"=> "Piraju",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3538907,
              "nome"=> "Pirajuí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539004,
              "nome"=> "Pirangi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539103,
              "nome"=> "Pirapora do Bom Jesus",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539202,
              "nome"=> "Pirapozinho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539301,
              "nome"=> "Pirassununga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539400,
              "nome"=> "Piratininga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539509,
              "nome"=> "Pitangueiras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539608,
              "nome"=> "Planalto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539707,
              "nome"=> "Platina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539806,
              "nome"=> "Poá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3539905,
              "nome"=> "Poloni",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540002,
              "nome"=> "Pompéia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540101,
              "nome"=> "Pongaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540200,
              "nome"=> "Pontal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540259,
              "nome"=> "Pontalinda",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540309,
              "nome"=> "Pontes Gestal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540408,
              "nome"=> "Populina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540507,
              "nome"=> "Porangaba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540606,
              "nome"=> "Porto Feliz",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540705,
              "nome"=> "Porto Ferreira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540754,
              "nome"=> "Potim",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540804,
              "nome"=> "Potirendaba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540853,
              "nome"=> "Pracinha",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3540903,
              "nome"=> "Pradópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541000,
              "nome"=> "Praia Grande",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541059,
              "nome"=> "Pratânia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541109,
              "nome"=> "Presidente Alves",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541208,
              "nome"=> "Presidente Bernardes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541307,
              "nome"=> "Presidente Epitácio",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541406,
              "nome"=> "Presidente Prudente",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541505,
              "nome"=> "Presidente Venceslau",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541604,
              "nome"=> "Promissão",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541653,
              "nome"=> "Quadra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541703,
              "nome"=> "Quatá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541802,
              "nome"=> "Queiroz",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3541901,
              "nome"=> "Queluz",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542008,
              "nome"=> "Quintana",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542107,
              "nome"=> "Rafard",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542206,
              "nome"=> "Rancharia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542305,
              "nome"=> "Redenção da Serra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542404,
              "nome"=> "Regente Feijó",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542503,
              "nome"=> "Reginópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542602,
              "nome"=> "Registro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542701,
              "nome"=> "Restinga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542800,
              "nome"=> "Ribeira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3542909,
              "nome"=> "Ribeirão Bonito",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543006,
              "nome"=> "Ribeirão Branco",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543105,
              "nome"=> "Ribeirão Corrente",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543204,
              "nome"=> "Ribeirão do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543238,
              "nome"=> "Ribeirão dos Índios",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543253,
              "nome"=> "Ribeirão Grande",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543303,
              "nome"=> "Ribeirão Pires",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543402,
              "nome"=> "Ribeirão Preto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543501,
              "nome"=> "Riversul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543600,
              "nome"=> "Rifaina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543709,
              "nome"=> "Rincão",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543808,
              "nome"=> "Rinópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3543907,
              "nome"=> "Rio Claro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544004,
              "nome"=> "Rio das Pedras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544103,
              "nome"=> "Rio Grande da Serra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544202,
              "nome"=> "Riolândia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544251,
              "nome"=> "Rosana",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544301,
              "nome"=> "Roseira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544400,
              "nome"=> "Rubiácea",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544509,
              "nome"=> "Rubinéia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544608,
              "nome"=> "Sabino",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544707,
              "nome"=> "Sagres",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544806,
              "nome"=> "Sales",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3544905,
              "nome"=> "Sales Oliveira",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545001,
              "nome"=> "Salesópolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545100,
              "nome"=> "Salmourão",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545159,
              "nome"=> "Saltinho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545209,
              "nome"=> "Salto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545308,
              "nome"=> "Salto de Pirapora",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545407,
              "nome"=> "Salto Grande",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545506,
              "nome"=> "Sandovalina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545605,
              "nome"=> "Santa Adélia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545704,
              "nome"=> "Santa Albertina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3545803,
              "nome"=> "Santa Bárbara d`Oeste",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546009,
              "nome"=> "Santa Branca",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546108,
              "nome"=> "Santa Clara d`Oeste",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546207,
              "nome"=> "Santa Cruz da Conceição",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546256,
              "nome"=> "Santa Cruz da Esperança",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546306,
              "nome"=> "Santa Cruz das Palmeiras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546405,
              "nome"=> "Santa Cruz do Rio Pardo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546504,
              "nome"=> "Santa Ernestina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546603,
              "nome"=> "Santa Fé do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546702,
              "nome"=> "Santa Gertrudes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546801,
              "nome"=> "Santa Isabel",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3546900,
              "nome"=> "Santa Lúcia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547007,
              "nome"=> "Santa Maria da Serra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547106,
              "nome"=> "Santa Mercedes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547205,
              "nome"=> "Santana da Ponte Pensa",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547304,
              "nome"=> "Santana de Parnaíba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547403,
              "nome"=> "Santa Rita d`Oeste",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547502,
              "nome"=> "Santa Rita do Passa Quatro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547601,
              "nome"=> "Santa Rosa de Viterbo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547650,
              "nome"=> "Santa Salete",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547700,
              "nome"=> "Santo Anastácio",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547809,
              "nome"=> "Santo André",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3547908,
              "nome"=> "Santo Antônio da Alegria",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548005,
              "nome"=> "Santo Antônio de Posse",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548054,
              "nome"=> "Santo Antônio do Aracanguá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548104,
              "nome"=> "Santo Antônio do Jardim",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548203,
              "nome"=> "Santo Antônio do Pinhal",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548302,
              "nome"=> "Santo Expedito",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548401,
              "nome"=> "Santópolis do Aguapeí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548500,
              "nome"=> "Santos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548609,
              "nome"=> "São Bento do Sapucaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548708,
              "nome"=> "São Bernardo do Campo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548807,
              "nome"=> "São Caetano do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3548906,
              "nome"=> "São Carlos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549003,
              "nome"=> "São Francisco",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549102,
              "nome"=> "São João da Boa Vista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549201,
              "nome"=> "São João das Duas Pontes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549250,
              "nome"=> "São João de Iracema",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549300,
              "nome"=> "São João do Pau d`Alho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549409,
              "nome"=> "São Joaquim da Barra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549508,
              "nome"=> "São José da Bela Vista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549607,
              "nome"=> "São José do Barreiro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549706,
              "nome"=> "São José do Rio Pardo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549805,
              "nome"=> "São José do Rio Preto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549904,
              "nome"=> "São José dos Campos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3549953,
              "nome"=> "São Lourenço da Serra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550001,
              "nome"=> "São Luís do Paraitinga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550100,
              "nome"=> "São Manuel",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550209,
              "nome"=> "São Miguel Arcanjo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550308,
              "nome"=> "São Paulo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550407,
              "nome"=> "São Pedro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550506,
              "nome"=> "São Pedro do Turvo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550605,
              "nome"=> "São Roque",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550704,
              "nome"=> "São Sebastião",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550803,
              "nome"=> "São Sebastião da Grama",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3550902,
              "nome"=> "São Simão",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551009,
              "nome"=> "São Vicente",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551108,
              "nome"=> "Sarapuí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551207,
              "nome"=> "Sarutaiá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551306,
              "nome"=> "Sebastianópolis do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551405,
              "nome"=> "Serra Azul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551504,
              "nome"=> "Serrana",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551603,
              "nome"=> "Serra Negra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551702,
              "nome"=> "Sertãozinho",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551801,
              "nome"=> "Sete Barras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3551900,
              "nome"=> "Severínia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552007,
              "nome"=> "Silveiras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552106,
              "nome"=> "Socorro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552205,
              "nome"=> "Sorocaba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552304,
              "nome"=> "Sud Mennucci",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552403,
              "nome"=> "Sumaré",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552502,
              "nome"=> "Suzano",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552551,
              "nome"=> "Suzanápolis",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552601,
              "nome"=> "Tabapuã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552700,
              "nome"=> "Tabatinga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552809,
              "nome"=> "Taboão da Serra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3552908,
              "nome"=> "Taciba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553005,
              "nome"=> "Taguaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553104,
              "nome"=> "Taiaçu",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553203,
              "nome"=> "Taiúva",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553302,
              "nome"=> "Tambaú",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553401,
              "nome"=> "Tanabi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553500,
              "nome"=> "Tapiraí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553609,
              "nome"=> "Tapiratiba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553658,
              "nome"=> "Taquaral",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553708,
              "nome"=> "Taquaritinga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553807,
              "nome"=> "Taquarituba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553856,
              "nome"=> "Taquarivaí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553906,
              "nome"=> "Tarabai",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3553955,
              "nome"=> "Tarumã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554003,
              "nome"=> "Tatuí",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554102,
              "nome"=> "Taubaté",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554201,
              "nome"=> "Tejupá",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554300,
              "nome"=> "Teodoro Sampaio",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554409,
              "nome"=> "Terra Roxa",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554508,
              "nome"=> "Tietê",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554607,
              "nome"=> "Timburi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554656,
              "nome"=> "Torre de Pedra",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554706,
              "nome"=> "Torrinha",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554755,
              "nome"=> "Trabiju",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554805,
              "nome"=> "Tremembé",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554904,
              "nome"=> "Três Fronteiras",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3554953,
              "nome"=> "Tuiuti",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555000,
              "nome"=> "Tupã",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555109,
              "nome"=> "Tupi Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555208,
              "nome"=> "Turiúba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555307,
              "nome"=> "Turmalina",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555356,
              "nome"=> "Ubarana",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555406,
              "nome"=> "Ubatuba",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555505,
              "nome"=> "Ubirajara",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555604,
              "nome"=> "Uchoa",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555703,
              "nome"=> "União Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555802,
              "nome"=> "Urânia",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3555901,
              "nome"=> "Uru",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556008,
              "nome"=> "Urupês",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556107,
              "nome"=> "Valentim Gentil",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556206,
              "nome"=> "Valinhos",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556305,
              "nome"=> "Valparaíso",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556354,
              "nome"=> "Vargem",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556404,
              "nome"=> "Vargem Grande do Sul",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556453,
              "nome"=> "Vargem Grande Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556503,
              "nome"=> "Várzea Paulista",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556602,
              "nome"=> "Vera Cruz",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556701,
              "nome"=> "Vinhedo",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556800,
              "nome"=> "Viradouro",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556909,
              "nome"=> "Vista Alegre do Alto",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3556958,
              "nome"=> "Vitória Brasil",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3557006,
              "nome"=> "Votorantim",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3557105,
              "nome"=> "Votuporanga",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3557154,
              "nome"=> "Zacarias",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3557204,
              "nome"=> "Chavantes",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 3557303,
              "nome"=> "Estiva Gerbi",
              "estadobrasil_id"=> 35
            ],
            [
              "id"=> 4100103,
              "nome"=> "Abatiá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100202,
              "nome"=> "Adrianópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100301,
              "nome"=> "Agudos do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100400,
              "nome"=> "Almirante Tamandaré",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100459,
              "nome"=> "Altamira do Paraná",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100509,
              "nome"=> "Altônia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100608,
              "nome"=> "Alto Paraná",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100707,
              "nome"=> "Alto Piquiri",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100806,
              "nome"=> "Alvorada do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4100905,
              "nome"=> "Amaporã",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101002,
              "nome"=> "Ampére",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101051,
              "nome"=> "Anahy",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101101,
              "nome"=> "Andirá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101150,
              "nome"=> "Ângulo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101200,
              "nome"=> "Antonina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101309,
              "nome"=> "Antônio Olinto",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101408,
              "nome"=> "Apucarana",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101507,
              "nome"=> "Arapongas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101606,
              "nome"=> "Arapoti",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101655,
              "nome"=> "Arapuã",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101705,
              "nome"=> "Araruna",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101804,
              "nome"=> "Araucária",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101853,
              "nome"=> "Ariranha do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4101903,
              "nome"=> "Assaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102000,
              "nome"=> "Assis Chateaubriand",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102109,
              "nome"=> "Astorga",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102208,
              "nome"=> "Atalaia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102307,
              "nome"=> "Balsa Nova",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102406,
              "nome"=> "Bandeirantes",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102505,
              "nome"=> "Barbosa Ferraz",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102604,
              "nome"=> "Barracão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102703,
              "nome"=> "Barra do Jacaré",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102752,
              "nome"=> "Bela Vista da Caroba",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102802,
              "nome"=> "Bela Vista do Paraíso",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4102901,
              "nome"=> "Bituruna",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103008,
              "nome"=> "Boa Esperança",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103024,
              "nome"=> "Boa Esperança do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103040,
              "nome"=> "Boa Ventura de São Roque",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103057,
              "nome"=> "Boa Vista da Aparecida",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103107,
              "nome"=> "Bocaiúva do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103156,
              "nome"=> "Bom Jesus do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103206,
              "nome"=> "Bom Sucesso",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103222,
              "nome"=> "Bom Sucesso do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103305,
              "nome"=> "Borrazópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103354,
              "nome"=> "Braganey",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103370,
              "nome"=> "Brasilândia do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103404,
              "nome"=> "Cafeara",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103453,
              "nome"=> "Cafelândia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103479,
              "nome"=> "Cafezal do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103503,
              "nome"=> "Califórnia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103602,
              "nome"=> "Cambará",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103701,
              "nome"=> "Cambé",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103800,
              "nome"=> "Cambira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103909,
              "nome"=> "Campina da Lagoa",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4103958,
              "nome"=> "Campina do Simão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104006,
              "nome"=> "Campina Grande do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104055,
              "nome"=> "Campo Bonito",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104105,
              "nome"=> "Campo do Tenente",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104204,
              "nome"=> "Campo Largo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104253,
              "nome"=> "Campo Magro",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104303,
              "nome"=> "Campo Mourão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104402,
              "nome"=> "Cândido de Abreu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104428,
              "nome"=> "Candói",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104451,
              "nome"=> "Cantagalo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104501,
              "nome"=> "Capanema",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104600,
              "nome"=> "Capitão Leônidas Marques",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104659,
              "nome"=> "Carambeí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104709,
              "nome"=> "Carlópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104808,
              "nome"=> "Cascavel",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4104907,
              "nome"=> "Castro",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105003,
              "nome"=> "Catanduvas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105102,
              "nome"=> "Centenário do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105201,
              "nome"=> "Cerro Azul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105300,
              "nome"=> "Céu Azul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105409,
              "nome"=> "Chopinzinho",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105508,
              "nome"=> "Cianorte",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105607,
              "nome"=> "Cidade Gaúcha",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105706,
              "nome"=> "Clevelândia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105805,
              "nome"=> "Colombo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4105904,
              "nome"=> "Colorado",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106001,
              "nome"=> "Congonhinhas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106100,
              "nome"=> "Conselheiro Mairinck",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106209,
              "nome"=> "Contenda",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106308,
              "nome"=> "Corbélia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106407,
              "nome"=> "Cornélio Procópio",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106456,
              "nome"=> "Coronel Domingos Soares",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106506,
              "nome"=> "Coronel Vivida",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106555,
              "nome"=> "Corumbataí do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106571,
              "nome"=> "Cruzeiro do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106605,
              "nome"=> "Cruzeiro do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106704,
              "nome"=> "Cruzeiro do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106803,
              "nome"=> "Cruz Machado",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106852,
              "nome"=> "Cruzmaltina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4106902,
              "nome"=> "Curitiba",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107009,
              "nome"=> "Curiúva",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107108,
              "nome"=> "Diamante do Norte",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107124,
              "nome"=> "Diamante do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107157,
              "nome"=> "Diamante d`Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107207,
              "nome"=> "Dois Vizinhos",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107256,
              "nome"=> "Douradina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107306,
              "nome"=> "Doutor Camargo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107405,
              "nome"=> "Enéas Marques",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107504,
              "nome"=> "Engenheiro Beltrão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107520,
              "nome"=> "Esperança Nova",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107538,
              "nome"=> "Entre Rios do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107546,
              "nome"=> "Espigão Alto do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107553,
              "nome"=> "Farol",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107603,
              "nome"=> "Faxinal",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107652,
              "nome"=> "Fazenda Rio Grande",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107702,
              "nome"=> "Fênix",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107736,
              "nome"=> "Fernandes Pinheiro",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107751,
              "nome"=> "Figueira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107801,
              "nome"=> "Floraí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107850,
              "nome"=> "Flor da Serra do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4107900,
              "nome"=> "Floresta",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108007,
              "nome"=> "Florestópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108106,
              "nome"=> "Flórida",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108205,
              "nome"=> "Formosa do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108304,
              "nome"=> "Foz do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108320,
              "nome"=> "Francisco Alves",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108403,
              "nome"=> "Francisco Beltrão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108452,
              "nome"=> "Foz do Jordão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108502,
              "nome"=> "General Carneiro",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108551,
              "nome"=> "Godoy Moreira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108601,
              "nome"=> "Goioerê",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108650,
              "nome"=> "Goioxim",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108700,
              "nome"=> "Grandes Rios",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108809,
              "nome"=> "Guaíra",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108908,
              "nome"=> "Guairaçá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4108957,
              "nome"=> "Guamiranga",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109005,
              "nome"=> "Guapirama",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109104,
              "nome"=> "Guaporema",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109203,
              "nome"=> "Guaraci",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109302,
              "nome"=> "Guaraniaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109401,
              "nome"=> "Guarapuava",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109500,
              "nome"=> "Guaraqueçaba",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109609,
              "nome"=> "Guaratuba",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109658,
              "nome"=> "Honório Serpa",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109708,
              "nome"=> "Ibaiti",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109757,
              "nome"=> "Ibema",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109807,
              "nome"=> "Ibiporã",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4109906,
              "nome"=> "Icaraíma",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110003,
              "nome"=> "Iguaraçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110052,
              "nome"=> "Iguatu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110078,
              "nome"=> "Imbaú",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110102,
              "nome"=> "Imbituva",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110201,
              "nome"=> "Inácio Martins",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110300,
              "nome"=> "Inajá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110409,
              "nome"=> "Indianópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110508,
              "nome"=> "Ipiranga",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110607,
              "nome"=> "Iporã",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110656,
              "nome"=> "Iracema do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110706,
              "nome"=> "Irati",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110805,
              "nome"=> "Iretama",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110904,
              "nome"=> "Itaguajé",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4110953,
              "nome"=> "Itaipulândia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111001,
              "nome"=> "Itambaracá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111100,
              "nome"=> "Itambé",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111209,
              "nome"=> "Itapejara d`Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111258,
              "nome"=> "Itaperuçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111308,
              "nome"=> "Itaúna do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111407,
              "nome"=> "Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111506,
              "nome"=> "Ivaiporã",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111555,
              "nome"=> "Ivaté",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111605,
              "nome"=> "Ivatuba",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111704,
              "nome"=> "Jaboti",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111803,
              "nome"=> "Jacarezinho",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4111902,
              "nome"=> "Jaguapitã",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112009,
              "nome"=> "Jaguariaíva",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112108,
              "nome"=> "Jandaia do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112207,
              "nome"=> "Janiópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112306,
              "nome"=> "Japira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112405,
              "nome"=> "Japurá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112504,
              "nome"=> "Jardim Alegre",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112603,
              "nome"=> "Jardim Olinda",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112702,
              "nome"=> "Jataizinho",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112751,
              "nome"=> "Jesuítas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112801,
              "nome"=> "Joaquim Távora",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112900,
              "nome"=> "Jundiaí do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4112959,
              "nome"=> "Juranda",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113007,
              "nome"=> "Jussara",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113106,
              "nome"=> "Kaloré",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113205,
              "nome"=> "Lapa",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113254,
              "nome"=> "Laranjal",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113304,
              "nome"=> "Laranjeiras do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113403,
              "nome"=> "Leópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113429,
              "nome"=> "Lidianópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113452,
              "nome"=> "Lindoeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113502,
              "nome"=> "Loanda",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113601,
              "nome"=> "Lobato",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113700,
              "nome"=> "Londrina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113734,
              "nome"=> "Luiziana",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113759,
              "nome"=> "Lunardelli",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113809,
              "nome"=> "Lupionópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4113908,
              "nome"=> "Mallet",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114005,
              "nome"=> "Mamborê",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114104,
              "nome"=> "Mandaguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114203,
              "nome"=> "Mandaguari",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114302,
              "nome"=> "Mandirituba",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114351,
              "nome"=> "Manfrinópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114401,
              "nome"=> "Mangueirinha",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114500,
              "nome"=> "Manoel Ribas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114609,
              "nome"=> "Marechal Cândido Rondon",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114708,
              "nome"=> "Maria Helena",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114807,
              "nome"=> "Marialva",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4114906,
              "nome"=> "Marilândia do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115002,
              "nome"=> "Marilena",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115101,
              "nome"=> "Mariluz",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115200,
              "nome"=> "Maringá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115309,
              "nome"=> "Mariópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115358,
              "nome"=> "Maripá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115408,
              "nome"=> "Marmeleiro",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115457,
              "nome"=> "Marquinho",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115507,
              "nome"=> "Marumbi",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115606,
              "nome"=> "Matelândia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115705,
              "nome"=> "Matinhos",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115739,
              "nome"=> "Mato Rico",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115754,
              "nome"=> "Mauá da Serra",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115804,
              "nome"=> "Medianeira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115853,
              "nome"=> "Mercedes",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4115903,
              "nome"=> "Mirador",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116000,
              "nome"=> "Miraselva",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116059,
              "nome"=> "Missal",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116109,
              "nome"=> "Moreira Sales",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116208,
              "nome"=> "Morretes",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116307,
              "nome"=> "Munhoz de Melo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116406,
              "nome"=> "Nossa Senhora das Graças",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116505,
              "nome"=> "Nova Aliança do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116604,
              "nome"=> "Nova América da Colina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116703,
              "nome"=> "Nova Aurora",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116802,
              "nome"=> "Nova Cantu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116901,
              "nome"=> "Nova Esperança",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4116950,
              "nome"=> "Nova Esperança do Sudoeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117008,
              "nome"=> "Nova Fátima",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117057,
              "nome"=> "Nova Laranjeiras",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117107,
              "nome"=> "Nova Londrina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117206,
              "nome"=> "Nova Olímpia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117214,
              "nome"=> "Nova Santa Bárbara",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117222,
              "nome"=> "Nova Santa Rosa",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117255,
              "nome"=> "Nova Prata do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117271,
              "nome"=> "Nova Tebas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117297,
              "nome"=> "Novo Itacolomi",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117305,
              "nome"=> "Ortigueira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117404,
              "nome"=> "Ourizona",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117453,
              "nome"=> "Ouro Verde do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117503,
              "nome"=> "Paiçandu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117602,
              "nome"=> "Palmas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117701,
              "nome"=> "Palmeira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117800,
              "nome"=> "Palmital",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4117909,
              "nome"=> "Palotina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118006,
              "nome"=> "Paraíso do Norte",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118105,
              "nome"=> "Paranacity",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118204,
              "nome"=> "Paranaguá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118303,
              "nome"=> "Paranapoema",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118402,
              "nome"=> "Paranavaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118451,
              "nome"=> "Pato Bragado",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118501,
              "nome"=> "Pato Branco",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118600,
              "nome"=> "Paula Freitas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118709,
              "nome"=> "Paulo Frontin",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118808,
              "nome"=> "Peabiru",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118857,
              "nome"=> "Perobal",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4118907,
              "nome"=> "Pérola",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119004,
              "nome"=> "Pérola d`Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119103,
              "nome"=> "Piên",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119152,
              "nome"=> "Pinhais",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119202,
              "nome"=> "Pinhalão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119251,
              "nome"=> "Pinhal de São Bento",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119301,
              "nome"=> "Pinhão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119400,
              "nome"=> "Piraí do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119509,
              "nome"=> "Piraquara",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119608,
              "nome"=> "Pitanga",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119657,
              "nome"=> "Pitangueiras",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119707,
              "nome"=> "Planaltina do Paraná",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119806,
              "nome"=> "Planalto",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119905,
              "nome"=> "Ponta Grossa",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4119954,
              "nome"=> "Pontal do Paraná",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120002,
              "nome"=> "Porecatu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120101,
              "nome"=> "Porto Amazonas",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120150,
              "nome"=> "Porto Barreiro",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120200,
              "nome"=> "Porto Rico",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120309,
              "nome"=> "Porto Vitória",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120333,
              "nome"=> "Prado Ferreira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120358,
              "nome"=> "Pranchita",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120408,
              "nome"=> "Presidente Castelo Branco",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120507,
              "nome"=> "Primeiro de Maio",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120606,
              "nome"=> "Prudentópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120655,
              "nome"=> "Quarto Centenário",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120705,
              "nome"=> "Quatiguá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120804,
              "nome"=> "Quatro Barras",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120853,
              "nome"=> "Quatro Pontes",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4120903,
              "nome"=> "Quedas do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121000,
              "nome"=> "Querência do Norte",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121109,
              "nome"=> "Quinta do Sol",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121208,
              "nome"=> "Quitandinha",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121257,
              "nome"=> "Ramilândia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121307,
              "nome"=> "Rancho Alegre",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121356,
              "nome"=> "Rancho Alegre d`Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121406,
              "nome"=> "Realeza",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121505,
              "nome"=> "Rebouças",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121604,
              "nome"=> "Renascença",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121703,
              "nome"=> "Reserva",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121752,
              "nome"=> "Reserva do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121802,
              "nome"=> "Ribeirão Claro",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4121901,
              "nome"=> "Ribeirão do Pinhal",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122008,
              "nome"=> "Rio Azul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122107,
              "nome"=> "Rio Bom",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122156,
              "nome"=> "Rio Bonito do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122172,
              "nome"=> "Rio Branco do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122206,
              "nome"=> "Rio Branco do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122305,
              "nome"=> "Rio Negro",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122404,
              "nome"=> "Rolândia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122503,
              "nome"=> "Roncador",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122602,
              "nome"=> "Rondon",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122651,
              "nome"=> "Rosário do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122701,
              "nome"=> "Sabáudia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122800,
              "nome"=> "Salgado Filho",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4122909,
              "nome"=> "Salto do Itararé",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123006,
              "nome"=> "Salto do Lontra",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123105,
              "nome"=> "Santa Amélia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123204,
              "nome"=> "Santa Cecília do Pavão",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123303,
              "nome"=> "Santa Cruz de Monte Castelo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123402,
              "nome"=> "Santa Fé",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123501,
              "nome"=> "Santa Helena",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123600,
              "nome"=> "Santa Inês",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123709,
              "nome"=> "Santa Isabel do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123808,
              "nome"=> "Santa Izabel do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123824,
              "nome"=> "Santa Lúcia",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123857,
              "nome"=> "Santa Maria do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123907,
              "nome"=> "Santa Mariana",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4123956,
              "nome"=> "Santa Mônica",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124004,
              "nome"=> "Santana do Itararé",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124020,
              "nome"=> "Santa Tereza do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124053,
              "nome"=> "Santa Terezinha de Itaipu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124103,
              "nome"=> "Santo Antônio da Platina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124202,
              "nome"=> "Santo Antônio do Caiuá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124301,
              "nome"=> "Santo Antônio do Paraíso",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124400,
              "nome"=> "Santo Antônio do Sudoeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124509,
              "nome"=> "Santo Inácio",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124608,
              "nome"=> "São Carlos do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124707,
              "nome"=> "São Jerônimo da Serra",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124806,
              "nome"=> "São João",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4124905,
              "nome"=> "São João do Caiuá",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125001,
              "nome"=> "São João do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125100,
              "nome"=> "São João do Triunfo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125209,
              "nome"=> "São Jorge d`Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125308,
              "nome"=> "São Jorge do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125357,
              "nome"=> "São Jorge do Patrocínio",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125407,
              "nome"=> "São José da Boa Vista",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125456,
              "nome"=> "São José das Palmeiras",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125506,
              "nome"=> "São José dos Pinhais",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125555,
              "nome"=> "São Manoel do Paraná",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125605,
              "nome"=> "São Mateus do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125704,
              "nome"=> "São Miguel do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125753,
              "nome"=> "São Pedro do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125803,
              "nome"=> "São Pedro do Ivaí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4125902,
              "nome"=> "São Pedro do Paraná",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126009,
              "nome"=> "São Sebastião da Amoreira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126108,
              "nome"=> "São Tomé",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126207,
              "nome"=> "Sapopema",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126256,
              "nome"=> "Sarandi",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126272,
              "nome"=> "Saudade do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126306,
              "nome"=> "Sengés",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126355,
              "nome"=> "Serranópolis do Iguaçu",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126405,
              "nome"=> "Sertaneja",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126504,
              "nome"=> "Sertanópolis",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126603,
              "nome"=> "Siqueira Campos",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126652,
              "nome"=> "Sulina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126678,
              "nome"=> "Tamarana",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126702,
              "nome"=> "Tamboara",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126801,
              "nome"=> "Tapejara",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4126900,
              "nome"=> "Tapira",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127007,
              "nome"=> "Teixeira Soares",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127106,
              "nome"=> "Telêmaco Borba",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127205,
              "nome"=> "Terra Boa",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127304,
              "nome"=> "Terra Rica",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127403,
              "nome"=> "Terra Roxa",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127502,
              "nome"=> "Tibagi",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127601,
              "nome"=> "Tijucas do Sul",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127700,
              "nome"=> "Toledo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127809,
              "nome"=> "Tomazina",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127858,
              "nome"=> "Três Barras do Paraná",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127882,
              "nome"=> "Tunas do Paraná",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127908,
              "nome"=> "Tuneiras do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127957,
              "nome"=> "Tupãssi",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4127965,
              "nome"=> "Turvo",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128005,
              "nome"=> "Ubiratã",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128104,
              "nome"=> "Umuarama",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128203,
              "nome"=> "União da Vitória",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128302,
              "nome"=> "Uniflor",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128401,
              "nome"=> "Uraí",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128500,
              "nome"=> "Wenceslau Braz",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128534,
              "nome"=> "Ventania",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128559,
              "nome"=> "Vera Cruz do Oeste",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128609,
              "nome"=> "Verê",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128625,
              "nome"=> "Alto Paraíso",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128633,
              "nome"=> "Doutor Ulysses",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128658,
              "nome"=> "Virmond",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128708,
              "nome"=> "Vitorino",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4128807,
              "nome"=> "Xambrê",
              "estadobrasil_id"=> 41
            ],
            [
              "id"=> 4200051,
              "nome"=> "Abdon Batista",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200101,
              "nome"=> "Abelardo Luz",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200200,
              "nome"=> "Agrolândia",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200309,
              "nome"=> "Agronômica",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200408,
              "nome"=> "Água Doce",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200507,
              "nome"=> "Águas de Chapecó",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200556,
              "nome"=> "Águas Frias",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200606,
              "nome"=> "Águas Mornas",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200705,
              "nome"=> "Alfredo Wagner",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200754,
              "nome"=> "Alto Bela Vista",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200804,
              "nome"=> "Anchieta",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4200903,
              "nome"=> "Angelina",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201000,
              "nome"=> "Anita Garibaldi",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201109,
              "nome"=> "Anitápolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201208,
              "nome"=> "Antônio Carlos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201257,
              "nome"=> "Apiúna",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201273,
              "nome"=> "Arabutã",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201307,
              "nome"=> "Araquari",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201406,
              "nome"=> "Araranguá",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201505,
              "nome"=> "Armazém",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201604,
              "nome"=> "Arroio Trinta",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201653,
              "nome"=> "Arvoredo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201703,
              "nome"=> "Ascurra",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201802,
              "nome"=> "Atalanta",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201901,
              "nome"=> "Aurora",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4201950,
              "nome"=> "Balneário Arroio do Silva",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202008,
              "nome"=> "Balneário Camboriú",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202057,
              "nome"=> "Balneário Barra do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202073,
              "nome"=> "Balneário Gaivota",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202081,
              "nome"=> "Bandeirante",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202099,
              "nome"=> "Barra Bonita",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202107,
              "nome"=> "Barra Velha",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202131,
              "nome"=> "Bela Vista do Toldo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202156,
              "nome"=> "Belmonte",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202206,
              "nome"=> "Benedito Novo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202305,
              "nome"=> "Biguaçu",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202404,
              "nome"=> "Blumenau",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202438,
              "nome"=> "Bocaina do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202453,
              "nome"=> "Bombinhas",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202503,
              "nome"=> "Bom Jardim da Serra",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202537,
              "nome"=> "Bom Jesus",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202578,
              "nome"=> "Bom Jesus do Oeste",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202602,
              "nome"=> "Bom Retiro",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202701,
              "nome"=> "Botuverá",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202800,
              "nome"=> "Braço do Norte",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202859,
              "nome"=> "Braço do Trombudo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202875,
              "nome"=> "Brunópolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4202909,
              "nome"=> "Brusque",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203006,
              "nome"=> "Caçador",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203105,
              "nome"=> "Caibi",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203154,
              "nome"=> "Calmon",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203204,
              "nome"=> "Camboriú",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203253,
              "nome"=> "Capão Alto",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203303,
              "nome"=> "Campo Alegre",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203402,
              "nome"=> "Campo Belo do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203501,
              "nome"=> "Campo Erê",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203600,
              "nome"=> "Campos Novos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203709,
              "nome"=> "Canelinha",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203808,
              "nome"=> "Canoinhas",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203907,
              "nome"=> "Capinzal",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4203956,
              "nome"=> "Capivari de Baixo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204004,
              "nome"=> "Catanduvas",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204103,
              "nome"=> "Caxambu do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204152,
              "nome"=> "Celso Ramos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204178,
              "nome"=> "Cerro Negro",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204194,
              "nome"=> "Chapadão do Lageado",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204202,
              "nome"=> "Chapecó",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204251,
              "nome"=> "Cocal do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204301,
              "nome"=> "Concórdia",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204350,
              "nome"=> "Cordilheira Alta",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204400,
              "nome"=> "Coronel Freitas",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204459,
              "nome"=> "Coronel Martins",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204509,
              "nome"=> "Corupá",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204558,
              "nome"=> "Correia Pinto",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204608,
              "nome"=> "Criciúma",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204707,
              "nome"=> "Cunha Porã",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204756,
              "nome"=> "Cunhataí",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204806,
              "nome"=> "Curitibanos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4204905,
              "nome"=> "Descanso",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205001,
              "nome"=> "Dionísio Cerqueira",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205100,
              "nome"=> "Dona Emma",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205159,
              "nome"=> "Doutor Pedrinho",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205175,
              "nome"=> "Entre Rios",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205191,
              "nome"=> "Ermo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205209,
              "nome"=> "Erval Velho",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205308,
              "nome"=> "Faxinal dos Guedes",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205357,
              "nome"=> "Flor do Sertão",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205407,
              "nome"=> "Florianópolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205431,
              "nome"=> "Formosa do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205456,
              "nome"=> "Forquilhinha",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205506,
              "nome"=> "Fraiburgo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205555,
              "nome"=> "Frei Rogério",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205605,
              "nome"=> "Galvão",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205704,
              "nome"=> "Garopaba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205803,
              "nome"=> "Garuva",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4205902,
              "nome"=> "Gaspar",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206009,
              "nome"=> "Governador Celso Ramos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206108,
              "nome"=> "Grão Pará",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206207,
              "nome"=> "Gravatal",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206306,
              "nome"=> "Guabiruba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206405,
              "nome"=> "Guaraciaba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206504,
              "nome"=> "Guaramirim",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206603,
              "nome"=> "Guarujá do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206652,
              "nome"=> "Guatambú",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206702,
              "nome"=> "Herval d`Oeste",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206751,
              "nome"=> "Ibiam",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206801,
              "nome"=> "Ibicaré",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4206900,
              "nome"=> "Ibirama",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207007,
              "nome"=> "Içara",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207106,
              "nome"=> "Ilhota",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207205,
              "nome"=> "Imaruí",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207304,
              "nome"=> "Imbituba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207403,
              "nome"=> "Imbuia",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207502,
              "nome"=> "Indaial",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207577,
              "nome"=> "Iomerê",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207601,
              "nome"=> "Ipira",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207650,
              "nome"=> "Iporã do Oeste",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207684,
              "nome"=> "Ipuaçu",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207700,
              "nome"=> "Ipumirim",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207759,
              "nome"=> "Iraceminha",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207809,
              "nome"=> "Irani",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207858,
              "nome"=> "Irati",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4207908,
              "nome"=> "Irineópolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208005,
              "nome"=> "Itá",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208104,
              "nome"=> "Itaiópolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208203,
              "nome"=> "Itajaí",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208302,
              "nome"=> "Itapema",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208401,
              "nome"=> "Itapiranga",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208450,
              "nome"=> "Itapoá",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208500,
              "nome"=> "Ituporanga",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208609,
              "nome"=> "Jaborá",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208708,
              "nome"=> "Jacinto Machado",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208807,
              "nome"=> "Jaguaruna",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208906,
              "nome"=> "Jaraguá do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4208955,
              "nome"=> "Jardinópolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209003,
              "nome"=> "Joaçaba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209102,
              "nome"=> "Joinville",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209151,
              "nome"=> "José Boiteux",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209177,
              "nome"=> "Jupiá",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209201,
              "nome"=> "Lacerdópolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209300,
              "nome"=> "Lages",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209409,
              "nome"=> "Laguna",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209458,
              "nome"=> "Lajeado Grande",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209508,
              "nome"=> "Laurentino",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209607,
              "nome"=> "Lauro Muller",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209706,
              "nome"=> "Lebon Régis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209805,
              "nome"=> "Leoberto Leal",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209854,
              "nome"=> "Lindóia do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4209904,
              "nome"=> "Lontras",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210001,
              "nome"=> "Luiz Alves",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210035,
              "nome"=> "Luzerna",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210050,
              "nome"=> "Macieira",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210100,
              "nome"=> "Mafra",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210209,
              "nome"=> "Major Gercino",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210308,
              "nome"=> "Major Vieira",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210407,
              "nome"=> "Maracajá",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210506,
              "nome"=> "Maravilha",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210555,
              "nome"=> "Marema",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210605,
              "nome"=> "Massaranduba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210704,
              "nome"=> "Matos Costa",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210803,
              "nome"=> "Meleiro",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210852,
              "nome"=> "Mirim Doce",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4210902,
              "nome"=> "Modelo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211009,
              "nome"=> "Mondaí",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211058,
              "nome"=> "Monte Carlo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211108,
              "nome"=> "Monte Castelo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211207,
              "nome"=> "Morro da Fumaça",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211256,
              "nome"=> "Morro Grande",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211306,
              "nome"=> "Navegantes",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211405,
              "nome"=> "Nova Erechim",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211454,
              "nome"=> "Nova Itaberaba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211504,
              "nome"=> "Nova Trento",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211603,
              "nome"=> "Nova Veneza",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211652,
              "nome"=> "Novo Horizonte",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211702,
              "nome"=> "Orleans",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211751,
              "nome"=> "Otacílio Costa",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211801,
              "nome"=> "Ouro",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211850,
              "nome"=> "Ouro Verde",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211876,
              "nome"=> "Paial",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211892,
              "nome"=> "Painel",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4211900,
              "nome"=> "Palhoça",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212007,
              "nome"=> "Palma Sola",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212056,
              "nome"=> "Palmeira",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212106,
              "nome"=> "Palmitos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212205,
              "nome"=> "Papanduva",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212239,
              "nome"=> "Paraíso",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212254,
              "nome"=> "Passo de Torres",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212270,
              "nome"=> "Passos Maia",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212304,
              "nome"=> "Paulo Lopes",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212403,
              "nome"=> "Pedras Grandes",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212502,
              "nome"=> "Penha",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212601,
              "nome"=> "Peritiba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212650,
              "nome"=> "Pescaria Brava",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212700,
              "nome"=> "Petrolândia",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212809,
              "nome"=> "Balneário Piçarras",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4212908,
              "nome"=> "Pinhalzinho",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213005,
              "nome"=> "Pinheiro Preto",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213104,
              "nome"=> "Piratuba",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213153,
              "nome"=> "Planalto Alegre",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213203,
              "nome"=> "Pomerode",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213302,
              "nome"=> "Ponte Alta",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213351,
              "nome"=> "Ponte Alta do Norte",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213401,
              "nome"=> "Ponte Serrada",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213500,
              "nome"=> "Porto Belo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213609,
              "nome"=> "Porto União",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213708,
              "nome"=> "Pouso Redondo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213807,
              "nome"=> "Praia Grande",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4213906,
              "nome"=> "Presidente Castello Branco",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214003,
              "nome"=> "Presidente Getúlio",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214102,
              "nome"=> "Presidente Nereu",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214151,
              "nome"=> "Princesa",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214201,
              "nome"=> "Quilombo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214300,
              "nome"=> "Rancho Queimado",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214409,
              "nome"=> "Rio das Antas",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214508,
              "nome"=> "Rio do Campo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214607,
              "nome"=> "Rio do Oeste",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214706,
              "nome"=> "Rio dos Cedros",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214805,
              "nome"=> "Rio do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4214904,
              "nome"=> "Rio Fortuna",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215000,
              "nome"=> "Rio Negrinho",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215059,
              "nome"=> "Rio Rufino",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215075,
              "nome"=> "Riqueza",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215109,
              "nome"=> "Rodeio",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215208,
              "nome"=> "Romelândia",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215307,
              "nome"=> "Salete",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215356,
              "nome"=> "Saltinho",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215406,
              "nome"=> "Salto Veloso",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215455,
              "nome"=> "Sangão",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215505,
              "nome"=> "Santa Cecília",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215554,
              "nome"=> "Santa Helena",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215604,
              "nome"=> "Santa Rosa de Lima",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215653,
              "nome"=> "Santa Rosa do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215679,
              "nome"=> "Santa Terezinha",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215687,
              "nome"=> "Santa Terezinha do Progresso",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215695,
              "nome"=> "Santiago do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215703,
              "nome"=> "Santo Amaro da Imperatriz",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215752,
              "nome"=> "São Bernardino",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215802,
              "nome"=> "São Bento do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4215901,
              "nome"=> "São Bonifácio",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216008,
              "nome"=> "São Carlos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216057,
              "nome"=> "São Cristovão do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216107,
              "nome"=> "São Domingos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216206,
              "nome"=> "São Francisco do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216255,
              "nome"=> "São João do Oeste",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216305,
              "nome"=> "São João Batista",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216354,
              "nome"=> "São João do Itaperiú",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216404,
              "nome"=> "São João do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216503,
              "nome"=> "São Joaquim",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216602,
              "nome"=> "São José",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216701,
              "nome"=> "São José do Cedro",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216800,
              "nome"=> "São José do Cerrito",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4216909,
              "nome"=> "São Lourenço do Oeste",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217006,
              "nome"=> "São Ludgero",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217105,
              "nome"=> "São Martinho",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217154,
              "nome"=> "São Miguel da Boa Vista",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217204,
              "nome"=> "São Miguel do Oeste",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217253,
              "nome"=> "São Pedro de Alcântara",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217303,
              "nome"=> "Saudades",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217402,
              "nome"=> "Schroeder",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217501,
              "nome"=> "Seara",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217550,
              "nome"=> "Serra Alta",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217600,
              "nome"=> "Siderópolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217709,
              "nome"=> "Sombrio",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217758,
              "nome"=> "Sul Brasil",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217808,
              "nome"=> "Taió",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217907,
              "nome"=> "Tangará",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4217956,
              "nome"=> "Tigrinhos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218004,
              "nome"=> "Tijucas",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218103,
              "nome"=> "Timbé do Sul",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218202,
              "nome"=> "Timbó",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218251,
              "nome"=> "Timbó Grande",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218301,
              "nome"=> "Três Barras",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218350,
              "nome"=> "Treviso",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218400,
              "nome"=> "Treze de Maio",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218509,
              "nome"=> "Treze Tílias",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218608,
              "nome"=> "Trombudo Central",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218707,
              "nome"=> "Tubarão",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218756,
              "nome"=> "Tunápolis",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218806,
              "nome"=> "Turvo",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218855,
              "nome"=> "União do Oeste",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218905,
              "nome"=> "Urubici",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4218954,
              "nome"=> "Urupema",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219002,
              "nome"=> "Urussanga",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219101,
              "nome"=> "Vargeão",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219150,
              "nome"=> "Vargem",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219176,
              "nome"=> "Vargem Bonita",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219200,
              "nome"=> "Vidal Ramos",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219309,
              "nome"=> "Videira",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219358,
              "nome"=> "Vitor Meireles",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219408,
              "nome"=> "Witmarsum",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219507,
              "nome"=> "Xanxerê",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219606,
              "nome"=> "Xavantina",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219705,
              "nome"=> "Xaxim",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4219853,
              "nome"=> "Zortéa",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4220000,
              "nome"=> "Balneário Rincão",
              "estadobrasil_id"=> 42
            ],
            [
              "id"=> 4300034,
              "nome"=> "Aceguá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300059,
              "nome"=> "Água Santa",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300109,
              "nome"=> "Agudo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300208,
              "nome"=> "Ajuricaba",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300307,
              "nome"=> "Alecrim",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300406,
              "nome"=> "Alegrete",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300455,
              "nome"=> "Alegria",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300471,
              "nome"=> "Almirante Tamandaré do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300505,
              "nome"=> "Alpestre",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300554,
              "nome"=> "Alto Alegre",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300570,
              "nome"=> "Alto Feliz",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300604,
              "nome"=> "Alvorada",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300638,
              "nome"=> "Amaral Ferrador",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300646,
              "nome"=> "Ametista do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300661,
              "nome"=> "André da Rocha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300703,
              "nome"=> "Anta Gorda",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300802,
              "nome"=> "Antônio Prado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300851,
              "nome"=> "Arambaré",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300877,
              "nome"=> "Araricá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4300901,
              "nome"=> "Aratiba",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301008,
              "nome"=> "Arroio do Meio",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301057,
              "nome"=> "Arroio do Sal",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301073,
              "nome"=> "Arroio do Padre",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301107,
              "nome"=> "Arroio dos Ratos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301206,
              "nome"=> "Arroio do Tigre",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301305,
              "nome"=> "Arroio Grande",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301404,
              "nome"=> "Arvorezinha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301503,
              "nome"=> "Augusto Pestana",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301552,
              "nome"=> "Áurea",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301602,
              "nome"=> "Bagé",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301636,
              "nome"=> "Balneário Pinhal",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301651,
              "nome"=> "Barão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301701,
              "nome"=> "Barão de Cotegipe",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301750,
              "nome"=> "Barão do Triunfo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301800,
              "nome"=> "Barracão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301859,
              "nome"=> "Barra do Guarita",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301875,
              "nome"=> "Barra do Quaraí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301909,
              "nome"=> "Barra do Ribeiro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301925,
              "nome"=> "Barra do Rio Azul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4301958,
              "nome"=> "Barra Funda",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302006,
              "nome"=> "Barros Cassal",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302055,
              "nome"=> "Benjamin Constant do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302105,
              "nome"=> "Bento Gonçalves",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302154,
              "nome"=> "Boa Vista das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302204,
              "nome"=> "Boa Vista do Buricá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302220,
              "nome"=> "Boa Vista do Cadeado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302238,
              "nome"=> "Boa Vista do Incra",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302253,
              "nome"=> "Boa Vista do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302303,
              "nome"=> "Bom Jesus",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302352,
              "nome"=> "Bom Princípio",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302378,
              "nome"=> "Bom Progresso",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302402,
              "nome"=> "Bom Retiro do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302451,
              "nome"=> "Boqueirão do Leão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302501,
              "nome"=> "Bossoroca",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302584,
              "nome"=> "Bozano",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302600,
              "nome"=> "Braga",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302659,
              "nome"=> "Brochier",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302709,
              "nome"=> "Butiá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302808,
              "nome"=> "Caçapava do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4302907,
              "nome"=> "Cacequi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303004,
              "nome"=> "Cachoeira do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303103,
              "nome"=> "Cachoeirinha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303202,
              "nome"=> "Cacique Doble",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303301,
              "nome"=> "Caibaté",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303400,
              "nome"=> "Caiçara",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303509,
              "nome"=> "Camaquã",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303558,
              "nome"=> "Camargo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303608,
              "nome"=> "Cambará do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303673,
              "nome"=> "Campestre da Serra",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303707,
              "nome"=> "Campina das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303806,
              "nome"=> "Campinas do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4303905,
              "nome"=> "Campo Bom",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304002,
              "nome"=> "Campo Novo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304101,
              "nome"=> "Campos Borges",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304200,
              "nome"=> "Candelária",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304309,
              "nome"=> "Cândido Godói",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304358,
              "nome"=> "Candiota",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304408,
              "nome"=> "Canela",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304507,
              "nome"=> "Canguçu",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304606,
              "nome"=> "Canoas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304614,
              "nome"=> "Canudos do Vale",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304622,
              "nome"=> "Capão Bonito do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304630,
              "nome"=> "Capão da Canoa",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304655,
              "nome"=> "Capão do Cipó",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304663,
              "nome"=> "Capão do Leão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304671,
              "nome"=> "Capivari do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304689,
              "nome"=> "Capela de Santana",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304697,
              "nome"=> "Capitão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304705,
              "nome"=> "Carazinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304713,
              "nome"=> "Caraá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304804,
              "nome"=> "Carlos Barbosa",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304853,
              "nome"=> "Carlos Gomes",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304903,
              "nome"=> "Casca",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4304952,
              "nome"=> "Caseiros",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305009,
              "nome"=> "Catuípe",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305108,
              "nome"=> "Caxias do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305116,
              "nome"=> "Centenário",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305124,
              "nome"=> "Cerrito",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305132,
              "nome"=> "Cerro Branco",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305157,
              "nome"=> "Cerro Grande",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305173,
              "nome"=> "Cerro Grande do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305207,
              "nome"=> "Cerro Largo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305306,
              "nome"=> "Chapada",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305355,
              "nome"=> "Charqueadas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305371,
              "nome"=> "Charrua",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305405,
              "nome"=> "Chiapetta",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305439,
              "nome"=> "Chuí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305447,
              "nome"=> "Chuvisca",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305454,
              "nome"=> "Cidreira",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305504,
              "nome"=> "Ciríaco",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305587,
              "nome"=> "Colinas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305603,
              "nome"=> "Colorado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305702,
              "nome"=> "Condor",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305801,
              "nome"=> "Constantina",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305835,
              "nome"=> "Coqueiro Baixo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305850,
              "nome"=> "Coqueiros do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305871,
              "nome"=> "Coronel Barros",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305900,
              "nome"=> "Coronel Bicaco",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305934,
              "nome"=> "Coronel Pilar",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305959,
              "nome"=> "Cotiporã",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4305975,
              "nome"=> "Coxilha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306007,
              "nome"=> "Crissiumal",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306056,
              "nome"=> "Cristal",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306072,
              "nome"=> "Cristal do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306106,
              "nome"=> "Cruz Alta",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306130,
              "nome"=> "Cruzaltense",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306205,
              "nome"=> "Cruzeiro do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306304,
              "nome"=> "David Canabarro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306320,
              "nome"=> "Derrubadas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306353,
              "nome"=> "Dezesseis de Novembro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306379,
              "nome"=> "Dilermando de Aguiar",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306403,
              "nome"=> "Dois Irmãos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306429,
              "nome"=> "Dois Irmãos das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306452,
              "nome"=> "Dois Lajeados",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306502,
              "nome"=> "Dom Feliciano",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306551,
              "nome"=> "Dom Pedro de Alcântara",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306601,
              "nome"=> "Dom Pedrito",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306700,
              "nome"=> "Dona Francisca",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306734,
              "nome"=> "Doutor Maurício Cardoso",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306759,
              "nome"=> "Doutor Ricardo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306767,
              "nome"=> "Eldorado do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306809,
              "nome"=> "Encantado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306908,
              "nome"=> "Encruzilhada do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306924,
              "nome"=> "Engenho Velho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306932,
              "nome"=> "Entre-Ijuís",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306957,
              "nome"=> "Entre Rios do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4306973,
              "nome"=> "Erebango",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307005,
              "nome"=> "Erechim",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307054,
              "nome"=> "Ernestina",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307104,
              "nome"=> "Herval",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307203,
              "nome"=> "Erval Grande",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307302,
              "nome"=> "Erval Seco",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307401,
              "nome"=> "Esmeralda",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307450,
              "nome"=> "Esperança do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307500,
              "nome"=> "Espumoso",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307559,
              "nome"=> "Estação",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307609,
              "nome"=> "Estância Velha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307708,
              "nome"=> "Esteio",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307807,
              "nome"=> "Estrela",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307815,
              "nome"=> "Estrela Velha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307831,
              "nome"=> "Eugênio de Castro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307864,
              "nome"=> "Fagundes Varela",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4307906,
              "nome"=> "Farroupilha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308003,
              "nome"=> "Faxinal do Soturno",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308052,
              "nome"=> "Faxinalzinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308078,
              "nome"=> "Fazenda Vilanova",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308102,
              "nome"=> "Feliz",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308201,
              "nome"=> "Flores da Cunha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308250,
              "nome"=> "Floriano Peixoto",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308300,
              "nome"=> "Fontoura Xavier",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308409,
              "nome"=> "Formigueiro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308433,
              "nome"=> "Forquetinha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308458,
              "nome"=> "Fortaleza dos Valos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308508,
              "nome"=> "Frederico Westphalen",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308607,
              "nome"=> "Garibaldi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308656,
              "nome"=> "Garruchos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308706,
              "nome"=> "Gaurama",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308805,
              "nome"=> "General Câmara",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308854,
              "nome"=> "Gentil",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4308904,
              "nome"=> "Getúlio Vargas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309001,
              "nome"=> "Giruá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309050,
              "nome"=> "Glorinha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309100,
              "nome"=> "Gramado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309126,
              "nome"=> "Gramado dos Loureiros",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309159,
              "nome"=> "Gramado Xavier",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309209,
              "nome"=> "Gravataí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309258,
              "nome"=> "Guabiju",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309308,
              "nome"=> "Guaíba",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309407,
              "nome"=> "Guaporé",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309506,
              "nome"=> "Guarani das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309555,
              "nome"=> "Harmonia",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309571,
              "nome"=> "Herveiras",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309605,
              "nome"=> "Horizontina",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309654,
              "nome"=> "Hulha Negra",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309704,
              "nome"=> "Humaitá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309753,
              "nome"=> "Ibarama",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309803,
              "nome"=> "Ibiaçá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309902,
              "nome"=> "Ibiraiaras",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4309951,
              "nome"=> "Ibirapuitã",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310009,
              "nome"=> "Ibirubá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310108,
              "nome"=> "Igrejinha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310207,
              "nome"=> "Ijuí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310306,
              "nome"=> "Ilópolis",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310330,
              "nome"=> "Imbé",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310363,
              "nome"=> "Imigrante",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310405,
              "nome"=> "Independência",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310413,
              "nome"=> "Inhacorá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310439,
              "nome"=> "Ipê",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310462,
              "nome"=> "Ipiranga do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310504,
              "nome"=> "Iraí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310538,
              "nome"=> "Itaara",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310553,
              "nome"=> "Itacurubi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310579,
              "nome"=> "Itapuca",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310603,
              "nome"=> "Itaqui",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310652,
              "nome"=> "Itati",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310702,
              "nome"=> "Itatiba do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310751,
              "nome"=> "Ivorá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310801,
              "nome"=> "Ivoti",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310850,
              "nome"=> "Jaboticaba",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310876,
              "nome"=> "Jacuizinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4310900,
              "nome"=> "Jacutinga",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311007,
              "nome"=> "Jaguarão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311106,
              "nome"=> "Jaguari",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311122,
              "nome"=> "Jaquirana",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311130,
              "nome"=> "Jari",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311155,
              "nome"=> "Jóia",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311205,
              "nome"=> "Júlio de Castilhos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311239,
              "nome"=> "Lagoa Bonita do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311254,
              "nome"=> "Lagoão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311270,
              "nome"=> "Lagoa dos Três Cantos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311304,
              "nome"=> "Lagoa Vermelha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311403,
              "nome"=> "Lajeado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311429,
              "nome"=> "Lajeado do Bugre",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311502,
              "nome"=> "Lavras do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311601,
              "nome"=> "Liberato Salzano",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311627,
              "nome"=> "Lindolfo Collor",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311643,
              "nome"=> "Linha Nova",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311700,
              "nome"=> "Machadinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311718,
              "nome"=> "Maçambara",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311734,
              "nome"=> "Mampituba",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311759,
              "nome"=> "Manoel Viana",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311775,
              "nome"=> "Maquiné",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311791,
              "nome"=> "Maratá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311809,
              "nome"=> "Marau",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311908,
              "nome"=> "Marcelino Ramos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4311981,
              "nome"=> "Mariana Pimentel",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312005,
              "nome"=> "Mariano Moro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312054,
              "nome"=> "Marques de Souza",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312104,
              "nome"=> "Mata",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312138,
              "nome"=> "Mato Castelhano",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312153,
              "nome"=> "Mato Leitão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312179,
              "nome"=> "Mato Queimado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312203,
              "nome"=> "Maximiliano de Almeida",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312252,
              "nome"=> "Minas do Leão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312302,
              "nome"=> "Miraguaí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312351,
              "nome"=> "Montauri",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312377,
              "nome"=> "Monte Alegre dos Campos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312385,
              "nome"=> "Monte Belo do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312401,
              "nome"=> "Montenegro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312427,
              "nome"=> "Mormaço",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312443,
              "nome"=> "Morrinhos do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312450,
              "nome"=> "Morro Redondo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312476,
              "nome"=> "Morro Reuter",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312500,
              "nome"=> "Mostardas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312609,
              "nome"=> "Muçum",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312617,
              "nome"=> "Muitos Capões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312625,
              "nome"=> "Muliterno",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312658,
              "nome"=> "Não-Me-Toque",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312674,
              "nome"=> "Nicolau Vergueiro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312708,
              "nome"=> "Nonoai",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312757,
              "nome"=> "Nova Alvorada",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312807,
              "nome"=> "Nova Araçá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312906,
              "nome"=> "Nova Bassano",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4312955,
              "nome"=> "Nova Boa Vista",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313003,
              "nome"=> "Nova Bréscia",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313011,
              "nome"=> "Nova Candelária",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313037,
              "nome"=> "Nova Esperança do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313060,
              "nome"=> "Nova Hartz",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313086,
              "nome"=> "Nova Pádua",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313102,
              "nome"=> "Nova Palma",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313201,
              "nome"=> "Nova Petrópolis",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313300,
              "nome"=> "Nova Prata",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313334,
              "nome"=> "Nova Ramada",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313359,
              "nome"=> "Nova Roma do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313375,
              "nome"=> "Nova Santa Rita",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313391,
              "nome"=> "Novo Cabrais",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313409,
              "nome"=> "Novo Hamburgo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313425,
              "nome"=> "Novo Machado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313441,
              "nome"=> "Novo Tiradentes",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313466,
              "nome"=> "Novo Xingu",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313490,
              "nome"=> "Novo Barreiro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313508,
              "nome"=> "Osório",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313607,
              "nome"=> "Paim Filho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313656,
              "nome"=> "Palmares do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313706,
              "nome"=> "Palmeira das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313805,
              "nome"=> "Palmitinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313904,
              "nome"=> "Panambi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4313953,
              "nome"=> "Pantano Grande",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314001,
              "nome"=> "Paraí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314027,
              "nome"=> "Paraíso do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314035,
              "nome"=> "Pareci Novo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314050,
              "nome"=> "Parobé",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314068,
              "nome"=> "Passa Sete",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314076,
              "nome"=> "Passo do Sobrado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314100,
              "nome"=> "Passo Fundo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314134,
              "nome"=> "Paulo Bento",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314159,
              "nome"=> "Paverama",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314175,
              "nome"=> "Pedras Altas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314209,
              "nome"=> "Pedro Osório",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314308,
              "nome"=> "Pejuçara",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314407,
              "nome"=> "Pelotas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314423,
              "nome"=> "Picada Café",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314456,
              "nome"=> "Pinhal",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314464,
              "nome"=> "Pinhal da Serra",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314472,
              "nome"=> "Pinhal Grande",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314498,
              "nome"=> "Pinheirinho do Vale",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314506,
              "nome"=> "Pinheiro Machado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314548,
              "nome"=> "Pinto Bandeira",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314555,
              "nome"=> "Pirapó",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314605,
              "nome"=> "Piratini",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314704,
              "nome"=> "Planalto",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314753,
              "nome"=> "Poço das Antas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314779,
              "nome"=> "Pontão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314787,
              "nome"=> "Ponte Preta",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314803,
              "nome"=> "Portão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4314902,
              "nome"=> "Porto Alegre",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315008,
              "nome"=> "Porto Lucena",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315057,
              "nome"=> "Porto Mauá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315073,
              "nome"=> "Porto Vera Cruz",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315107,
              "nome"=> "Porto Xavier",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315131,
              "nome"=> "Pouso Novo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315149,
              "nome"=> "Presidente Lucena",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315156,
              "nome"=> "Progresso",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315172,
              "nome"=> "Protásio Alves",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315206,
              "nome"=> "Putinga",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315305,
              "nome"=> "Quaraí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315313,
              "nome"=> "Quatro Irmãos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315321,
              "nome"=> "Quevedos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315354,
              "nome"=> "Quinze de Novembro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315404,
              "nome"=> "Redentora",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315453,
              "nome"=> "Relvado",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315503,
              "nome"=> "Restinga Seca",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315552,
              "nome"=> "Rio dos Índios",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315602,
              "nome"=> "Rio Grande",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315701,
              "nome"=> "Rio Pardo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315750,
              "nome"=> "Riozinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315800,
              "nome"=> "Roca Sales",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315909,
              "nome"=> "Rodeio Bonito",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4315958,
              "nome"=> "Rolador",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316006,
              "nome"=> "Rolante",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316105,
              "nome"=> "Ronda Alta",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316204,
              "nome"=> "Rondinha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316303,
              "nome"=> "Roque Gonzales",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316402,
              "nome"=> "Rosário do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316428,
              "nome"=> "Sagrada Família",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316436,
              "nome"=> "Saldanha Marinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316451,
              "nome"=> "Salto do Jacuí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316477,
              "nome"=> "Salvador das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316501,
              "nome"=> "Salvador do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316600,
              "nome"=> "Sananduva",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316709,
              "nome"=> "Santa Bárbara do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316733,
              "nome"=> "Santa Cecília do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316758,
              "nome"=> "Santa Clara do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316808,
              "nome"=> "Santa Cruz do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316907,
              "nome"=> "Santa Maria",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316956,
              "nome"=> "Santa Maria do Herval",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4316972,
              "nome"=> "Santa Margarida do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317004,
              "nome"=> "Santana da Boa Vista",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317103,
              "nome"=> "Santana do Livramento",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317202,
              "nome"=> "Santa Rosa",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317251,
              "nome"=> "Santa Tereza",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317301,
              "nome"=> "Santa Vitória do Palmar",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317400,
              "nome"=> "Santiago",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317509,
              "nome"=> "Santo Ângelo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317558,
              "nome"=> "Santo Antônio do Palma",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317608,
              "nome"=> "Santo Antônio da Patrulha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317707,
              "nome"=> "Santo Antônio das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317756,
              "nome"=> "Santo Antônio do Planalto",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317806,
              "nome"=> "Santo Augusto",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317905,
              "nome"=> "Santo Cristo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4317954,
              "nome"=> "Santo Expedito do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318002,
              "nome"=> "São Borja",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318051,
              "nome"=> "São Domingos do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318101,
              "nome"=> "São Francisco de Assis",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318200,
              "nome"=> "São Francisco de Paula",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318309,
              "nome"=> "São Gabriel",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318408,
              "nome"=> "São Jerônimo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318424,
              "nome"=> "São João da Urtiga",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318432,
              "nome"=> "São João do Polêsine",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318440,
              "nome"=> "São Jorge",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318457,
              "nome"=> "São José das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318465,
              "nome"=> "São José do Herval",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318481,
              "nome"=> "São José do Hortêncio",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318499,
              "nome"=> "São José do Inhacorá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318507,
              "nome"=> "São José do Norte",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318606,
              "nome"=> "São José do Ouro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318614,
              "nome"=> "São José do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318622,
              "nome"=> "São José dos Ausentes",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318705,
              "nome"=> "São Leopoldo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318804,
              "nome"=> "São Lourenço do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4318903,
              "nome"=> "São Luiz Gonzaga",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319000,
              "nome"=> "São Marcos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319109,
              "nome"=> "São Martinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319125,
              "nome"=> "São Martinho da Serra",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319158,
              "nome"=> "São Miguel das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319208,
              "nome"=> "São Nicolau",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319307,
              "nome"=> "São Paulo das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319356,
              "nome"=> "São Pedro da Serra",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319364,
              "nome"=> "São Pedro das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319372,
              "nome"=> "São Pedro do Butiá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319406,
              "nome"=> "São Pedro do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319505,
              "nome"=> "São Sebastião do Caí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319604,
              "nome"=> "São Sepé",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319703,
              "nome"=> "São Valentim",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319711,
              "nome"=> "São Valentim do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319737,
              "nome"=> "São Valério do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319752,
              "nome"=> "São Vendelino",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319802,
              "nome"=> "São Vicente do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4319901,
              "nome"=> "Sapiranga",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320008,
              "nome"=> "Sapucaia do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320107,
              "nome"=> "Sarandi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320206,
              "nome"=> "Seberi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320230,
              "nome"=> "Sede Nova",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320263,
              "nome"=> "Segredo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320305,
              "nome"=> "Selbach",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320321,
              "nome"=> "Senador Salgado Filho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320354,
              "nome"=> "Sentinela do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320404,
              "nome"=> "Serafina Corrêa",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320453,
              "nome"=> "Sério",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320503,
              "nome"=> "Sertão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320552,
              "nome"=> "Sertão Santana",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320578,
              "nome"=> "Sete de Setembro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320602,
              "nome"=> "Severiano de Almeida",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320651,
              "nome"=> "Silveira Martins",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320677,
              "nome"=> "Sinimbu",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320701,
              "nome"=> "Sobradinho",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320800,
              "nome"=> "Soledade",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320859,
              "nome"=> "Tabaí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4320909,
              "nome"=> "Tapejara",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321006,
              "nome"=> "Tapera",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321105,
              "nome"=> "Tapes",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321204,
              "nome"=> "Taquara",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321303,
              "nome"=> "Taquari",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321329,
              "nome"=> "Taquaruçu do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321352,
              "nome"=> "Tavares",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321402,
              "nome"=> "Tenente Portela",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321436,
              "nome"=> "Terra de Areia",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321451,
              "nome"=> "Teutônia",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321469,
              "nome"=> "Tio Hugo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321477,
              "nome"=> "Tiradentes do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321493,
              "nome"=> "Toropi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321501,
              "nome"=> "Torres",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321600,
              "nome"=> "Tramandaí",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321626,
              "nome"=> "Travesseiro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321634,
              "nome"=> "Três Arroios",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321667,
              "nome"=> "Três Cachoeiras",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321709,
              "nome"=> "Três Coroas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321808,
              "nome"=> "Três de Maio",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321832,
              "nome"=> "Três Forquilhas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321857,
              "nome"=> "Três Palmeiras",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321907,
              "nome"=> "Três Passos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4321956,
              "nome"=> "Trindade do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322004,
              "nome"=> "Triunfo",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322103,
              "nome"=> "Tucunduva",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322152,
              "nome"=> "Tunas",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322186,
              "nome"=> "Tupanci do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322202,
              "nome"=> "Tupanciretã",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322251,
              "nome"=> "Tupandi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322301,
              "nome"=> "Tuparendi",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322327,
              "nome"=> "Turuçu",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322343,
              "nome"=> "Ubiretama",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322350,
              "nome"=> "União da Serra",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322376,
              "nome"=> "Unistalda",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322400,
              "nome"=> "Uruguaiana",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322509,
              "nome"=> "Vacaria",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322525,
              "nome"=> "Vale Verde",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322533,
              "nome"=> "Vale do Sol",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322541,
              "nome"=> "Vale Real",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322558,
              "nome"=> "Vanini",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322608,
              "nome"=> "Venâncio Aires",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322707,
              "nome"=> "Vera Cruz",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322806,
              "nome"=> "Veranópolis",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322855,
              "nome"=> "Vespasiano Correa",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4322905,
              "nome"=> "Viadutos",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323002,
              "nome"=> "Viamão",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323101,
              "nome"=> "Vicente Dutra",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323200,
              "nome"=> "Victor Graeff",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323309,
              "nome"=> "Vila Flores",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323358,
              "nome"=> "Vila Lângaro",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323408,
              "nome"=> "Vila Maria",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323457,
              "nome"=> "Vila Nova do Sul",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323507,
              "nome"=> "Vista Alegre",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323606,
              "nome"=> "Vista Alegre do Prata",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323705,
              "nome"=> "Vista Gaúcha",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323754,
              "nome"=> "Vitória das Missões",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323770,
              "nome"=> "Westfália",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 4323804,
              "nome"=> "Xangri-lá",
              "estadobrasil_id"=> 43
            ],
            [
              "id"=> 5000203,
              "nome"=> "Água Clara",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5000252,
              "nome"=> "Alcinópolis",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5000609,
              "nome"=> "Amambai",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5000708,
              "nome"=> "Anastácio",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5000807,
              "nome"=> "Anaurilândia",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5000856,
              "nome"=> "Angélica",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5000906,
              "nome"=> "Antônio João",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5001003,
              "nome"=> "Aparecida do Taboado",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5001102,
              "nome"=> "Aquidauana",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5001243,
              "nome"=> "Aral Moreira",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5001508,
              "nome"=> "Bandeirantes",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5001904,
              "nome"=> "Bataguassu",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002001,
              "nome"=> "Batayporã",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002100,
              "nome"=> "Bela Vista",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002159,
              "nome"=> "Bodoquena",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002209,
              "nome"=> "Bonito",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002308,
              "nome"=> "Brasilândia",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002407,
              "nome"=> "Caarapó",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002605,
              "nome"=> "Camapuã",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002704,
              "nome"=> "Campo Grande",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002803,
              "nome"=> "Caracol",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002902,
              "nome"=> "Cassilândia",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5002951,
              "nome"=> "Chapadão do Sul",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003108,
              "nome"=> "Corguinho",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003157,
              "nome"=> "Coronel Sapucaia",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003207,
              "nome"=> "Corumbá",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003256,
              "nome"=> "Costa Rica",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003306,
              "nome"=> "Coxim",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003454,
              "nome"=> "Deodápolis",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003488,
              "nome"=> "Dois Irmãos do Buriti",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003504,
              "nome"=> "Douradina",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003702,
              "nome"=> "Dourados",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003751,
              "nome"=> "Eldorado",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003801,
              "nome"=> "Fátima do Sul",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5003900,
              "nome"=> "Figueirão",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004007,
              "nome"=> "Glória de Dourados",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004106,
              "nome"=> "Guia Lopes da Laguna",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004304,
              "nome"=> "Iguatemi",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004403,
              "nome"=> "Inocência",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004502,
              "nome"=> "Itaporã",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004601,
              "nome"=> "Itaquiraí",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004700,
              "nome"=> "Ivinhema",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004809,
              "nome"=> "Japorã",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5004908,
              "nome"=> "Jaraguari",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005004,
              "nome"=> "Jardim",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005103,
              "nome"=> "Jateí",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005152,
              "nome"=> "Juti",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005202,
              "nome"=> "Ladário",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005251,
              "nome"=> "Laguna Carapã",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005400,
              "nome"=> "Maracaju",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005608,
              "nome"=> "Miranda",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005681,
              "nome"=> "Mundo Novo",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005707,
              "nome"=> "Naviraí",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5005806,
              "nome"=> "Nioaque",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006002,
              "nome"=> "Nova Alvorada do Sul",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006200,
              "nome"=> "Nova Andradina",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006259,
              "nome"=> "Novo Horizonte do Sul",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006275,
              "nome"=> "Paraíso das Águas",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006309,
              "nome"=> "Paranaíba",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006358,
              "nome"=> "Paranhos",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006408,
              "nome"=> "Pedro Gomes",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006606,
              "nome"=> "Ponta Porã",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5006903,
              "nome"=> "Porto Murtinho",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007109,
              "nome"=> "Ribas do Rio Pardo",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007208,
              "nome"=> "Rio Brilhante",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007307,
              "nome"=> "Rio Negro",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007406,
              "nome"=> "Rio Verde de Mato Grosso",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007505,
              "nome"=> "Rochedo",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007554,
              "nome"=> "Santa Rita do Pardo",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007695,
              "nome"=> "São Gabriel do Oeste",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007703,
              "nome"=> "Sete Quedas",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007802,
              "nome"=> "Selvíria",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007901,
              "nome"=> "Sidrolândia",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007935,
              "nome"=> "Sonora",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007950,
              "nome"=> "Tacuru",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5007976,
              "nome"=> "Taquarussu",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5008008,
              "nome"=> "Terenos",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5008305,
              "nome"=> "Três Lagoas",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5008404,
              "nome"=> "Vicentina",
              "estadobrasil_id"=> 50
            ],
            [
              "id"=> 5100102,
              "nome"=> "Acorizal",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5100201,
              "nome"=> "Água Boa",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5100250,
              "nome"=> "Alta Floresta",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5100300,
              "nome"=> "Alto Araguaia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5100359,
              "nome"=> "Alto Boa Vista",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5100409,
              "nome"=> "Alto Garças",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5100508,
              "nome"=> "Alto Paraguai",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5100607,
              "nome"=> "Alto Taquari",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5100805,
              "nome"=> "Apiacás",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101001,
              "nome"=> "Araguaiana",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101209,
              "nome"=> "Araguainha",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101258,
              "nome"=> "Araputanga",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101308,
              "nome"=> "Arenápolis",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101407,
              "nome"=> "Aripuanã",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101605,
              "nome"=> "Barão de Melgaço",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101704,
              "nome"=> "Barra do Bugres",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101803,
              "nome"=> "Barra do Garças",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101852,
              "nome"=> "Bom Jesus do Araguaia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5101902,
              "nome"=> "Brasnorte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102504,
              "nome"=> "Cáceres",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102603,
              "nome"=> "Campinápolis",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102637,
              "nome"=> "Campo Novo do Parecis",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102678,
              "nome"=> "Campo Verde",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102686,
              "nome"=> "Campos de Júlio",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102694,
              "nome"=> "Canabrava do Norte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102702,
              "nome"=> "Canarana",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102793,
              "nome"=> "Carlinda",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5102850,
              "nome"=> "Castanheira",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103007,
              "nome"=> "Chapada dos Guimarães",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103056,
              "nome"=> "Cláudia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103106,
              "nome"=> "Cocalinho",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103205,
              "nome"=> "Colíder",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103254,
              "nome"=> "Colniza",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103304,
              "nome"=> "Comodoro",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103353,
              "nome"=> "Confresa",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103361,
              "nome"=> "Conquista d`Oeste",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103379,
              "nome"=> "Cotriguaçu",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103403,
              "nome"=> "Cuiabá",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103437,
              "nome"=> "Curvelândia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103452,
              "nome"=> "Denise",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103502,
              "nome"=> "Diamantino",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103601,
              "nome"=> "Dom Aquino",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103700,
              "nome"=> "Feliz Natal",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103809,
              "nome"=> "Figueirópolis d`Oeste",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103858,
              "nome"=> "Gaúcha do Norte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103908,
              "nome"=> "General Carneiro",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5103957,
              "nome"=> "Glória d`Oeste",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104104,
              "nome"=> "Guarantã do Norte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104203,
              "nome"=> "Guiratinga",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104500,
              "nome"=> "Indiavaí",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104526,
              "nome"=> "Ipiranga do Norte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104542,
              "nome"=> "Itanhangá",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104559,
              "nome"=> "Itaúba",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104609,
              "nome"=> "Itiquira",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104807,
              "nome"=> "Jaciara",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5104906,
              "nome"=> "Jangada",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105002,
              "nome"=> "Jauru",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105101,
              "nome"=> "Juara",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105150,
              "nome"=> "Juína",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105176,
              "nome"=> "Juruena",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105200,
              "nome"=> "Juscimeira",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105234,
              "nome"=> "Lambari d`Oeste",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105259,
              "nome"=> "Lucas do Rio Verde",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105309,
              "nome"=> "Luciára",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105507,
              "nome"=> "Vila Bela da Santíssima Trindade",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105580,
              "nome"=> "Marcelândia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105606,
              "nome"=> "Matupá",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105622,
              "nome"=> "Mirassol d`Oeste",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5105903,
              "nome"=> "Nobres",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106000,
              "nome"=> "Nortelândia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106109,
              "nome"=> "Nossa Senhora do Livramento",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106158,
              "nome"=> "Nova Bandeirantes",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106174,
              "nome"=> "Nova Nazaré",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106182,
              "nome"=> "Nova Lacerda",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106190,
              "nome"=> "Nova Santa Helena",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106208,
              "nome"=> "Nova Brasilândia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106216,
              "nome"=> "Nova Canaã do Norte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106224,
              "nome"=> "Nova Mutum",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106232,
              "nome"=> "Nova Olímpia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106240,
              "nome"=> "Nova Ubiratã",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106257,
              "nome"=> "Nova Xavantina",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106265,
              "nome"=> "Novo Mundo",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106273,
              "nome"=> "Novo Horizonte do Norte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106281,
              "nome"=> "Novo São Joaquim",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106299,
              "nome"=> "Paranaíta",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106307,
              "nome"=> "Paranatinga",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106315,
              "nome"=> "Novo Santo Antônio",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106372,
              "nome"=> "Pedra Preta",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106422,
              "nome"=> "Peixoto de Azevedo",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106455,
              "nome"=> "Planalto da Serra",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106505,
              "nome"=> "Poconé",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106653,
              "nome"=> "Pontal do Araguaia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106703,
              "nome"=> "Ponte Branca",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106752,
              "nome"=> "Pontes e Lacerda",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106778,
              "nome"=> "Porto Alegre do Norte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106802,
              "nome"=> "Porto dos Gaúchos",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106828,
              "nome"=> "Porto Esperidião",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5106851,
              "nome"=> "Porto Estrela",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107008,
              "nome"=> "Poxoréo",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107040,
              "nome"=> "Primavera do Leste",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107065,
              "nome"=> "Querência",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107107,
              "nome"=> "São José dos Quatro Marcos",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107156,
              "nome"=> "Reserva do Cabaçal",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107180,
              "nome"=> "Ribeirão Cascalheira",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107198,
              "nome"=> "Ribeirãozinho",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107206,
              "nome"=> "Rio Branco",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107248,
              "nome"=> "Santa Carmem",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107263,
              "nome"=> "Santo Afonso",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107297,
              "nome"=> "São José do Povo",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107305,
              "nome"=> "São José do Rio Claro",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107354,
              "nome"=> "São José do Xingu",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107404,
              "nome"=> "São Pedro da Cipa",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107578,
              "nome"=> "Rondolândia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107602,
              "nome"=> "Rondonópolis",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107701,
              "nome"=> "Rosário Oeste",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107743,
              "nome"=> "Santa Cruz do Xingu",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107750,
              "nome"=> "Salto do Céu",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107768,
              "nome"=> "Santa Rita do Trivelato",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107776,
              "nome"=> "Santa Terezinha",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107792,
              "nome"=> "Santo Antônio do Leste",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107800,
              "nome"=> "Santo Antônio do Leverger",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107859,
              "nome"=> "São Félix do Araguaia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107875,
              "nome"=> "Sapezal",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107883,
              "nome"=> "Serra Nova Dourada",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107909,
              "nome"=> "Sinop",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107925,
              "nome"=> "Sorriso",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107941,
              "nome"=> "Tabaporã",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5107958,
              "nome"=> "Tangará da Serra",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108006,
              "nome"=> "Tapurah",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108055,
              "nome"=> "Terra Nova do Norte",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108105,
              "nome"=> "Tesouro",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108204,
              "nome"=> "Torixoréu",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108303,
              "nome"=> "União do Sul",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108352,
              "nome"=> "Vale de São Domingos",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108402,
              "nome"=> "Várzea Grande",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108501,
              "nome"=> "Vera",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108600,
              "nome"=> "Vila Rica",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108808,
              "nome"=> "Nova Guarita",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108857,
              "nome"=> "Nova Marilândia",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108907,
              "nome"=> "Nova Maringá",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5108956,
              "nome"=> "Nova Monte verde",
              "estadobrasil_id"=> 51
            ],
            [
              "id"=> 5200050,
              "nome"=> "Abadia de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200100,
              "nome"=> "Abadiânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200134,
              "nome"=> "Acreúna",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200159,
              "nome"=> "Adelândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200175,
              "nome"=> "Água Fria de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200209,
              "nome"=> "Água Limpa",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200258,
              "nome"=> "Águas Lindas de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200308,
              "nome"=> "Alexânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200506,
              "nome"=> "Aloândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200555,
              "nome"=> "Alto Horizonte",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200605,
              "nome"=> "Alto Paraíso de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200803,
              "nome"=> "Alvorada do Norte",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200829,
              "nome"=> "Amaralina",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200852,
              "nome"=> "Americano do Brasil",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5200902,
              "nome"=> "Amorinópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201108,
              "nome"=> "Anápolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201207,
              "nome"=> "Anhanguera",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201306,
              "nome"=> "Anicuns",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201405,
              "nome"=> "Aparecida de Goiânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201454,
              "nome"=> "Aparecida do Rio Doce",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201504,
              "nome"=> "Aporé",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201603,
              "nome"=> "Araçu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201702,
              "nome"=> "Aragarças",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5201801,
              "nome"=> "Aragoiânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5202155,
              "nome"=> "Araguapaz",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5202353,
              "nome"=> "Arenópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5202502,
              "nome"=> "Aruanã",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5202601,
              "nome"=> "Aurilândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5202809,
              "nome"=> "Avelinópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203104,
              "nome"=> "Baliza",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203203,
              "nome"=> "Barro Alto",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203302,
              "nome"=> "Bela Vista de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203401,
              "nome"=> "Bom Jardim de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203500,
              "nome"=> "Bom Jesus de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203559,
              "nome"=> "Bonfinópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203575,
              "nome"=> "Bonópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203609,
              "nome"=> "Brazabrantes",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203807,
              "nome"=> "Britânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203906,
              "nome"=> "Buriti Alegre",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203939,
              "nome"=> "Buriti de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5203962,
              "nome"=> "Buritinópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204003,
              "nome"=> "Cabeceiras",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204102,
              "nome"=> "Cachoeira Alta",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204201,
              "nome"=> "Cachoeira de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204250,
              "nome"=> "Cachoeira Dourada",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204300,
              "nome"=> "Caçu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204409,
              "nome"=> "Caiapônia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204508,
              "nome"=> "Caldas Novas",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204557,
              "nome"=> "Caldazinha",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204607,
              "nome"=> "Campestre de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204656,
              "nome"=> "Campinaçu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204706,
              "nome"=> "Campinorte",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204805,
              "nome"=> "Campo Alegre de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204854,
              "nome"=> "Campo Limpo de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204904,
              "nome"=> "Campos Belos",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5204953,
              "nome"=> "Campos Verdes",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205000,
              "nome"=> "Carmo do Rio Verde",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205059,
              "nome"=> "Castelândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205109,
              "nome"=> "Catalão",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205208,
              "nome"=> "Caturaí",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205307,
              "nome"=> "Cavalcante",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205406,
              "nome"=> "Ceres",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205455,
              "nome"=> "Cezarina",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205471,
              "nome"=> "Chapadão do Céu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205497,
              "nome"=> "Cidade Ocidental",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205513,
              "nome"=> "Cocalzinho de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205521,
              "nome"=> "Colinas do Sul",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205703,
              "nome"=> "Córrego do Ouro",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205802,
              "nome"=> "Corumbá de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5205901,
              "nome"=> "Corumbaíba",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5206206,
              "nome"=> "Cristalina",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5206305,
              "nome"=> "Cristianópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5206404,
              "nome"=> "Crixás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5206503,
              "nome"=> "Cromínia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5206602,
              "nome"=> "Cumari",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5206701,
              "nome"=> "Damianópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5206800,
              "nome"=> "Damolândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5206909,
              "nome"=> "Davinópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207105,
              "nome"=> "Diorama",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207253,
              "nome"=> "Doverlândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207352,
              "nome"=> "Edealina",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207402,
              "nome"=> "Edéia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207501,
              "nome"=> "Estrela do Norte",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207535,
              "nome"=> "Faina",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207600,
              "nome"=> "Fazenda Nova",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207808,
              "nome"=> "Firminópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5207907,
              "nome"=> "Flores de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208004,
              "nome"=> "Formosa",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208103,
              "nome"=> "Formoso",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208152,
              "nome"=> "Gameleira de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208301,
              "nome"=> "Divinópolis de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208400,
              "nome"=> "Goianápolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208509,
              "nome"=> "Goiandira",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208608,
              "nome"=> "Goianésia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208707,
              "nome"=> "Goiânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208806,
              "nome"=> "Goianira",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5208905,
              "nome"=> "Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209101,
              "nome"=> "Goiatuba",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209150,
              "nome"=> "Gouvelândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209200,
              "nome"=> "Guapó",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209291,
              "nome"=> "Guaraíta",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209408,
              "nome"=> "Guarani de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209457,
              "nome"=> "Guarinos",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209606,
              "nome"=> "Heitoraí",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209705,
              "nome"=> "Hidrolândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209804,
              "nome"=> "Hidrolina",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209903,
              "nome"=> "Iaciara",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209937,
              "nome"=> "Inaciolândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5209952,
              "nome"=> "Indiara",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210000,
              "nome"=> "Inhumas",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210109,
              "nome"=> "Ipameri",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210158,
              "nome"=> "Ipiranga de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210208,
              "nome"=> "Iporá",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210307,
              "nome"=> "Israelândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210406,
              "nome"=> "Itaberaí",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210562,
              "nome"=> "Itaguari",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210604,
              "nome"=> "Itaguaru",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210802,
              "nome"=> "Itajá",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5210901,
              "nome"=> "Itapaci",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211008,
              "nome"=> "Itapirapuã",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211206,
              "nome"=> "Itapuranga",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211305,
              "nome"=> "Itarumã",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211404,
              "nome"=> "Itauçu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211503,
              "nome"=> "Itumbiara",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211602,
              "nome"=> "Ivolândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211701,
              "nome"=> "Jandaia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211800,
              "nome"=> "Jaraguá",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5211909,
              "nome"=> "Jataí",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212006,
              "nome"=> "Jaupaci",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212055,
              "nome"=> "Jesúpolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212105,
              "nome"=> "Joviânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212204,
              "nome"=> "Jussara",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212253,
              "nome"=> "Lagoa Santa",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212303,
              "nome"=> "Leopoldo de Bulhões",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212501,
              "nome"=> "Luziânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212600,
              "nome"=> "Mairipotaba",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212709,
              "nome"=> "Mambaí",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212808,
              "nome"=> "Mara Rosa",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212907,
              "nome"=> "Marzagão",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5212956,
              "nome"=> "Matrinchã",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213004,
              "nome"=> "Maurilândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213053,
              "nome"=> "Mimoso de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213087,
              "nome"=> "Minaçu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213103,
              "nome"=> "Mineiros",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213400,
              "nome"=> "Moiporá",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213509,
              "nome"=> "Monte Alegre de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213707,
              "nome"=> "Montes Claros de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213756,
              "nome"=> "Montividiu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213772,
              "nome"=> "Montividiu do Norte",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213806,
              "nome"=> "Morrinhos",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213855,
              "nome"=> "Morro Agudo de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5213905,
              "nome"=> "Mossâmedes",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214002,
              "nome"=> "Mozarlândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214051,
              "nome"=> "Mundo Novo",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214101,
              "nome"=> "Mutunópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214408,
              "nome"=> "Nazário",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214507,
              "nome"=> "Nerópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214606,
              "nome"=> "Niquelândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214705,
              "nome"=> "Nova América",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214804,
              "nome"=> "Nova Aurora",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214838,
              "nome"=> "Nova Crixás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214861,
              "nome"=> "Nova Glória",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214879,
              "nome"=> "Nova Iguaçu de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5214903,
              "nome"=> "Nova Roma",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215009,
              "nome"=> "Nova Veneza",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215207,
              "nome"=> "Novo Brasil",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215231,
              "nome"=> "Novo Gama",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215256,
              "nome"=> "Novo Planalto",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215306,
              "nome"=> "Orizona",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215405,
              "nome"=> "Ouro Verde de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215504,
              "nome"=> "Ouvidor",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215603,
              "nome"=> "Padre Bernardo",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215652,
              "nome"=> "Palestina de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215702,
              "nome"=> "Palmeiras de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215801,
              "nome"=> "Palmelo",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5215900,
              "nome"=> "Palminópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5216007,
              "nome"=> "Panamá",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5216304,
              "nome"=> "Paranaiguara",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5216403,
              "nome"=> "Paraúna",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5216452,
              "nome"=> "Perolândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5216809,
              "nome"=> "Petrolina de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5216908,
              "nome"=> "Pilar de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5217104,
              "nome"=> "Piracanjuba",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5217203,
              "nome"=> "Piranhas",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5217302,
              "nome"=> "Pirenópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5217401,
              "nome"=> "Pires do Rio",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5217609,
              "nome"=> "Planaltina",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5217708,
              "nome"=> "Pontalina",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218003,
              "nome"=> "Porangatu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218052,
              "nome"=> "Porteirão",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218102,
              "nome"=> "Portelândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218300,
              "nome"=> "Posse",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218391,
              "nome"=> "Professor Jamil",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218508,
              "nome"=> "Quirinópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218607,
              "nome"=> "Rialma",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218706,
              "nome"=> "Rianápolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218789,
              "nome"=> "Rio Quente",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218805,
              "nome"=> "Rio Verde",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5218904,
              "nome"=> "Rubiataba",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219001,
              "nome"=> "Sanclerlândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219100,
              "nome"=> "Santa Bárbara de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219209,
              "nome"=> "Santa Cruz de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219258,
              "nome"=> "Santa Fé de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219308,
              "nome"=> "Santa Helena de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219357,
              "nome"=> "Santa Isabel",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219407,
              "nome"=> "Santa Rita do Araguaia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219456,
              "nome"=> "Santa Rita do Novo Destino",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219506,
              "nome"=> "Santa Rosa de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219605,
              "nome"=> "Santa Tereza de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219704,
              "nome"=> "Santa Terezinha de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219712,
              "nome"=> "Santo Antônio da Barra",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219738,
              "nome"=> "Santo Antônio de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219753,
              "nome"=> "Santo Antônio do Descoberto",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219803,
              "nome"=> "São Domingos",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5219902,
              "nome"=> "São Francisco de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220009,
              "nome"=> "São João d`Aliança",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220058,
              "nome"=> "São João da Paraúna",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220108,
              "nome"=> "São Luís de Montes Belos",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220157,
              "nome"=> "São Luíz do Norte",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220207,
              "nome"=> "São Miguel do Araguaia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220264,
              "nome"=> "São Miguel do Passa Quatro",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220280,
              "nome"=> "São Patrício",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220405,
              "nome"=> "São Simão",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220454,
              "nome"=> "Senador Canedo",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220504,
              "nome"=> "Serranópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220603,
              "nome"=> "Silvânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220686,
              "nome"=> "Simolândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5220702,
              "nome"=> "Sítio d`Abadia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221007,
              "nome"=> "Taquaral de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221080,
              "nome"=> "Teresina de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221197,
              "nome"=> "Terezópolis de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221304,
              "nome"=> "Três Ranchos",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221403,
              "nome"=> "Trindade",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221452,
              "nome"=> "Trombas",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221502,
              "nome"=> "Turvânia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221551,
              "nome"=> "Turvelândia",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221577,
              "nome"=> "Uirapuru",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221601,
              "nome"=> "Uruaçu",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221700,
              "nome"=> "Uruana",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221809,
              "nome"=> "Urutaí",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221858,
              "nome"=> "Valparaíso de Goiás",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5221908,
              "nome"=> "Varjão",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5222005,
              "nome"=> "Vianópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5222054,
              "nome"=> "Vicentinópolis",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5222203,
              "nome"=> "Vila Boa",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5222302,
              "nome"=> "Vila Propício",
              "estadobrasil_id"=> 52
            ],
            [
              "id"=> 5300108,
              "nome"=> "Brasília",
              "estadobrasil_id"=> 53
            ]
        ];


        foreach($cities as $city){
            CidadeBrasil::create($city);
        }
    }
}
