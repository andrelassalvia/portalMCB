<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;

class UnitedKingdomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ukCitiesAndTowns = [

            [
                'nome' => "Aberaeron",
                'pais_id' => 229
            ],
            [
                'nome' => "Abercarn",
                'pais_id' => 229
            ],
            [
                'nome' => "Aberchirder",
                'pais_id' => 229
            ],
            [
                'nome' => "Abercynon",
                'pais_id' => 229
            ],
            [
                'nome' => "Aberdare / Aberdâr",
                'pais_id' => 229
            ],
            [
                'nome' => "Aberdeen",
                'pais_id' => 229
            ],
            [
                'nome' => "Aberfeldy",
                'pais_id' => 229
            ],
            [
                'nome' => "Abergavenny / Y Fenni",
                'pais_id' => 229
            ],
            [
                'nome' => "Abergele",
                'pais_id' => 229
            ],
            [
                'nome' => "Abersychan",
                'pais_id' => 229
            ],
            [
                'nome' => "Abertillery / Abertyleri",
                'pais_id' => 229
            ],
            [
                'nome' => "Aberystwyth",
                'pais_id' => 229
            ],
            [
                'nome' => "Abingdon-on-Thames",
                'pais_id' => 229
            ],
            [
                'nome' => "Accrington",
                'pais_id' => 229
            ],
            [
                'nome' => "Acton",
                'pais_id' => 229
            ],
            [
                'nome' => "Addlestone",
                'pais_id' => 229
            ],
            [
                'nome' => "Adlington",
                'pais_id' => 229
            ],
            [
                'nome' => "Adwick le Street",
                'pais_id' => 229
            ],
            [
                'nome' => "Airdrie",
                'pais_id' => 229
            ],
            [
                'nome' => "Alcester",
                'pais_id' => 229
            ],
            [
                'nome' => "Aldeburgh",
                'pais_id' => 229
            ],
            [
                'nome' => "Aldershot",
                'pais_id' => 229
            ],
            [
                'nome' => "Aldridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Alexandria",
                'pais_id' => 229
            ],
            [
                'nome' => "Alford",
                'pais_id' => 229
            ],
            [
                'nome' => "Alfreton",
                'pais_id' => 229
            ],
            [
                'nome' => "Alloa",
                'pais_id' => 229
            ],
            [
                'nome' => "Alness",
                'pais_id' => 229
            ],
            [
                'nome' => "Alnwick",
                'pais_id' => 229
            ],
            [
                'nome' => "Alsager",
                'pais_id' => 229
            ],
            [
                'nome' => "Alston",
                'pais_id' => 229
            ],
            [
                'nome' => "Alton",
                'pais_id' => 229
            ],
            [
                'nome' => "Altrincham",
                'pais_id' => 229
            ],
            [
                'nome' => "Alva",
                'pais_id' => 229
            ],
            [
                'nome' => "Alyth",
                'pais_id' => 229
            ],
            [
                'nome' => "Amble",
                'pais_id' => 229
            ],
            [
                'nome' => "Ambleside",
                'pais_id' => 229
            ],
            [
                'nome' => "Amersham",
                'pais_id' => 229
            ],
            [
                'nome' => "Amesbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Amlwch",
                'pais_id' => 229
            ],
            [
                'nome' => "Ammanford / Rhydaman",
                'pais_id' => 229
            ],
            [
                'nome' => "Ampthill",
                'pais_id' => 229
            ],
            [
                'nome' => "Andover",
                'pais_id' => 229
            ],
            [
                'nome' => "Annan",
                'pais_id' => 229
            ],
            [
                'nome' => "Annfield Plain",
                'pais_id' => 229
            ],
            [
                'nome' => "Anstruther",
                'pais_id' => 229
            ],
            [
                'nome' => "Antrim",
                'pais_id' => 229
            ],
            [
                'nome' => "Appleby-in-Westmorland",
                'pais_id' => 229
            ],
            [
                'nome' => "Arbroath",
                'pais_id' => 229
            ],
            [
                'nome' => "Ardrossan",
                'pais_id' => 229
            ],
            [
                'nome' => "Armadale",
                'pais_id' => 229
            ],
            [
                'nome' => "Armagh",
                'pais_id' => 229
            ],
            [
                'nome' => "Arnold",
                'pais_id' => 229
            ],
            [
                'nome' => "Arundel",
                'pais_id' => 229
            ],
            [
                'nome' => "Ashbourne",
                'pais_id' => 229
            ],
            [
                'nome' => "Ashburton",
                'pais_id' => 229
            ],
            [
                'nome' => "Ashby-de-la-Zouch",
                'pais_id' => 229
            ],
            [
                'nome' => "Ashford",
                'pais_id' => 229
            ],
            [
                'nome' => "Ashford",
                'pais_id' => 229
            ],
            [
                'nome' => "Ashington",
                'pais_id' => 229
            ],
            [
                'nome' => "Ashton-in-Makerfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Ashton-under-Lyne",
                'pais_id' => 229
            ],
            [
                'nome' => "Aspatria",
                'pais_id' => 229
            ],
            [
                'nome' => "Atherstone",
                'pais_id' => 229
            ],
            [
                'nome' => "Atherton",
                'pais_id' => 229
            ],
            [
                'nome' => "Attleborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Auchterarder",
                'pais_id' => 229
            ],
            [
                'nome' => "Auchtermuchty",
                'pais_id' => 229
            ],
            [
                'nome' => "Aviemore",
                'pais_id' => 229
            ],
            [
                'nome' => "Axbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Axminster",
                'pais_id' => 229
            ],
            [
                'nome' => "Aylesbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Aylsham",
                'pais_id' => 229
            ],
            [
                'nome' => "Ayr",
                'pais_id' => 229
            ],
            [
                'nome' => "Bacup",
                'pais_id' => 229
            ],
            [
                'nome' => "Baildon",
                'pais_id' => 229
            ],
            [
                'nome' => "Bakewell",
                'pais_id' => 229
            ],
            [
                'nome' => "Baldock",
                'pais_id' => 229
            ],
            [
                'nome' => "Ballater",
                'pais_id' => 229
            ],
            [
                'nome' => "Ballycastle",
                'pais_id' => 229
            ],
            [
                'nome' => "Ballyclare",
                'pais_id' => 229
            ],
            [
                'nome' => "Ballymena",
                'pais_id' => 229
            ],
            [
                'nome' => "Ballymoney",
                'pais_id' => 229
            ],
            [
                'nome' => "Ballynahinch",
                'pais_id' => 229
            ],
            [
                'nome' => "Bamber Bridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Banbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Banbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Banchory",
                'pais_id' => 229
            ],
            [
                'nome' => "Banff",
                'pais_id' => 229
            ],
            [
                'nome' => "Bangor",
                'pais_id' => 229
            ],
            [
                'nome' => "Bangor",
                'pais_id' => 229
            ],
            [
                'nome' => "Banstead",
                'pais_id' => 229
            ],
            [
                'nome' => "Bargod / Bargoed",
                'pais_id' => 229
            ],
            [
                'nome' => "Barmouth / Abermaw",
                'pais_id' => 229
            ],
            [
                'nome' => "Barnard Castle",
                'pais_id' => 229
            ],
            [
                'nome' => "Barnoldswick",
                'pais_id' => 229
            ],
            [
                'nome' => "Barnsley",
                'pais_id' => 229
            ],
            [
                'nome' => "Barnstaple",
                'pais_id' => 229
            ],
            [
                'nome' => "Barrhead",
                'pais_id' => 229
            ],
            [
                'nome' => "Barrowford",
                'pais_id' => 229
            ],
            [
                'nome' => "Barrow-in-Furness",
                'pais_id' => 229
            ],
            [
                'nome' => "Barry / Barri",
                'pais_id' => 229
            ],
            [
                'nome' => "Barton-upon-Humber",
                'pais_id' => 229
            ],
            [
                'nome' => "Basildon",
                'pais_id' => 229
            ],
            [
                'nome' => "Basingstoke",
                'pais_id' => 229
            ],
            [
                'nome' => "Bath",
                'pais_id' => 229
            ],
            [
                'nome' => "Bathgate",
                'pais_id' => 229
            ],
            [
                'nome' => "Batley",
                'pais_id' => 229
            ],
            [
                'nome' => "Battle",
                'pais_id' => 229
            ],
            [
                'nome' => "Bawtry",
                'pais_id' => 229
            ],
            [
                'nome' => "Beaconsfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Beaminster",
                'pais_id' => 229
            ],
            [
                'nome' => "Bearsden",
                'pais_id' => 229
            ],
            [
                'nome' => "Beaumaris",
                'pais_id' => 229
            ],
            [
                'nome' => "Bebington",
                'pais_id' => 229
            ],
            [
                'nome' => "Beccles",
                'pais_id' => 229
            ],
            [
                'nome' => "Bedale",
                'pais_id' => 229
            ],
            [
                'nome' => "Bedford",
                'pais_id' => 229
            ],
            [
                'nome' => "Bedlington",
                'pais_id' => 229
            ],
            [
                'nome' => "Bedworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Beeston",
                'pais_id' => 229
            ],
            [
                'nome' => "Belfast",
                'pais_id' => 229
            ],
            [
                'nome' => "Bellshill",
                'pais_id' => 229
            ],
            [
                'nome' => "Belper",
                'pais_id' => 229
            ],
            [
                'nome' => "Bentley",
                'pais_id' => 229
            ],
            [
                'nome' => "Berkhamsted",
                'pais_id' => 229
            ],
            [
                'nome' => "Berwick-upon-Tweed",
                'pais_id' => 229
            ],
            [
                'nome' => "Bethesda",
                'pais_id' => 229
            ],
            [
                'nome' => "Betws-y-Coed",
                'pais_id' => 229
            ],
            [
                'nome' => "Beverley",
                'pais_id' => 229
            ],
            [
                'nome' => "Bewdley",
                'pais_id' => 229
            ],
            [
                'nome' => "Bexhill",
                'pais_id' => 229
            ],
            [
                'nome' => "Bicester",
                'pais_id' => 229
            ],
            [
                'nome' => "Biddulph",
                'pais_id' => 229
            ],
            [
                'nome' => "Bideford",
                'pais_id' => 229
            ],
            [
                'nome' => "Biggar",
                'pais_id' => 229
            ],
            [
                'nome' => "Biggleswade",
                'pais_id' => 229
            ],
            [
                'nome' => "Billericay",
                'pais_id' => 229
            ],
            [
                'nome' => "Billinge",
                'pais_id' => 229
            ],
            [
                'nome' => "Billingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Bilston",
                'pais_id' => 229
            ],
            [
                'nome' => "Bingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Bingley",
                'pais_id' => 229
            ],
            [
                'nome' => "Birkenhead",
                'pais_id' => 229
            ],
            [
                'nome' => "Birmingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Bishop Auckland",
                'pais_id' => 229
            ],
            [
                'nome' => "Bishopbriggs",
                'pais_id' => 229
            ],
            [
                'nome' => "Bishop's Castle",
                'pais_id' => 229
            ],
            [
                'nome' => "Bishop's Stortford",
                'pais_id' => 229
            ],
            [
                'nome' => "Bishop's Waltham",
                'pais_id' => 229
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Blackheath",
                'pais_id' => 229
            ],
            [
                'nome' => "Blackpool",
                'pais_id' => 229
            ],
            [
                'nome' => "Blackwater",
                'pais_id' => 229
            ],
            [
                'nome' => "Blackwood / Y Coed Duon",
                'pais_id' => 229
            ],
            [
                'nome' => "Blaenau Ffestiniog",
                'pais_id' => 229
            ],
            [
                'nome' => "Blaenavon",
                'pais_id' => 229
            ],
            [
                'nome' => "Blaina / Y Blaenau",
                'pais_id' => 229
            ],
            [
                'nome' => "Blairgowrie and Rattray",
                'pais_id' => 229
            ],
            [
                'nome' => "Blandford Forum",
                'pais_id' => 229
            ],
            [
                'nome' => "Blaydon",
                'pais_id' => 229
            ],
            [
                'nome' => "Bletchley",
                'pais_id' => 229
            ],
            [
                'nome' => "Bloxwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Blyth",
                'pais_id' => 229
            ],
            [
                'nome' => "Bodmin",
                'pais_id' => 229
            ],
            [
                'nome' => "Bognor Regis",
                'pais_id' => 229
            ],
            [
                'nome' => "Bollington",
                'pais_id' => 229
            ],
            [
                'nome' => "Bolsover",
                'pais_id' => 229
            ],
            [
                'nome' => "Bolton",
                'pais_id' => 229
            ],
            [
                'nome' => "Bolton upon Dearne",
                'pais_id' => 229
            ],
            [
                'nome' => "Bo'ness",
                'pais_id' => 229
            ],
            [
                'nome' => "Bonnyrigg",
                'pais_id' => 229
            ],
            [
                'nome' => "Bootle",
                'pais_id' => 229
            ],
            [
                'nome' => "Bordon",
                'pais_id' => 229
            ],
            [
                'nome' => "Borehamwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Boroughbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Boston",
                'pais_id' => 229
            ],
            [
                'nome' => "Bourne",
                'pais_id' => 229
            ],
            [
                'nome' => "Bournemouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Bovey Tracey",
                'pais_id' => 229
            ],
            [
                'nome' => "Bowness-on-Windermere",
                'pais_id' => 229
            ],
            [
                'nome' => "Brackley",
                'pais_id' => 229
            ],
            [
                'nome' => "Bracknell",
                'pais_id' => 229
            ],
            [
                'nome' => "Bradford",
                'pais_id' => 229
            ],
            [
                'nome' => "Bradford-on-Avon",
                'pais_id' => 229
            ],
            [
                'nome' => "Brading",
                'pais_id' => 229
            ],
            [
                'nome' => "Bradley Stoke",
                'pais_id' => 229
            ],
            [
                'nome' => "Braintree",
                'pais_id' => 229
            ],
            [
                'nome' => "Bramhall",
                'pais_id' => 229
            ],
            [
                'nome' => "Brampton",
                'pais_id' => 229
            ],
            [
                'nome' => "Brandon",
                'pais_id' => 229
            ],
            [
                'nome' => "Brechin",
                'pais_id' => 229
            ],
            [
                'nome' => "Brecon / Aberhonddu",
                'pais_id' => 229
            ],
            [
                'nome' => "Brentwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Bridgend / Pen-y-bont ar Ogwr",
                'pais_id' => 229
            ],
            [
                'nome' => "Bridge of Allan",
                'pais_id' => 229
            ],
            [
                'nome' => "Bridgnorth",
                'pais_id' => 229
            ],
            [
                'nome' => "Bridgwater",
                'pais_id' => 229
            ],
            [
                'nome' => "Bridlington",
                'pais_id' => 229
            ],
            [
                'nome' => "Bridport",
                'pais_id' => 229
            ],
            [
                'nome' => "Brierfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Brierley Hill",
                'pais_id' => 229
            ],
            [
                'nome' => "Brigg",
                'pais_id' => 229
            ],
            [
                'nome' => "Brighouse",
                'pais_id' => 229
            ],
            [
                'nome' => "Brightlingsea",
                'pais_id' => 229
            ],
            [
                'nome' => "Brighton and Hove",
                'pais_id' => 229
            ],
            [
                'nome' => "Bristol",
                'pais_id' => 229
            ],
            [
                'nome' => "Brixham",
                'pais_id' => 229
            ],
            [
                'nome' => "Broadstairs",
                'pais_id' => 229
            ],
            [
                'nome' => "Bromsgrove",
                'pais_id' => 229
            ],
            [
                'nome' => "Bromyard",
                'pais_id' => 229
            ],
            [
                'nome' => "Broseley",
                'pais_id' => 229
            ],
            [
                'nome' => "Brotton",
                'pais_id' => 229
            ],
            [
                'nome' => "Broughton in Furness",
                'pais_id' => 229
            ],
            [
                'nome' => "Broughty Ferry",
                'pais_id' => 229
            ],
            [
                'nome' => "Brownhills",
                'pais_id' => 229
            ],
            [
                'nome' => "Broxburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Bruton",
                'pais_id' => 229
            ],
            [
                'nome' => "Brynmawr / Bryn-Mawr",
                'pais_id' => 229
            ],
            [
                'nome' => "Buckfastleigh",
                'pais_id' => 229
            ],
            [
                'nome' => "Buckhaven",
                'pais_id' => 229
            ],
            [
                'nome' => "Buckie",
                'pais_id' => 229
            ],
            [
                'nome' => "Buckingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Buckley / Bwcle",
                'pais_id' => 229
            ],
            [
                'nome' => "Bude",
                'pais_id' => 229
            ],
            [
                'nome' => "Budleigh Salterton",
                'pais_id' => 229
            ],
            [
                'nome' => "Builth Wells / Llanfair-ym-Muallt",
                'pais_id' => 229
            ],
            [
                'nome' => "Bungay",
                'pais_id' => 229
            ],
            [
                'nome' => "Buntingford",
                'pais_id' => 229
            ],
            [
                'nome' => "Burford",
                'pais_id' => 229
            ],
            [
                'nome' => "Burgess Hill",
                'pais_id' => 229
            ],
            [
                'nome' => "Burghead",
                'pais_id' => 229
            ],
            [
                'nome' => "Burnham-on-Crouch",
                'pais_id' => 229
            ],
            [
                'nome' => "Burnham-on-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Burnley",
                'pais_id' => 229
            ],
            [
                'nome' => "Burntisland",
                'pais_id' => 229
            ],
            [
                'nome' => "Burntwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Burry Port / Porth Tywyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Burton Latimer",
                'pais_id' => 229
            ],
            [
                'nome' => "Burton upon Trent",
                'pais_id' => 229
            ],
            [
                'nome' => "Bury",
                'pais_id' => 229
            ],
            [
                'nome' => "Bury St Edmunds",
                'pais_id' => 229
            ],
            [
                'nome' => "Bushey",
                'pais_id' => 229
            ],
            [
                'nome' => "Buxton",
                'pais_id' => 229
            ],
            [
                'nome' => "Caerleon / Caerllion",
                'pais_id' => 229
            ],
            [
                'nome' => "Caernarfon",
                'pais_id' => 229
            ],
            [
                'nome' => "Caerphilly / Caerffili",
                'pais_id' => 229
            ],
            [
                'nome' => "Caerwys",
                'pais_id' => 229
            ],
            [
                'nome' => "Caister-on-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Caldicot / Cil-y-coed",
                'pais_id' => 229
            ],
            [
                'nome' => "Callander",
                'pais_id' => 229
            ],
            [
                'nome' => "Callington",
                'pais_id' => 229
            ],
            [
                'nome' => "Calne",
                'pais_id' => 229
            ],
            [
                'nome' => "Camberley",
                'pais_id' => 229
            ],
            [
                'nome' => "Camborne",
                'pais_id' => 229
            ],
            [
                'nome' => "Cambridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Camelford",
                'pais_id' => 229
            ],
            [
                'nome' => "Campbeltown / Ceann Loch Chille Chiarain",
                'pais_id' => 229
            ],
            [
                'nome' => "Cannock",
                'pais_id' => 229
            ],
            [
                'nome' => "Canterbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Canvey Island",
                'pais_id' => 229
            ],
            [
                'nome' => "Cardiff / Caerdydd",
                'pais_id' => 229
            ],
            [
                'nome' => "Cardigan / Aberteifi",
                'pais_id' => 229
            ],
            [
                'nome' => "Carlisle",
                'pais_id' => 229
            ],
            [
                'nome' => "Carluke",
                'pais_id' => 229
            ],
            [
                'nome' => "Carmarthen / Caerfyrddin",
                'pais_id' => 229
            ],
            [
                'nome' => "Carnforth",
                'pais_id' => 229
            ],
            [
                'nome' => "Carnoustie",
                'pais_id' => 229
            ],
            [
                'nome' => "Carrickfergus",
                'pais_id' => 229
            ],
            [
                'nome' => "Carryduff",
                'pais_id' => 229
            ],
            [
                'nome' => "Carterton",
                'pais_id' => 229
            ],
            [
                'nome' => "Castle Cary",
                'pais_id' => 229
            ],
            [
                'nome' => "Castle Douglas",
                'pais_id' => 229
            ],
            [
                'nome' => "Castleford",
                'pais_id' => 229
            ],
            [
                'nome' => "Castletown",
                'pais_id' => 229
            ],
            [
                'nome' => "Caterham",
                'pais_id' => 229
            ],
            [
                'nome' => "Chadderton",
                'pais_id' => 229
            ],
            [
                'nome' => "Chagford",
                'pais_id' => 229
            ],
            [
                'nome' => "Chapel-en-le-Frith",
                'pais_id' => 229
            ],
            [
                'nome' => "Chard",
                'pais_id' => 229
            ],
            [
                'nome' => "Charlbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Charlestown of Aberlour",
                'pais_id' => 229
            ],
            [
                'nome' => "Chatham",
                'pais_id' => 229
            ],
            [
                'nome' => "Chatteris",
                'pais_id' => 229
            ],
            [
                'nome' => "Cheadle",
                'pais_id' => 229
            ],
            [
                'nome' => "Cheadle",
                'pais_id' => 229
            ],
            [
                'nome' => "Cheadle Hulme",
                'pais_id' => 229
            ],
            [
                'nome' => "Chelmsford",
                'pais_id' => 229
            ],
            [
                'nome' => "Cheltenham",
                'pais_id' => 229
            ],
            [
                'nome' => "Chepstow / Cas-Gwent",
                'pais_id' => 229
            ],
            [
                'nome' => "Chertsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Chesham",
                'pais_id' => 229
            ],
            [
                'nome' => "Cheshunt",
                'pais_id' => 229
            ],
            [
                'nome' => "Chester",
                'pais_id' => 229
            ],
            [
                'nome' => "Chesterfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Chester-le-Street",
                'pais_id' => 229
            ],
            [
                'nome' => "Chichester",
                'pais_id' => 229
            ],
            [
                'nome' => "Chickerell",
                'pais_id' => 229
            ],
            [
                'nome' => "Chigwell",
                'pais_id' => 229
            ],
            [
                'nome' => "Chippenham",
                'pais_id' => 229
            ],
            [
                'nome' => "Chipping Campden",
                'pais_id' => 229
            ],
            [
                'nome' => "Chipping Norton",
                'pais_id' => 229
            ],
            [
                'nome' => "Chipping Ongar",
                'pais_id' => 229
            ],
            [
                'nome' => "Chipping Sodbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Chirk / Y Waun",
                'pais_id' => 229
            ],
            [
                'nome' => "Chorley",
                'pais_id' => 229
            ],
            [
                'nome' => "Chorleywood",
                'pais_id' => 229
            ],
            [
                'nome' => "Christchurch",
                'pais_id' => 229
            ],
            [
                'nome' => "Chudleigh",
                'pais_id' => 229
            ],
            [
                'nome' => "Church",
                'pais_id' => 229
            ],
            [
                'nome' => "Church Stretton",
                'pais_id' => 229
            ],
            [
                'nome' => "Cinderford",
                'pais_id' => 229
            ],
            [
                'nome' => "Cirencester",
                'pais_id' => 229
            ],
            [
                'nome' => "Clackmannan",
                'pais_id' => 229
            ],
            [
                'nome' => "Clacton-on-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Clare",
                'pais_id' => 229
            ],
            [
                'nome' => "Clay Cross",
                'pais_id' => 229
            ],
            [
                'nome' => "Clayton-le-Moors",
                'pais_id' => 229
            ],
            [
                'nome' => "Cleator Moor",
                'pais_id' => 229
            ],
            [
                'nome' => "Cleckheaton",
                'pais_id' => 229
            ],
            [
                'nome' => "Cleethorpes",
                'pais_id' => 229
            ],
            [
                'nome' => "Cleobury Mortimer",
                'pais_id' => 229
            ],
            [
                'nome' => "Clevedon",
                'pais_id' => 229
            ],
            [
                'nome' => "Cleveleys",
                'pais_id' => 229
            ],
            [
                'nome' => "Clitheroe",
                'pais_id' => 229
            ],
            [
                'nome' => "Clydebank",
                'pais_id' => 229
            ],
            [
                'nome' => "Coalisland",
                'pais_id' => 229
            ],
            [
                'nome' => "Coalville",
                'pais_id' => 229
            ],
            [
                'nome' => "Coatbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Cockenzie and Port Seton",
                'pais_id' => 229
            ],
            [
                'nome' => "Cockermouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Coggeshall",
                'pais_id' => 229
            ],
            [
                'nome' => "Colchester",
                'pais_id' => 229
            ],
            [
                'nome' => "Coldstream",
                'pais_id' => 229
            ],
            [
                'nome' => "Coleford",
                'pais_id' => 229
            ],
            [
                'nome' => "Coleraine",
                'pais_id' => 229
            ],
            [
                'nome' => "Coleshill",
                'pais_id' => 229
            ],
            [
                'nome' => "Colne",
                'pais_id' => 229
            ],
            [
                'nome' => "Colwyn Bay / Bae Colwyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Colyton",
                'pais_id' => 229
            ],
            [
                'nome' => "Comber",
                'pais_id' => 229
            ],
            [
                'nome' => "Congleton",
                'pais_id' => 229
            ],
            [
                'nome' => "Conisbrough",
                'pais_id' => 229
            ],
            [
                'nome' => "Connah's Quay / Cei Connah",
                'pais_id' => 229
            ],
            [
                'nome' => "Consett",
                'pais_id' => 229
            ],
            [
                'nome' => "Conwy",
                'pais_id' => 229
            ],
            [
                'nome' => "Cookstown",
                'pais_id' => 229
            ],
            [
                'nome' => "Corbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Corby",
                'pais_id' => 229
            ],
            [
                'nome' => "Corsham",
                'pais_id' => 229
            ],
            [
                'nome' => "Coseley",
                'pais_id' => 229
            ],
            [
                'nome' => "Cotgrave",
                'pais_id' => 229
            ],
            [
                'nome' => "Cottingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Coupar Angus",
                'pais_id' => 229
            ],
            [
                'nome' => "Coventry",
                'pais_id' => 229
            ],
            [
                'nome' => "Cowbridge / Y Bont-Faen",
                'pais_id' => 229
            ],
            [
                'nome' => "Cowdenbeath",
                'pais_id' => 229
            ],
            [
                'nome' => "Cowes",
                'pais_id' => 229
            ],
            [
                'nome' => "Craigavon",
                'pais_id' => 229
            ],
            [
                'nome' => "Crail",
                'pais_id' => 229
            ],
            [
                'nome' => "Cramlington",
                'pais_id' => 229
            ],
            [
                'nome' => "Craven Arms",
                'pais_id' => 229
            ],
            [
                'nome' => "Crawley",
                'pais_id' => 229
            ],
            [
                'nome' => "Crediton",
                'pais_id' => 229
            ],
            [
                'nome' => "Crewe",
                'pais_id' => 229
            ],
            [
                'nome' => "Crewkerne",
                'pais_id' => 229
            ],
            [
                'nome' => "Criccieth / Cricieth",
                'pais_id' => 229
            ],
            [
                'nome' => "Crickhowell / Crughywel",
                'pais_id' => 229
            ],
            [
                'nome' => "Cricklade",
                'pais_id' => 229
            ],
            [
                'nome' => "Crieff",
                'pais_id' => 229
            ],
            [
                'nome' => "Cromarty",
                'pais_id' => 229
            ],
            [
                'nome' => "Cromer",
                'pais_id' => 229
            ],
            [
                'nome' => "Crook",
                'pais_id' => 229
            ],
            [
                'nome' => "Crosby",
                'pais_id' => 229
            ],
            [
                'nome' => "Crowborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Crowland",
                'pais_id' => 229
            ],
            [
                'nome' => "Crowle",
                'pais_id' => 229
            ],
            [
                'nome' => "Crowthorne",
                'pais_id' => 229
            ],
            [
                'nome' => "Cuckfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Cullen",
                'pais_id' => 229
            ],
            [
                'nome' => "Cullompton",
                'pais_id' => 229
            ],
            [
                'nome' => "Culross",
                'pais_id' => 229
            ],
            [
                'nome' => "Cumbernauld",
                'pais_id' => 229
            ],
            [
                'nome' => "Cumnock",
                'pais_id' => 229
            ],
            [
                'nome' => "Cupar",
                'pais_id' => 229
            ],
            [
                'nome' => "Cwmbrân",
                'pais_id' => 229
            ],
            [
                'nome' => "Dalbeattie",
                'pais_id' => 229
            ],
            [
                'nome' => "Dalkeith",
                'pais_id' => 229
            ],
            [
                'nome' => "Dalton-in-Furness",
                'pais_id' => 229
            ],
            [
                'nome' => "Darlaston",
                'pais_id' => 229
            ],
            [
                'nome' => "Darley Dale",
                'pais_id' => 229
            ],
            [
                'nome' => "Darlington",
                'pais_id' => 229
            ],
            [
                'nome' => "Dartford",
                'pais_id' => 229
            ],
            [
                'nome' => "Dartmouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Darvel",
                'pais_id' => 229
            ],
            [
                'nome' => "Darwen",
                'pais_id' => 229
            ],
            [
                'nome' => "Daventry",
                'pais_id' => 229
            ],
            [
                'nome' => "Dawlish",
                'pais_id' => 229
            ],
            [
                'nome' => "Deal",
                'pais_id' => 229
            ],
            [
                'nome' => "Denbigh / Dinbych",
                'pais_id' => 229
            ],
            [
                'nome' => "Denny",
                'pais_id' => 229
            ],
            [
                'nome' => "Denton",
                'pais_id' => 229
            ],
            [
                'nome' => "Derby",
                'pais_id' => 229
            ],
            [
                'nome' => "Dereham",
                'pais_id' => 229
            ],
            [
                'nome' => "Derry / Londonderry",
                'pais_id' => 229
            ],
            [
                'nome' => "Desborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Devizes",
                'pais_id' => 229
            ],
            [
                'nome' => "Dewsbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Didcot",
                'pais_id' => 229
            ],
            [
                'nome' => "Dingwall",
                'pais_id' => 229
            ],
            [
                'nome' => "Dinnington",
                'pais_id' => 229
            ],
            [
                'nome' => "Diss",
                'pais_id' => 229
            ],
            [
                'nome' => "Dolgellau",
                'pais_id' => 229
            ],
            [
                'nome' => "Dollar",
                'pais_id' => 229
            ],
            [
                'nome' => "Donaghadee",
                'pais_id' => 229
            ],
            [
                'nome' => "Doncaster",
                'pais_id' => 229
            ],
            [
                'nome' => "Dorchester",
                'pais_id' => 229
            ],
            [
                'nome' => "Dorking",
                'pais_id' => 229
            ],
            [
                'nome' => "Dornoch",
                'pais_id' => 229
            ],
            [
                'nome' => "Douglas",
                'pais_id' => 229
            ],
            [
                'nome' => "Doune",
                'pais_id' => 229
            ],
            [
                'nome' => "Dover",
                'pais_id' => 229
            ],
            [
                'nome' => "Downham Market",
                'pais_id' => 229
            ],
            [
                'nome' => "Downpatrick",
                'pais_id' => 229
            ],
            [
                'nome' => "Driffield",
                'pais_id' => 229
            ],
            [
                'nome' => "Droitwich Spa",
                'pais_id' => 229
            ],
            [
                'nome' => "Dromore ",
                'pais_id' => 229
            ],
            [
                'nome' => "Dronfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Droylsden",
                'pais_id' => 229
            ],
            [
                'nome' => "Dudley",
                'pais_id' => 229
            ],
            [
                'nome' => "Dufftown",
                'pais_id' => 229
            ],
            [
                'nome' => "Dukinfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Dulverton",
                'pais_id' => 229
            ],
            [
                'nome' => "Dumbarton",
                'pais_id' => 229
            ],
            [
                'nome' => "Dumfries",
                'pais_id' => 229
            ],
            [
                'nome' => "Dunbar",
                'pais_id' => 229
            ],
            [
                'nome' => "Dunblane",
                'pais_id' => 229
            ],
            [
                'nome' => "Dundee",
                'pais_id' => 229
            ],
            [
                'nome' => "Dundonald",
                'pais_id' => 229
            ],
            [
                'nome' => "Dunfermline",
                'pais_id' => 229
            ],
            [
                'nome' => "Dungannon",
                'pais_id' => 229
            ],
            [
                'nome' => "Dunmurry",
                'pais_id' => 229
            ],
            [
                'nome' => "Dunoon / Dùn Obhainn",
                'pais_id' => 229
            ],
            [
                'nome' => "Duns",
                'pais_id' => 229
            ],
            [
                'nome' => "Dunstable",
                'pais_id' => 229
            ],
            [
                'nome' => "Durham",
                'pais_id' => 229
            ],
            [
                'nome' => "Dursley",
                'pais_id' => 229
            ],
            [
                'nome' => "Earby",
                'pais_id' => 229
            ],
            [
                'nome' => "Earl Shilton",
                'pais_id' => 229
            ],
            [
                'nome' => "Easingwold",
                'pais_id' => 229
            ],
            [
                'nome' => "Eastbourne",
                'pais_id' => 229
            ],
            [
                'nome' => "East Cowes",
                'pais_id' => 229
            ],
            [
                'nome' => "East Grinstead",
                'pais_id' => 229
            ],
            [
                'nome' => "East Kilbride",
                'pais_id' => 229
            ],
            [
                'nome' => "Eastleigh",
                'pais_id' => 229
            ],
            [
                'nome' => "East Linton",
                'pais_id' => 229
            ],
            [
                'nome' => "Eastwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Ebbw Vale / Glyn Ebwy",
                'pais_id' => 229
            ],
            [
                'nome' => "Eccles",
                'pais_id' => 229
            ],
            [
                'nome' => "Eccleshall",
                'pais_id' => 229
            ],
            [
                'nome' => "Edenbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Edinburgh",
                'pais_id' => 229
            ],
            [
                'nome' => "Egham",
                'pais_id' => 229
            ],
            [
                'nome' => "Egremont",
                'pais_id' => 229
            ],
            [
                'nome' => "Elgin",
                'pais_id' => 229
            ],
            [
                'nome' => "Elland",
                'pais_id' => 229
            ],
            [
                'nome' => "Ellesmere",
                'pais_id' => 229
            ],
            [
                'nome' => "Ellesmere Port",
                'pais_id' => 229
            ],
            [
                'nome' => "Ellon",
                'pais_id' => 229
            ],
            [
                'nome' => "Ely",
                'pais_id' => 229
            ],
            [
                'nome' => "Emsworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Enniskillen",
                'pais_id' => 229
            ],
            [
                'nome' => "Epping",
                'pais_id' => 229
            ],
            [
                'nome' => "Epsom",
                'pais_id' => 229
            ],
            [
                'nome' => "Epworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Erskine",
                'pais_id' => 229
            ],
            [
                'nome' => "Esher",
                'pais_id' => 229
            ],
            [
                'nome' => "Eton",
                'pais_id' => 229
            ],
            [
                'nome' => "Evesham",
                'pais_id' => 229
            ],
            [
                'nome' => "Ewell",
                'pais_id' => 229
            ],
            [
                'nome' => "Exeter",
                'pais_id' => 229
            ],
            [
                'nome' => "Exmouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Eye",
                'pais_id' => 229
            ],
            [
                'nome' => "Eyemouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Failsworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Fairford",
                'pais_id' => 229
            ],
            [
                'nome' => "Fakenham",
                'pais_id' => 229
            ],
            [
                'nome' => "Falkirk",
                'pais_id' => 229
            ],
            [
                'nome' => "Falkland",
                'pais_id' => 229
            ],
            [
                'nome' => "Falmouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Fareham",
                'pais_id' => 229
            ],
            [
                'nome' => "Faringdon",
                'pais_id' => 229
            ],
            [
                'nome' => "Farnborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Farnham",
                'pais_id' => 229
            ],
            [
                'nome' => "Farnworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Faversham",
                'pais_id' => 229
            ],
            [
                'nome' => "Fazeley",
                'pais_id' => 229
            ],
            [
                'nome' => "Featherstone",
                'pais_id' => 229
            ],
            [
                'nome' => "Felixstowe",
                'pais_id' => 229
            ],
            [
                'nome' => "Ferndale",
                'pais_id' => 229
            ],
            [
                'nome' => "Ferndown",
                'pais_id' => 229
            ],
            [
                'nome' => "Ferryhill",
                'pais_id' => 229
            ],
            [
                'nome' => "Filey",
                'pais_id' => 229
            ],
            [
                'nome' => "Filton",
                'pais_id' => 229
            ],
            [
                'nome' => "Findochty",
                'pais_id' => 229
            ],
            [
                'nome' => "Fishguard / Abergwaun",
                'pais_id' => 229
            ],
            [
                'nome' => "Fleet",
                'pais_id' => 229
            ],
            [
                'nome' => "Fleetwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Flint / Y Fflint",
                'pais_id' => 229
            ],
            [
                'nome' => "Flitwick",
                'pais_id' => 229
            ],
            [
                'nome' => "Folkestone",
                'pais_id' => 229
            ],
            [
                'nome' => "Fordingbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Forfar",
                'pais_id' => 229
            ],
            [
                'nome' => "Formby",
                'pais_id' => 229
            ],
            [
                'nome' => "Forres",
                'pais_id' => 229
            ],
            [
                'nome' => "Fortrose",
                'pais_id' => 229
            ],
            [
                'nome' => "Fortuneswell",
                'pais_id' => 229
            ],
            [
                'nome' => "Fort William / An Gearasdan",
                'pais_id' => 229
            ],
            [
                'nome' => "Fowey",
                'pais_id' => 229
            ],
            [
                'nome' => "Framlingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Fraserburgh",
                'pais_id' => 229
            ],
            [
                'nome' => "Freckleton",
                'pais_id' => 229
            ],
            [
                'nome' => "Frimley",
                'pais_id' => 229
            ],
            [
                'nome' => "Frinton-on-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Frodsham",
                'pais_id' => 229
            ],
            [
                'nome' => "Frome",
                'pais_id' => 229
            ],
            [
                'nome' => "Fulwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Gainsborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Galashiels",
                'pais_id' => 229
            ],
            [
                'nome' => "Galston",
                'pais_id' => 229
            ],
            [
                'nome' => "Garforth",
                'pais_id' => 229
            ],
            [
                'nome' => "Garstang",
                'pais_id' => 229
            ],
            [
                'nome' => "Gatehouse of Fleet",
                'pais_id' => 229
            ],
            [
                'nome' => "Gateshead",
                'pais_id' => 229
            ],
            [
                'nome' => "Gatley",
                'pais_id' => 229
            ],
            [
                'nome' => "Gerrards Cross",
                'pais_id' => 229
            ],
            [
                'nome' => "Gillingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Gillingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Girvan",
                'pais_id' => 229
            ],
            [
                'nome' => "Glasgow",
                'pais_id' => 229
            ],
            [
                'nome' => "Glastonbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Glenrothes",
                'pais_id' => 229
            ],
            [
                'nome' => "Glossop",
                'pais_id' => 229
            ],
            [
                'nome' => "Gloucester",
                'pais_id' => 229
            ],
            [
                'nome' => "Glyn-neath / Glyn-nedd",
                'pais_id' => 229
            ],
            [
                'nome' => "Godalming",
                'pais_id' => 229
            ],
            [
                'nome' => "Godmanchester",
                'pais_id' => 229
            ],
            [
                'nome' => "Golborne",
                'pais_id' => 229
            ],
            [
                'nome' => "Goldthorpe",
                'pais_id' => 229
            ],
            [
                'nome' => "Goodwick / Wdig",
                'pais_id' => 229
            ],
            [
                'nome' => "Goole",
                'pais_id' => 229
            ],
            [
                'nome' => "Gorleston-on-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Gorseinon",
                'pais_id' => 229
            ],
            [
                'nome' => "Gosport",
                'pais_id' => 229
            ],
            [
                'nome' => "Gourock",
                'pais_id' => 229
            ],
            [
                'nome' => "Grangemouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Grange-over-Sands",
                'pais_id' => 229
            ],
            [
                'nome' => "Grantham",
                'pais_id' => 229
            ],
            [
                'nome' => "Grantown-on-Spey",
                'pais_id' => 229
            ],
            [
                'nome' => "Gravesend",
                'pais_id' => 229
            ],
            [
                'nome' => "Grays",
                'pais_id' => 229
            ],
            [
                'nome' => "Great Dunmow",
                'pais_id' => 229
            ],
            [
                'nome' => "Great Harwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Great Malvern",
                'pais_id' => 229
            ],
            [
                'nome' => "Great Torrington",
                'pais_id' => 229
            ],
            [
                'nome' => "Great Yarmouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Greenock",
                'pais_id' => 229
            ],
            [
                'nome' => "Grimsby",
                'pais_id' => 229
            ],
            [
                'nome' => "Guildford",
                'pais_id' => 229
            ],
            [
                'nome' => "Guisborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Guiseley",
                'pais_id' => 229
            ],
            [
                'nome' => "Haddington",
                'pais_id' => 229
            ],
            [
                'nome' => "Hadleigh",
                'pais_id' => 229
            ],
            [
                'nome' => "Hailsham",
                'pais_id' => 229
            ],
            [
                'nome' => "Hale",
                'pais_id' => 229
            ],
            [
                'nome' => "Halesowen",
                'pais_id' => 229
            ],
            [
                'nome' => "Halesworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Halifax",
                'pais_id' => 229
            ],
            [
                'nome' => "Halstead",
                'pais_id' => 229
            ],
            [
                'nome' => "Haltwhistle",
                'pais_id' => 229
            ],
            [
                'nome' => "Hamilton",
                'pais_id' => 229
            ],
            [
                'nome' => "Harlech",
                'pais_id' => 229
            ],
            [
                'nome' => "Harleston",
                'pais_id' => 229
            ],
            [
                'nome' => "Harlow",
                'pais_id' => 229
            ],
            [
                'nome' => "Harpenden",
                'pais_id' => 229
            ],
            [
                'nome' => "Harrogate",
                'pais_id' => 229
            ],
            [
                'nome' => "Hartlepool",
                'pais_id' => 229
            ],
            [
                'nome' => "Harwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Haslemere",
                'pais_id' => 229
            ],
            [
                'nome' => "Haslingden",
                'pais_id' => 229
            ],
            [
                'nome' => "Hastings",
                'pais_id' => 229
            ],
            [
                'nome' => "Hatfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Havant",
                'pais_id' => 229
            ],
            [
                'nome' => "Haverfordwest / Hwlffordd",
                'pais_id' => 229
            ],
            [
                'nome' => "Haverhill",
                'pais_id' => 229
            ],
            [
                'nome' => "Hawick",
                'pais_id' => 229
            ],
            [
                'nome' => "Haxby",
                'pais_id' => 229
            ],
            [
                'nome' => "Haydock",
                'pais_id' => 229
            ],
            [
                'nome' => "Hayle",
                'pais_id' => 229
            ],
            [
                'nome' => "Hay-on-Wye / Y Gelli Gandryll",
                'pais_id' => 229
            ],
            [
                'nome' => "Haywards Heath",
                'pais_id' => 229
            ],
            [
                'nome' => "Hazel Grove",
                'pais_id' => 229
            ],
            [
                'nome' => "Heanor",
                'pais_id' => 229
            ],
            [
                'nome' => "Heathfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Hebburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Hebden Bridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Heckington",
                'pais_id' => 229
            ],
            [
                'nome' => "Heckmondwike",
                'pais_id' => 229
            ],
            [
                'nome' => "Hedge End",
                'pais_id' => 229
            ],
            [
                'nome' => "Hedon",
                'pais_id' => 229
            ],
            [
                'nome' => "Helensburgh",
                'pais_id' => 229
            ],
            [
                'nome' => "Helmsley",
                'pais_id' => 229
            ],
            [
                'nome' => "Helston",
                'pais_id' => 229
            ],
            [
                'nome' => "Hemel Hempstead",
                'pais_id' => 229
            ],
            [
                'nome' => "Hemsworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Henley-in-Arden",
                'pais_id' => 229
            ],
            [
                'nome' => "Henley-on-Thames",
                'pais_id' => 229
            ],
            [
                'nome' => "Hereford",
                'pais_id' => 229
            ],
            [
                'nome' => "Herne Bay",
                'pais_id' => 229
            ],
            [
                'nome' => "Hertford",
                'pais_id' => 229
            ],
            [
                'nome' => "Hessle",
                'pais_id' => 229
            ],
            [
                'nome' => "Heswall",
                'pais_id' => 229
            ],
            [
                'nome' => "Hetton-le-Hole",
                'pais_id' => 229
            ],
            [
                'nome' => "Hexham",
                'pais_id' => 229
            ],
            [
                'nome' => "Heysham",
                'pais_id' => 229
            ],
            [
                'nome' => "Heywood",
                'pais_id' => 229
            ],
            [
                'nome' => "Higham Ferrers",
                'pais_id' => 229
            ],
            [
                'nome' => "High Bentham",
                'pais_id' => 229
            ],
            [
                'nome' => "Higher Dunstone",
                'pais_id' => 229
            ],
            [
                'nome' => "Higher Larrick",
                'pais_id' => 229
            ],
            [
                'nome' => "Highworth",
                'pais_id' => 229
            ],
            [
                'nome' => "High Wycombe",
                'pais_id' => 229
            ],
            [
                'nome' => "Hinckley",
                'pais_id' => 229
            ],
            [
                'nome' => "Hindley",
                'pais_id' => 229
            ],
            [
                'nome' => "Hingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Hitchin",
                'pais_id' => 229
            ],
            [
                'nome' => "Hoddesdon",
                'pais_id' => 229
            ],
            [
                'nome' => "Holbeach",
                'pais_id' => 229
            ],
            [
                'nome' => "Holmfirth",
                'pais_id' => 229
            ],
            [
                'nome' => "Holsworthy",
                'pais_id' => 229
            ],
            [
                'nome' => "Holt",
                'pais_id' => 229
            ],
            [
                'nome' => "Holyhead / Caergybi",
                'pais_id' => 229
            ],
            [
                'nome' => "Holywell / Treffynnon",
                'pais_id' => 229
            ],
            [
                'nome' => "Holywood",
                'pais_id' => 229
            ],
            [
                'nome' => "Honiton",
                'pais_id' => 229
            ],
            [
                'nome' => "Horbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Horley",
                'pais_id' => 229
            ],
            [
                'nome' => "Horncastle",
                'pais_id' => 229
            ],
            [
                'nome' => "Horndean",
                'pais_id' => 229
            ],
            [
                'nome' => "Hornsea",
                'pais_id' => 229
            ],
            [
                'nome' => "Horsham",
                'pais_id' => 229
            ],
            [
                'nome' => "Horwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Houghton-le-Spring",
                'pais_id' => 229
            ],
            [
                'nome' => "Houghton Regis",
                'pais_id' => 229
            ],
            [
                'nome' => "Howden",
                'pais_id' => 229
            ],
            [
                'nome' => "Hoylake",
                'pais_id' => 229
            ],
            [
                'nome' => "Hucknall",
                'pais_id' => 229
            ],
            [
                'nome' => "Huddersfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Hugh Town",
                'pais_id' => 229
            ],
            [
                'nome' => "Hungerford",
                'pais_id' => 229
            ],
            [
                'nome' => "Hunstanton",
                'pais_id' => 229
            ],
            [
                'nome' => "Huntingdon",
                'pais_id' => 229
            ],
            [
                'nome' => "Huntly",
                'pais_id' => 229
            ],
            [
                'nome' => "Hyde",
                'pais_id' => 229
            ],
            [
                'nome' => "Hythe",
                'pais_id' => 229
            ],
            [
                'nome' => "Ibstock",
                'pais_id' => 229
            ],
            [
                'nome' => "Ilfracombe",
                'pais_id' => 229
            ],
            [
                'nome' => "Ilkeston",
                'pais_id' => 229
            ],
            [
                'nome' => "Ilkley",
                'pais_id' => 229
            ],
            [
                'nome' => "Ilminster",
                'pais_id' => 229
            ],
            [
                'nome' => "Immingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Ince-in-Makerfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Innerleithen",
                'pais_id' => 229
            ],
            [
                'nome' => "Inveraray",
                'pais_id' => 229
            ],
            [
                'nome' => "Inverbervie",
                'pais_id' => 229
            ],
            [
                'nome' => "Invergordon",
                'pais_id' => 229
            ],
            [
                'nome' => "Inverkeithing",
                'pais_id' => 229
            ],
            [
                'nome' => "Inverness / Inbhir Nis",
                'pais_id' => 229
            ],
            [
                'nome' => "Inverurie",
                'pais_id' => 229
            ],
            [
                'nome' => "Ipswich",
                'pais_id' => 229
            ],
            [
                'nome' => "Irlam",
                'pais_id' => 229
            ],
            [
                'nome' => "Irthlingborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Irvine",
                'pais_id' => 229
            ],
            [
                'nome' => "Ivybridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Jarrow",
                'pais_id' => 229
            ],
            [
                'nome' => "Jedburgh",
                'pais_id' => 229
            ],
            [
                'nome' => "Johnstone",
                'pais_id' => 229
            ],
            [
                'nome' => "Kearsley",
                'pais_id' => 229
            ],
            [
                'nome' => "Keighley",
                'pais_id' => 229
            ],
            [
                'nome' => "Keith",
                'pais_id' => 229
            ],
            [
                'nome' => "Kelso",
                'pais_id' => 229
            ],
            [
                'nome' => "Kempston",
                'pais_id' => 229
            ],
            [
                'nome' => "Kendal",
                'pais_id' => 229
            ],
            [
                'nome' => "Kenilworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Kesgrave",
                'pais_id' => 229
            ],
            [
                'nome' => "Keswick",
                'pais_id' => 229
            ],
            [
                'nome' => "Kettering",
                'pais_id' => 229
            ],
            [
                'nome' => "Keynsham",
                'pais_id' => 229
            ],
            [
                'nome' => "Kidderminster",
                'pais_id' => 229
            ],
            [
                'nome' => "Kidlington",
                'pais_id' => 229
            ],
            [
                'nome' => "Kidsgrove",
                'pais_id' => 229
            ],
            [
                'nome' => "Kidwelly / Cydweli",
                'pais_id' => 229
            ],
            [
                'nome' => "Kilkeel",
                'pais_id' => 229
            ],
            [
                'nome' => "Kilmarnock",
                'pais_id' => 229
            ],
            [
                'nome' => "Kilsyth",
                'pais_id' => 229
            ],
            [
                'nome' => "Kilwinning",
                'pais_id' => 229
            ],
            [
                'nome' => "Kimberley",
                'pais_id' => 229
            ],
            [
                'nome' => "Kinghorn",
                'pais_id' => 229
            ],
            [
                'nome' => "Kingsbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "King's Lynn",
                'pais_id' => 229
            ],
            [
                'nome' => "Kingsteignton",
                'pais_id' => 229
            ],
            [
                'nome' => "Kingston upon Hull",
                'pais_id' => 229
            ],
            [
                'nome' => "Kingswinford",
                'pais_id' => 229
            ],
            [
                'nome' => "Kington",
                'pais_id' => 229
            ],
            [
                'nome' => "Kingussie",
                'pais_id' => 229
            ],
            [
                'nome' => "Kinross",
                'pais_id' => 229
            ],
            [
                'nome' => "Kintore",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkby",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkby-in-Ashfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkby Lonsdale",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkbymoorside",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkby Stephen",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkcaldy",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkcudbright",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkham",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkintilloch",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirkwall",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirriemuir",
                'pais_id' => 229
            ],
            [
                'nome' => "Kirton in Lindsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Knaresborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Knighton / Tref-y-Clawdd",
                'pais_id' => 229
            ],
            [
                'nome' => "Knottingley",
                'pais_id' => 229
            ],
            [
                'nome' => "Knutsford",
                'pais_id' => 229
            ],
            [
                'nome' => "Ladybank",
                'pais_id' => 229
            ],
            [
                'nome' => "Lampeter / Llanbedr Pont Steffan",
                'pais_id' => 229
            ],
            [
                'nome' => "Lanark",
                'pais_id' => 229
            ],
            [
                'nome' => "Lancaster",
                'pais_id' => 229
            ],
            [
                'nome' => "Langholm",
                'pais_id' => 229
            ],
            [
                'nome' => "Langport",
                'pais_id' => 229
            ],
            [
                'nome' => "Largs",
                'pais_id' => 229
            ],
            [
                'nome' => "Larkhall",
                'pais_id' => 229
            ],
            [
                'nome' => "Larne",
                'pais_id' => 229
            ],
            [
                'nome' => "Lauder",
                'pais_id' => 229
            ],
            [
                'nome' => "Laugharne / Talacharn",
                'pais_id' => 229
            ],
            [
                'nome' => "Launceston",
                'pais_id' => 229
            ],
            [
                'nome' => "Laurencekirk",
                'pais_id' => 229
            ],
            [
                'nome' => "Leatherhead",
                'pais_id' => 229
            ],
            [
                'nome' => "Lechlade-on-Thames",
                'pais_id' => 229
            ],
            [
                'nome' => "Ledbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Leeds",
                'pais_id' => 229
            ],
            [
                'nome' => "Leek",
                'pais_id' => 229
            ],
            [
                'nome' => "Lees",
                'pais_id' => 229
            ],
            [
                'nome' => "Leicester",
                'pais_id' => 229
            ],
            [
                'nome' => "Leigh",
                'pais_id' => 229
            ],
            [
                'nome' => "Leigh-on-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Leighton Buzzard",
                'pais_id' => 229
            ],
            [
                'nome' => "Leiston",
                'pais_id' => 229
            ],
            [
                'nome' => "Leominster",
                'pais_id' => 229
            ],
            [
                'nome' => "Lerwick",
                'pais_id' => 229
            ],
            [
                'nome' => "Leslie",
                'pais_id' => 229
            ],
            [
                'nome' => "Letchworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Leven",
                'pais_id' => 229
            ],
            [
                'nome' => "Lewes",
                'pais_id' => 229
            ],
            [
                'nome' => "Leyburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Leyland",
                'pais_id' => 229
            ],
            [
                'nome' => "Lichfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Limavady",
                'pais_id' => 229
            ],
            [
                'nome' => "Lincoln",
                'pais_id' => 229
            ],
            [
                'nome' => "Linlithgow",
                'pais_id' => 229
            ],
            [
                'nome' => "Lisburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Liskeard",
                'pais_id' => 229
            ],
            [
                'nome' => "Litherland",
                'pais_id' => 229
            ],
            [
                'nome' => "Littleborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Littlehampton",
                'pais_id' => 229
            ],
            [
                'nome' => "Little Lever",
                'pais_id' => 229
            ],
            [
                'nome' => "Liverpool",
                'pais_id' => 229
            ],
            [
                'nome' => "Liversedge",
                'pais_id' => 229
            ],
            [
                'nome' => "Livingston",
                'pais_id' => 229
            ],
            [
                'nome' => "Llandeilo",
                'pais_id' => 229
            ],
            [
                'nome' => "Llandovery / Llanymddyfri",
                'pais_id' => 229
            ],
            [
                'nome' => "Llandrindod Wells / Llandrindod",
                'pais_id' => 229
            ],
            [
                'nome' => "Llandudno",
                'pais_id' => 229
            ],
            [
                'nome' => "Llandysul",
                'pais_id' => 229
            ],
            [
                'nome' => "Llanelli",
                'pais_id' => 229
            ],
            [
                'nome' => "Llanfair Caereinion",
                'pais_id' => 229
            ],
            [
                'nome' => "Llanfairfechan",
                'pais_id' => 229
            ],
            [
                'nome' => "Llanfyllin",
                'pais_id' => 229
            ],
            [
                'nome' => "Llangefni",
                'pais_id' => 229
            ],
            [
                'nome' => "Llangollen",
                'pais_id' => 229
            ],
            [
                'nome' => "Llanidloes",
                'pais_id' => 229
            ],
            [
                'nome' => "Llanrwst",
                'pais_id' => 229
            ],
            [
                'nome' => "Llantrisant",
                'pais_id' => 229
            ],
            [
                'nome' => "Llantwit Major / Llanilltud Fawr",
                'pais_id' => 229
            ],
            [
                'nome' => "Llanwrtyd Wells",
                'pais_id' => 229
            ],
            [
                'nome' => "Llanybydder / Llanybyther",
                'pais_id' => 229
            ],
            [
                'nome' => "Loanhead",
                'pais_id' => 229
            ],
            [
                'nome' => "Lochgelly",
                'pais_id' => 229
            ],
            [
                'nome' => "Lochgilphead / Ceann Loch Gilb",
                'pais_id' => 229
            ],
            [
                'nome' => "Lochmaben",
                'pais_id' => 229
            ],
            [
                'nome' => "Lockerbie",
                'pais_id' => 229
            ],
            [
                'nome' => "Loddon",
                'pais_id' => 229
            ],
            [
                'nome' => "Loftus",
                'pais_id' => 229
            ],
            [
                'nome' => "London",
                'pais_id' => 229
            ],
            [
                'nome' => "Longbenton",
                'pais_id' => 229
            ],
            [
                'nome' => "Long Eaton",
                'pais_id' => 229
            ],
            [
                'nome' => "Longridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Long Sutton",
                'pais_id' => 229
            ],
            [
                'nome' => "Longtown",
                'pais_id' => 229
            ],
            [
                'nome' => "Looe",
                'pais_id' => 229
            ],
            [
                'nome' => "Lossiemouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Lostwithiel",
                'pais_id' => 229
            ],
            [
                'nome' => "Loughborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Loughor / Casllwchwr",
                'pais_id' => 229
            ],
            [
                'nome' => "Loughton",
                'pais_id' => 229
            ],
            [
                'nome' => "Louth",
                'pais_id' => 229
            ],
            [
                'nome' => "Lowestoft",
                'pais_id' => 229
            ],
            [
                'nome' => "Ludgershall",
                'pais_id' => 229
            ],
            [
                'nome' => "Ludlow",
                'pais_id' => 229
            ],
            [
                'nome' => "Lurgan",
                'pais_id' => 229
            ],
            [
                'nome' => "Luton",
                'pais_id' => 229
            ],
            [
                'nome' => "Lutterworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Lydd",
                'pais_id' => 229
            ],
            [
                'nome' => "Lydney",
                'pais_id' => 229
            ],
            [
                'nome' => "Lyme Regis",
                'pais_id' => 229
            ],
            [
                'nome' => "Lymington",
                'pais_id' => 229
            ],
            [
                'nome' => "Lymm",
                'pais_id' => 229
            ],
            [
                'nome' => "Lynton",
                'pais_id' => 229
            ],
            [
                'nome' => "Lytham St Anne's",
                'pais_id' => 229
            ],
            [
                'nome' => "Mablethorpe",
                'pais_id' => 229
            ],
            [
                'nome' => "Macclesfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Macduff",
                'pais_id' => 229
            ],
            [
                'nome' => "Machynlleth",
                'pais_id' => 229
            ],
            [
                'nome' => "Madeley",
                'pais_id' => 229
            ],
            [
                'nome' => "Maesteg",
                'pais_id' => 229
            ],
            [
                'nome' => "Magherafelt",
                'pais_id' => 229
            ],
            [
                'nome' => "Maghull",
                'pais_id' => 229
            ],
            [
                'nome' => "Maidenhead",
                'pais_id' => 229
            ],
            [
                'nome' => "Maidstone",
                'pais_id' => 229
            ],
            [
                'nome' => "Maldon",
                'pais_id' => 229
            ],
            [
                'nome' => "Malmesbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Maltby",
                'pais_id' => 229
            ],
            [
                'nome' => "Malton",
                'pais_id' => 229
            ],
            [
                'nome' => "Manchester",
                'pais_id' => 229
            ],
            [
                'nome' => "Manningtree",
                'pais_id' => 229
            ],
            [
                'nome' => "Mansfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Mansfield Woodhouse",
                'pais_id' => 229
            ],
            [
                'nome' => "March",
                'pais_id' => 229
            ],
            [
                'nome' => "Margate",
                'pais_id' => 229
            ],
            [
                'nome' => "Market Bosworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Market Deeping",
                'pais_id' => 229
            ],
            [
                'nome' => "Market Drayton",
                'pais_id' => 229
            ],
            [
                'nome' => "Market Harborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Market Jew / Marazion",
                'pais_id' => 229
            ],
            [
                'nome' => "Market Rasen",
                'pais_id' => 229
            ],
            [
                'nome' => "Market Warsop",
                'pais_id' => 229
            ],
            [
                'nome' => "Market Weighton",
                'pais_id' => 229
            ],
            [
                'nome' => "Markinch",
                'pais_id' => 229
            ],
            [
                'nome' => "Marlborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Marlow",
                'pais_id' => 229
            ],
            [
                'nome' => "Marple",
                'pais_id' => 229
            ],
            [
                'nome' => "Marske-by-the-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Maryport",
                'pais_id' => 229
            ],
            [
                'nome' => "Masham",
                'pais_id' => 229
            ],
            [
                'nome' => "Matlock",
                'pais_id' => 229
            ],
            [
                'nome' => "Maybole",
                'pais_id' => 229
            ],
            [
                'nome' => "Meadow Well",
                'pais_id' => 229
            ],
            [
                'nome' => "Melksham",
                'pais_id' => 229
            ],
            [
                'nome' => "Melrose",
                'pais_id' => 229
            ],
            [
                'nome' => "Meltham",
                'pais_id' => 229
            ],
            [
                'nome' => "Melton Mowbray",
                'pais_id' => 229
            ],
            [
                'nome' => "Menai Bridge / Porthaethwy",
                'pais_id' => 229
            ],
            [
                'nome' => "Mere",
                'pais_id' => 229
            ],
            [
                'nome' => "Merthyr Tydfil / Merthyr Tudful",
                'pais_id' => 229
            ],
            [
                'nome' => "Methil",
                'pais_id' => 229
            ],
            [
                'nome' => "Mexborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Middleham",
                'pais_id' => 229
            ],
            [
                'nome' => "Middlesbrough",
                'pais_id' => 229
            ],
            [
                'nome' => "Middleton",
                'pais_id' => 229
            ],
            [
                'nome' => "Middlewich",
                'pais_id' => 229
            ],
            [
                'nome' => "Midhurst",
                'pais_id' => 229
            ],
            [
                'nome' => "Midsomer Norton",
                'pais_id' => 229
            ],
            [
                'nome' => "Mildenhall",
                'pais_id' => 229
            ],
            [
                'nome' => "Milford Haven / Aberdaugleddau",
                'pais_id' => 229
            ],
            [
                'nome' => "Millom",
                'pais_id' => 229
            ],
            [
                'nome' => "Millport",
                'pais_id' => 229
            ],
            [
                'nome' => "Milngavie",
                'pais_id' => 229
            ],
            [
                'nome' => "Milnrow",
                'pais_id' => 229
            ],
            [
                'nome' => "Milton Keynes",
                'pais_id' => 229
            ],
            [
                'nome' => "Minchinhampton",
                'pais_id' => 229
            ],
            [
                'nome' => "Minehead",
                'pais_id' => 229
            ],
            [
                'nome' => "Minster",
                'pais_id' => 229
            ],
            [
                'nome' => "Mirfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Mitcheldean",
                'pais_id' => 229
            ],
            [
                'nome' => "Moffat",
                'pais_id' => 229
            ],
            [
                'nome' => "Mold / Yr Wyddgrug",
                'pais_id' => 229
            ],
            [
                'nome' => "Monifieth",
                'pais_id' => 229
            ],
            [
                'nome' => "Monmouth / Trefynwy",
                'pais_id' => 229
            ],
            [
                'nome' => "Montgomery / Trefaldwyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Montrose",
                'pais_id' => 229
            ],
            [
                'nome' => "Morecambe",
                'pais_id' => 229
            ],
            [
                'nome' => "Moretonhampstead",
                'pais_id' => 229
            ],
            [
                'nome' => "Moreton-in-Marsh",
                'pais_id' => 229
            ],
            [
                'nome' => "Morley",
                'pais_id' => 229
            ],
            [
                'nome' => "Morpeth",
                'pais_id' => 229
            ],
            [
                'nome' => "Mossley",
                'pais_id' => 229
            ],
            [
                'nome' => "Motherwell",
                'pais_id' => 229
            ],
            [
                'nome' => "Mountain Ash / Aberpennar",
                'pais_id' => 229
            ],
            [
                'nome' => "Much Wenlock",
                'pais_id' => 229
            ],
            [
                'nome' => "Musselburgh",
                'pais_id' => 229
            ],
            [
                'nome' => "Nailsea",
                'pais_id' => 229
            ],
            [
                'nome' => "Nailsworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Nairn",
                'pais_id' => 229
            ],
            [
                'nome' => "Nantwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Nantyglo",
                'pais_id' => 229
            ],
            [
                'nome' => "Narberth / Arberth",
                'pais_id' => 229
            ],
            [
                'nome' => "Neath / Castell-nedd",
                'pais_id' => 229
            ],
            [
                'nome' => "Needham Market",
                'pais_id' => 229
            ],
            [
                'nome' => "Nefyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Nelson",
                'pais_id' => 229
            ],
            [
                'nome' => "Neston",
                'pais_id' => 229
            ],
            [
                'nome' => "New Alresford",
                'pais_id' => 229
            ],
            [
                'nome' => "Newark-on-Trent",
                'pais_id' => 229
            ],
            [
                'nome' => "Newbiggin-by-the-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Newbridge / Trecceln",
                'pais_id' => 229
            ],
            [
                'nome' => "Newburgh",
                'pais_id' => 229
            ],
            [
                'nome' => "Newbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Newcastle",
                'pais_id' => 229
            ],
            [
                'nome' => "Newcastle Emlyn / Castell Newydd Emlyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Newcastle-under-Lyme",
                'pais_id' => 229
            ],
            [
                'nome' => "Newcastle upon Tyne",
                'pais_id' => 229
            ],
            [
                'nome' => "Newent",
                'pais_id' => 229
            ],
            [
                'nome' => "New Galloway",
                'pais_id' => 229
            ],
            [
                'nome' => "Newhaven",
                'pais_id' => 229
            ],
            [
                'nome' => "Newlyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Newmarket",
                'pais_id' => 229
            ],
            [
                'nome' => "New Mills",
                'pais_id' => 229
            ],
            [
                'nome' => "Newmilns",
                'pais_id' => 229
            ],
            [
                'nome' => "New Milton",
                'pais_id' => 229
            ],
            [
                'nome' => "Newport",
                'pais_id' => 229
            ],
            [
                'nome' => "Newport",
                'pais_id' => 229
            ],
            [
                'nome' => "Newport / Casnewydd",
                'pais_id' => 229
            ],
            [
                'nome' => "Newport-on-Tay",
                'pais_id' => 229
            ],
            [
                'nome' => "Newport Pagnell",
                'pais_id' => 229
            ],
            [
                'nome' => "Newport / Trefdraeth",
                'pais_id' => 229
            ],
            [
                'nome' => "Newquay",
                'pais_id' => 229
            ],
            [
                'nome' => "New Quay / Ceinewydd",
                'pais_id' => 229
            ],
            [
                'nome' => "New Romney",
                'pais_id' => 229
            ],
            [
                'nome' => "Newry",
                'pais_id' => 229
            ],
            [
                'nome' => "Newton Abbot",
                'pais_id' => 229
            ],
            [
                'nome' => "Newton Aycliffe",
                'pais_id' => 229
            ],
            [
                'nome' => "Newton-le-Willows",
                'pais_id' => 229
            ],
            [
                'nome' => "Newton Stewart",
                'pais_id' => 229
            ],
            [
                'nome' => "Newtownabbey",
                'pais_id' => 229
            ],
            [
                'nome' => "Newtownards",
                'pais_id' => 229
            ],
            [
                'nome' => "Newtown / Y Drenewydd",
                'pais_id' => 229
            ],
            [
                'nome' => "Neyland",
                'pais_id' => 229
            ],
            [
                'nome' => "Normanton",
                'pais_id' => 229
            ],
            [
                'nome' => "Northallerton",
                'pais_id' => 229
            ],
            [
                'nome' => "Northam",
                'pais_id' => 229
            ],
            [
                'nome' => "Northampton",
                'pais_id' => 229
            ],
            [
                'nome' => "North Berwick",
                'pais_id' => 229
            ],
            [
                'nome' => "Northfleet",
                'pais_id' => 229
            ],
            [
                'nome' => "North Hykeham",
                'pais_id' => 229
            ],
            [
                'nome' => "Northleach",
                'pais_id' => 229
            ],
            [
                'nome' => "North Petherton",
                'pais_id' => 229
            ],
            [
                'nome' => "North Tawton",
                'pais_id' => 229
            ],
            [
                'nome' => "North Walsham",
                'pais_id' => 229
            ],
            [
                'nome' => "Northwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Norton-on-Derwent",
                'pais_id' => 229
            ],
            [
                'nome' => "Norwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Nottingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Nuneaton",
                'pais_id' => 229
            ],
            [
                'nome' => "Oakham",
                'pais_id' => 229
            ],
            [
                'nome' => "Oban",
                'pais_id' => 229
            ],
            [
                'nome' => "Okehampton",
                'pais_id' => 229
            ],
            [
                'nome' => "Oldbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Oldham",
                'pais_id' => 229
            ],
            [
                'nome' => "Oldmeldrum",
                'pais_id' => 229
            ],
            [
                'nome' => "Olney",
                'pais_id' => 229
            ],
            [
                'nome' => "Omagh",
                'pais_id' => 229
            ],
            [
                'nome' => "Ormskirk",
                'pais_id' => 229
            ],
            [
                'nome' => "Ossett",
                'pais_id' => 229
            ],
            [
                'nome' => "Oswaldtwistle",
                'pais_id' => 229
            ],
            [
                'nome' => "Oswestry / Croesoswallt",
                'pais_id' => 229
            ],
            [
                'nome' => "Otley",
                'pais_id' => 229
            ],
            [
                'nome' => "Ottery St Mary",
                'pais_id' => 229
            ],
            [
                'nome' => "Oundle",
                'pais_id' => 229
            ],
            [
                'nome' => "Oxford",
                'pais_id' => 229
            ],
            [
                'nome' => "Oxted",
                'pais_id' => 229
            ],
            [
                'nome' => "Paddock Wood",
                'pais_id' => 229
            ],
            [
                'nome' => "Padiham",
                'pais_id' => 229
            ],
            [
                'nome' => "Padstow",
                'pais_id' => 229
            ],
            [
                'nome' => "Paignton",
                'pais_id' => 229
            ],
            [
                'nome' => "Painswick",
                'pais_id' => 229
            ],
            [
                'nome' => "Paisley",
                'pais_id' => 229
            ],
            [
                'nome' => "Partington",
                'pais_id' => 229
            ],
            [
                'nome' => "Pateley Bridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Peacehaven",
                'pais_id' => 229
            ],
            [
                'nome' => "Peebles",
                'pais_id' => 229
            ],
            [
                'nome' => "Peel",
                'pais_id' => 229
            ],
            [
                'nome' => "Pembroke Dock / Doc Penfro",
                'pais_id' => 229
            ],
            [
                'nome' => "Pembroke / Penfro",
                'pais_id' => 229
            ],
            [
                'nome' => "Penarth",
                'pais_id' => 229
            ],
            [
                'nome' => "Pencoed",
                'pais_id' => 229
            ],
            [
                'nome' => "Penicuik",
                'pais_id' => 229
            ],
            [
                'nome' => "Penistone",
                'pais_id' => 229
            ],
            [
                'nome' => "Penkridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Penmaenmawr",
                'pais_id' => 229
            ],
            [
                'nome' => "Penrith",
                'pais_id' => 229
            ],
            [
                'nome' => "Penryn",
                'pais_id' => 229
            ],
            [
                'nome' => "Penzance",
                'pais_id' => 229
            ],
            [
                'nome' => "Pershore",
                'pais_id' => 229
            ],
            [
                'nome' => "Perth",
                'pais_id' => 229
            ],
            [
                'nome' => "Peterborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Peterhead",
                'pais_id' => 229
            ],
            [
                'nome' => "Peterlee",
                'pais_id' => 229
            ],
            [
                'nome' => "Petersfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Petworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Pickering",
                'pais_id' => 229
            ],
            [
                'nome' => "Pitlochry",
                'pais_id' => 229
            ],
            [
                'nome' => "Pittenweem",
                'pais_id' => 229
            ],
            [
                'nome' => "Plymouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Pocklington",
                'pais_id' => 229
            ],
            [
                'nome' => "Polegate",
                'pais_id' => 229
            ],
            [
                'nome' => "Pontardawe",
                'pais_id' => 229
            ],
            [
                'nome' => "Pontarddulais",
                'pais_id' => 229
            ],
            [
                'nome' => "Pontefract",
                'pais_id' => 229
            ],
            [
                'nome' => "Ponteland",
                'pais_id' => 229
            ],
            [
                'nome' => "Pontllanfraith",
                'pais_id' => 229
            ],
            [
                'nome' => "Pontycymer",
                'pais_id' => 229
            ],
            [
                'nome' => "Pontypool / Pont-y-pŵl",
                'pais_id' => 229
            ],
            [
                'nome' => "Pontypridd",
                'pais_id' => 229
            ],
            [
                'nome' => "Poole",
                'pais_id' => 229
            ],
            [
                'nome' => "Portadown",
                'pais_id' => 229
            ],
            [
                'nome' => "Port Glasgow",
                'pais_id' => 229
            ],
            [
                'nome' => "Porth",
                'pais_id' => 229
            ],
            [
                'nome' => "Porthcawl",
                'pais_id' => 229
            ],
            [
                'nome' => "Porthmadog",
                'pais_id' => 229
            ],
            [
                'nome' => "Portishead",
                'pais_id' => 229
            ],
            [
                'nome' => "Portlethen",
                'pais_id' => 229
            ],
            [
                'nome' => "Portrush",
                'pais_id' => 229
            ],
            [
                'nome' => "Portsmouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Portsoy",
                'pais_id' => 229
            ],
            [
                'nome' => "Portstewart",
                'pais_id' => 229
            ],
            [
                'nome' => "Port Talbot",
                'pais_id' => 229
            ],
            [
                'nome' => "Potters Bar",
                'pais_id' => 229
            ],
            [
                'nome' => "Potton",
                'pais_id' => 229
            ],
            [
                'nome' => "Poulton-le-Fylde",
                'pais_id' => 229
            ],
            [
                'nome' => "Poynton",
                'pais_id' => 229
            ],
            [
                'nome' => "Prescot",
                'pais_id' => 229
            ],
            [
                'nome' => "Prestatyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Presteigne / Llanandras",
                'pais_id' => 229
            ],
            [
                'nome' => "Preston",
                'pais_id' => 229
            ],
            [
                'nome' => "Prestonpans",
                'pais_id' => 229
            ],
            [
                'nome' => "Prestwick",
                'pais_id' => 229
            ],
            [
                'nome' => "Princes Risborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Prudhoe",
                'pais_id' => 229
            ],
            [
                'nome' => "Pudsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Pwllheli",
                'pais_id' => 229
            ],
            [
                'nome' => "Queenborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Queensferry",
                'pais_id' => 229
            ],
            [
                'nome' => "Radcliffe",
                'pais_id' => 229
            ],
            [
                'nome' => "Radlett",
                'pais_id' => 229
            ],
            [
                'nome' => "Radstock",
                'pais_id' => 229
            ],
            [
                'nome' => "Rainford",
                'pais_id' => 229
            ],
            [
                'nome' => "Ramsbottom",
                'pais_id' => 229
            ],
            [
                'nome' => "Ramsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Ramsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Ramsgate",
                'pais_id' => 229
            ],
            [
                'nome' => "Randalstown",
                'pais_id' => 229
            ],
            [
                'nome' => "Raunds",
                'pais_id' => 229
            ],
            [
                'nome' => "Rawmarsh",
                'pais_id' => 229
            ],
            [
                'nome' => "Rawtenstall",
                'pais_id' => 229
            ],
            [
                'nome' => "Rayleigh",
                'pais_id' => 229
            ],
            [
                'nome' => "Reading",
                'pais_id' => 229
            ],
            [
                'nome' => "Redcar",
                'pais_id' => 229
            ],
            [
                'nome' => "Redditch",
                'pais_id' => 229
            ],
            [
                'nome' => "Redhill",
                'pais_id' => 229
            ],
            [
                'nome' => "Redruth",
                'pais_id' => 229
            ],
            [
                'nome' => "Reepham",
                'pais_id' => 229
            ],
            [
                'nome' => "Reigate",
                'pais_id' => 229
            ],
            [
                'nome' => "Renfrew",
                'pais_id' => 229
            ],
            [
                'nome' => "Retford",
                'pais_id' => 229
            ],
            [
                'nome' => "Rhayader / Rhaeadr Gwy",
                'pais_id' => 229
            ],
            [
                'nome' => "Rhondda",
                'pais_id' => 229
            ],
            [
                'nome' => "Rhosgadfan",
                'pais_id' => 229
            ],
            [
                'nome' => "Rhuddlan",
                'pais_id' => 229
            ],
            [
                'nome' => "Rhyl",
                'pais_id' => 229
            ],
            [
                'nome' => "Rhymney / Rhymni",
                'pais_id' => 229
            ],
            [
                'nome' => "Richmond",
                'pais_id' => 229
            ],
            [
                'nome' => "Richmond",
                'pais_id' => 229
            ],
            [
                'nome' => "Rickmansworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Ringwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Ripley",
                'pais_id' => 229
            ],
            [
                'nome' => "Ripon",
                'pais_id' => 229
            ],
            [
                'nome' => "Risca / Rhisga",
                'pais_id' => 229
            ],
            [
                'nome' => "Rishton",
                'pais_id' => 229
            ],
            [
                'nome' => "Rochdale",
                'pais_id' => 229
            ],
            [
                'nome' => "Rochester",
                'pais_id' => 229
            ],
            [
                'nome' => "Rochford",
                'pais_id' => 229
            ],
            [
                'nome' => "Romiley",
                'pais_id' => 229
            ],
            [
                'nome' => "Romsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Rosehearty",
                'pais_id' => 229
            ],
            [
                'nome' => "Ross-on-Wye",
                'pais_id' => 229
            ],
            [
                'nome' => "Rothbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Rotherham",
                'pais_id' => 229
            ],
            [
                'nome' => "Rothes",
                'pais_id' => 229
            ],
            [
                'nome' => "Rothesay",
                'pais_id' => 229
            ],
            [
                'nome' => "Rothwell",
                'pais_id' => 229
            ],
            [
                'nome' => "Rowley Regis",
                'pais_id' => 229
            ],
            [
                'nome' => "Royal Leamington Spa",
                'pais_id' => 229
            ],
            [
                'nome' => "Royal Sutton Coldfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Royal Tunbridge Wells",
                'pais_id' => 229
            ],
            [
                'nome' => "Royal Wootton Bassett",
                'pais_id' => 229
            ],
            [
                'nome' => "Royston",
                'pais_id' => 229
            ],
            [
                'nome' => "Royston",
                'pais_id' => 229
            ],
            [
                'nome' => "Royton",
                'pais_id' => 229
            ],
            [
                'nome' => "Rugby",
                'pais_id' => 229
            ],
            [
                'nome' => "Rugeley",
                'pais_id' => 229
            ],
            [
                'nome' => "Runcorn",
                'pais_id' => 229
            ],
            [
                'nome' => "Rushden",
                'pais_id' => 229
            ],
            [
                'nome' => "Rutherglen",
                'pais_id' => 229
            ],
            [
                'nome' => "Ruthin / Rhuthun",
                'pais_id' => 229
            ],
            [
                'nome' => "Ryde",
                'pais_id' => 229
            ],
            [
                'nome' => "Rye",
                'pais_id' => 229
            ],
            [
                'nome' => "Ryton",
                'pais_id' => 229
            ],
            [
                'nome' => "Saffron Walden",
                'pais_id' => 229
            ],
            [
                'nome' => "Salcombe",
                'pais_id' => 229
            ],
            [
                'nome' => "Sale",
                'pais_id' => 229
            ],
            [
                'nome' => "Salford",
                'pais_id' => 229
            ],
            [
                'nome' => "Salisbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Saltash",
                'pais_id' => 229
            ],
            [
                'nome' => "Saltburn-by-the-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Saltcoats",
                'pais_id' => 229
            ],
            [
                'nome' => "Sandbach",
                'pais_id' => 229
            ],
            [
                'nome' => "Sandhurst",
                'pais_id' => 229
            ],
            [
                'nome' => "Sandiacre",
                'pais_id' => 229
            ],
            [
                'nome' => "Sandown",
                'pais_id' => 229
            ],
            [
                'nome' => "Sandwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Sandy",
                'pais_id' => 229
            ],
            [
                'nome' => "Sanquhar",
                'pais_id' => 229
            ],
            [
                'nome' => "Sawbridgeworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Saxmundham",
                'pais_id' => 229
            ],
            [
                'nome' => "Scarborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Scunthorpe",
                'pais_id' => 229
            ],
            [
                'nome' => "Seaford",
                'pais_id' => 229
            ],
            [
                'nome' => "Seaham",
                'pais_id' => 229
            ],
            [
                'nome' => "Seaton",
                'pais_id' => 229
            ],
            [
                'nome' => "Sedbergh",
                'pais_id' => 229
            ],
            [
                'nome' => "Sedgefield",
                'pais_id' => 229
            ],
            [
                'nome' => "Sedgley",
                'pais_id' => 229
            ],
            [
                'nome' => "Selby",
                'pais_id' => 229
            ],
            [
                'nome' => "Selkirk",
                'pais_id' => 229
            ],
            [
                'nome' => "Selsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Settle",
                'pais_id' => 229
            ],
            [
                'nome' => "Sevenoaks",
                'pais_id' => 229
            ],
            [
                'nome' => "Shaftesbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Shanklin",
                'pais_id' => 229
            ],
            [
                'nome' => "Shaw",
                'pais_id' => 229
            ],
            [
                'nome' => "Sheerness",
                'pais_id' => 229
            ],
            [
                'nome' => "Sheffield",
                'pais_id' => 229
            ],
            [
                'nome' => "Shefford",
                'pais_id' => 229
            ],
            [
                'nome' => "Shepshed",
                'pais_id' => 229
            ],
            [
                'nome' => "Shepton Mallet",
                'pais_id' => 229
            ],
            [
                'nome' => "Sherborne",
                'pais_id' => 229
            ],
            [
                'nome' => "Sherford",
                'pais_id' => 229
            ],
            [
                'nome' => "Sheringham",
                'pais_id' => 229
            ],
            [
                'nome' => "Shildon",
                'pais_id' => 229
            ],
            [
                'nome' => "Shipley",
                'pais_id' => 229
            ],
            [
                'nome' => "Shipston-on-Stour",
                'pais_id' => 229
            ],
            [
                'nome' => "Shirebrook",
                'pais_id' => 229
            ],
            [
                'nome' => "Shoreham-by-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Shotton",
                'pais_id' => 229
            ],
            [
                'nome' => "Shrewsbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Sidmouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Silloth",
                'pais_id' => 229
            ],
            [
                'nome' => "Silsden",
                'pais_id' => 229
            ],
            [
                'nome' => "Sittingbourne",
                'pais_id' => 229
            ],
            [
                'nome' => "Skegness",
                'pais_id' => 229
            ],
            [
                'nome' => "Skelmersdale",
                'pais_id' => 229
            ],
            [
                'nome' => "Skelton",
                'pais_id' => 229
            ],
            [
                'nome' => "Skipton",
                'pais_id' => 229
            ],
            [
                'nome' => "Sleaford",
                'pais_id' => 229
            ],
            [
                'nome' => "Slough",
                'pais_id' => 229
            ],
            [
                'nome' => "Smethwick",
                'pais_id' => 229
            ],
            [
                'nome' => "Snodland",
                'pais_id' => 229
            ],
            [
                'nome' => "Soham",
                'pais_id' => 229
            ],
            [
                'nome' => "Solihull",
                'pais_id' => 229
            ],
            [
                'nome' => "Somerton",
                'pais_id' => 229
            ],
            [
                'nome' => "Southam",
                'pais_id' => 229
            ],
            [
                'nome' => "Southampton",
                'pais_id' => 229
            ],
            [
                'nome' => "Southborough",
                'pais_id' => 229
            ],
            [
                'nome' => "South Cave",
                'pais_id' => 229
            ],
            [
                'nome' => "South Elmsall",
                'pais_id' => 229
            ],
            [
                'nome' => "Southend-on-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "South Kirkby",
                'pais_id' => 229
            ],
            [
                'nome' => "Southminster",
                'pais_id' => 229
            ],
            [
                'nome' => "South Molton",
                'pais_id' => 229
            ],
            [
                'nome' => "South Petherton",
                'pais_id' => 229
            ],
            [
                'nome' => "Southport",
                'pais_id' => 229
            ],
            [
                'nome' => "South Shields",
                'pais_id' => 229
            ],
            [
                'nome' => "Southwell",
                'pais_id' => 229
            ],
            [
                'nome' => "Southwick",
                'pais_id' => 229
            ],
            [
                'nome' => "Southwold",
                'pais_id' => 229
            ],
            [
                'nome' => "South Woodham Ferrers",
                'pais_id' => 229
            ],
            [
                'nome' => "Sowerby Bridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Spalding",
                'pais_id' => 229
            ],
            [
                'nome' => "Spennymoor",
                'pais_id' => 229
            ],
            [
                'nome' => "Spilsby",
                'pais_id' => 229
            ],
            [
                'nome' => "Stafford",
                'pais_id' => 229
            ],
            [
                'nome' => "Staines-upon-Thames",
                'pais_id' => 229
            ],
            [
                'nome' => "St Albans",
                'pais_id' => 229
            ],
            [
                'nome' => "Stalbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Stalham",
                'pais_id' => 229
            ],
            [
                'nome' => "Stalybridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Stamford",
                'pais_id' => 229
            ],
            [
                'nome' => "Standish",
                'pais_id' => 229
            ],
            [
                'nome' => "St Andrews",
                'pais_id' => 229
            ],
            [
                'nome' => "Stanford-le-Hope",
                'pais_id' => 229
            ],
            [
                'nome' => "Stanhope",
                'pais_id' => 229
            ],
            [
                'nome' => "Stanley",
                'pais_id' => 229
            ],
            [
                'nome' => "Stansted Mountfitchet",
                'pais_id' => 229
            ],
            [
                'nome' => "Stapleford",
                'pais_id' => 229
            ],
            [
                'nome' => "St Asaph / Llanelwy",
                'pais_id' => 229
            ],
            [
                'nome' => "St Austell",
                'pais_id' => 229
            ],
            [
                'nome' => "Staveley",
                'pais_id' => 229
            ],
            [
                'nome' => "St Blazey",
                'pais_id' => 229
            ],
            [
                'nome' => "St Clears / Sanclêr",
                'pais_id' => 229
            ],
            [
                'nome' => "St Columb Major",
                'pais_id' => 229
            ],
            [
                'nome' => "St Davids / Tyddewi",
                'pais_id' => 229
            ],
            [
                'nome' => "Stevenage",
                'pais_id' => 229
            ],
            [
                'nome' => "Stevenston",
                'pais_id' => 229
            ],
            [
                'nome' => "Stewarton",
                'pais_id' => 229
            ],
            [
                'nome' => "Steyning",
                'pais_id' => 229
            ],
            [
                'nome' => "St Helens",
                'pais_id' => 229
            ],
            [
                'nome' => "Stirling",
                'pais_id' => 229
            ],
            [
                'nome' => "St Ives",
                'pais_id' => 229
            ],
            [
                'nome' => "St Ives",
                'pais_id' => 229
            ],
            [
                'nome' => "St Just / St Just in Penwith",
                'pais_id' => 229
            ],
            [
                'nome' => "St Neots",
                'pais_id' => 229
            ],
            [
                'nome' => "Stockport",
                'pais_id' => 229
            ],
            [
                'nome' => "Stocksbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Stockton-on-Tees",
                'pais_id' => 229
            ],
            [
                'nome' => "Stoke-on-Trent",
                'pais_id' => 229
            ],
            [
                'nome' => "Stone",
                'pais_id' => 229
            ],
            [
                'nome' => "Stonehaven",
                'pais_id' => 229
            ],
            [
                'nome' => "Stonehouse",
                'pais_id' => 229
            ],
            [
                'nome' => "Stornoway / Steòrnabhagh",
                'pais_id' => 229
            ],
            [
                'nome' => "Stotfold",
                'pais_id' => 229
            ],
            [
                'nome' => "Stourbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Stourport-on-Severn",
                'pais_id' => 229
            ],
            [
                'nome' => "Stowmarket",
                'pais_id' => 229
            ],
            [
                'nome' => "Stow-on-the-Wold",
                'pais_id' => 229
            ],
            [
                'nome' => "Strabane",
                'pais_id' => 229
            ],
            [
                'nome' => "Stranraer",
                'pais_id' => 229
            ],
            [
                'nome' => "Stratford-upon-Avon",
                'pais_id' => 229
            ],
            [
                'nome' => "Stratton",
                'pais_id' => 229
            ],
            [
                'nome' => "Street",
                'pais_id' => 229
            ],
            [
                'nome' => "Stretford",
                'pais_id' => 229
            ],
            [
                'nome' => "Stromness",
                'pais_id' => 229
            ],
            [
                'nome' => "Stroud",
                'pais_id' => 229
            ],
            [
                'nome' => "Sturminster Newton",
                'pais_id' => 229
            ],
            [
                'nome' => "Sudbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Sunbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Sunbury-on-Thames",
                'pais_id' => 229
            ],
            [
                'nome' => "Sunderland",
                'pais_id' => 229
            ],
            [
                'nome' => "Sutton Coldfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Sutton in Ashfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Swadlincote",
                'pais_id' => 229
            ],
            [
                'nome' => "Swaffham",
                'pais_id' => 229
            ],
            [
                'nome' => "Swanage",
                'pais_id' => 229
            ],
            [
                'nome' => "Swanley",
                'pais_id' => 229
            ],
            [
                'nome' => "Swanscombe",
                'pais_id' => 229
            ],
            [
                'nome' => "Swansea / Abertawe",
                'pais_id' => 229
            ],
            [
                'nome' => "Swindon",
                'pais_id' => 229
            ],
            [
                'nome' => "Swinton",
                'pais_id' => 229
            ],
            [
                'nome' => "Syston",
                'pais_id' => 229
            ],
            [
                'nome' => "Tadcaster",
                'pais_id' => 229
            ],
            [
                'nome' => "Tadley",
                'pais_id' => 229
            ],
            [
                'nome' => "Tain",
                'pais_id' => 229
            ],
            [
                'nome' => "Talbot Green",
                'pais_id' => 229
            ],
            [
                'nome' => "Talgarth",
                'pais_id' => 229
            ],
            [
                'nome' => "Tamworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Taunton",
                'pais_id' => 229
            ],
            [
                'nome' => "Tavistock",
                'pais_id' => 229
            ],
            [
                'nome' => "Tayport",
                'pais_id' => 229
            ],
            [
                'nome' => "Teignmouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Telford",
                'pais_id' => 229
            ],
            [
                'nome' => "Tenbury Wells",
                'pais_id' => 229
            ],
            [
                'nome' => "Tenby / Dinbych-y-Pysgod",
                'pais_id' => 229
            ],
            [
                'nome' => "Tenterden",
                'pais_id' => 229
            ],
            [
                'nome' => "Tetbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Tewkesbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Thame",
                'pais_id' => 229
            ],
            [
                'nome' => "Thatcham",
                'pais_id' => 229
            ],
            [
                'nome' => "Thaxted",
                'pais_id' => 229
            ],
            [
                'nome' => "Thetford",
                'pais_id' => 229
            ],
            [
                'nome' => "Thirsk",
                'pais_id' => 229
            ],
            [
                'nome' => "Thornaby-on-Tees",
                'pais_id' => 229
            ],
            [
                'nome' => "Thornbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Thorne",
                'pais_id' => 229
            ],
            [
                'nome' => "Thornton",
                'pais_id' => 229
            ],
            [
                'nome' => "Thrapston",
                'pais_id' => 229
            ],
            [
                'nome' => "Thurnscoe",
                'pais_id' => 229
            ],
            [
                'nome' => "Thurso",
                'pais_id' => 229
            ],
            [
                'nome' => "Tickhill",
                'pais_id' => 229
            ],
            [
                'nome' => "Tidworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Tilbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Tillicoultry",
                'pais_id' => 229
            ],
            [
                'nome' => "Tipton",
                'pais_id' => 229
            ],
            [
                'nome' => "Tiverton",
                'pais_id' => 229
            ],
            [
                'nome' => "Tobermory",
                'pais_id' => 229
            ],
            [
                'nome' => "Todmorden",
                'pais_id' => 229
            ],
            [
                'nome' => "Tonbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Tonypandy",
                'pais_id' => 229
            ],
            [
                'nome' => "Topsham",
                'pais_id' => 229
            ],
            [
                'nome' => "Torpoint",
                'pais_id' => 229
            ],
            [
                'nome' => "Torquay",
                'pais_id' => 229
            ],
            [
                'nome' => "Totnes",
                'pais_id' => 229
            ],
            [
                'nome' => "Totton",
                'pais_id' => 229
            ],
            [
                'nome' => "Towcester",
                'pais_id' => 229
            ],
            [
                'nome' => "Tow Law",
                'pais_id' => 229
            ],
            [
                'nome' => "Tranent",
                'pais_id' => 229
            ],
            [
                'nome' => "Trawden",
                'pais_id' => 229
            ],
            [
                'nome' => "Tredegar",
                'pais_id' => 229
            ],
            [
                'nome' => "Tregaron",
                'pais_id' => 229
            ],
            [
                'nome' => "Treharris",
                'pais_id' => 229
            ],
            [
                'nome' => "Treherbert",
                'pais_id' => 229
            ],
            [
                'nome' => "Treorchy / Treorci",
                'pais_id' => 229
            ],
            [
                'nome' => "Tring",
                'pais_id' => 229
            ],
            [
                'nome' => "Troon",
                'pais_id' => 229
            ],
            [
                'nome' => "Trowbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Truro",
                'pais_id' => 229
            ],
            [
                'nome' => "Turriff",
                'pais_id' => 229
            ],
            [
                'nome' => "Tyldesley",
                'pais_id' => 229
            ],
            [
                'nome' => "Tynemouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Tywyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Uckfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Uddingston",
                'pais_id' => 229
            ],
            [
                'nome' => "Ulverston",
                'pais_id' => 229
            ],
            [
                'nome' => "Uppingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Urmston",
                'pais_id' => 229
            ],
            [
                'nome' => "Usk / Brynbuga",
                'pais_id' => 229
            ],
            [
                'nome' => "Uttoxeter",
                'pais_id' => 229
            ],
            [
                'nome' => "Ventnor",
                'pais_id' => 229
            ],
            [
                'nome' => "Verwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Wadebridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Wadhurst",
                'pais_id' => 229
            ],
            [
                'nome' => "Wainfleet All Saints",
                'pais_id' => 229
            ],
            [
                'nome' => "Wakefield",
                'pais_id' => 229
            ],
            [
                'nome' => "Walkden",
                'pais_id' => 229
            ],
            [
                'nome' => "Wallasey",
                'pais_id' => 229
            ],
            [
                'nome' => "Wallingford",
                'pais_id' => 229
            ],
            [
                'nome' => "Wallsend",
                'pais_id' => 229
            ],
            [
                'nome' => "Walsall",
                'pais_id' => 229
            ],
            [
                'nome' => "Waltham Abbey",
                'pais_id' => 229
            ],
            [
                'nome' => "Waltham Cross",
                'pais_id' => 229
            ],
            [
                'nome' => "Walton-on-Thames",
                'pais_id' => 229
            ],
            [
                'nome' => "Walton-on-the-Naze",
                'pais_id' => 229
            ],
            [
                'nome' => "Wantage",
                'pais_id' => 229
            ],
            [
                'nome' => "Ware",
                'pais_id' => 229
            ],
            [
                'nome' => "Wareham",
                'pais_id' => 229
            ],
            [
                'nome' => "Warlingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Warminster",
                'pais_id' => 229
            ],
            [
                'nome' => "Warrenpoint",
                'pais_id' => 229
            ],
            [
                'nome' => "Warrington",
                'pais_id' => 229
            ],
            [
                'nome' => "Warwick",
                'pais_id' => 229
            ],
            [
                'nome' => "Washington",
                'pais_id' => 229
            ],
            [
                'nome' => "Watchet",
                'pais_id' => 229
            ],
            [
                'nome' => "Watford",
                'pais_id' => 229
            ],
            [
                'nome' => "Wath upon Dearne",
                'pais_id' => 229
            ],
            [
                'nome' => "Watlington",
                'pais_id' => 229
            ],
            [
                'nome' => "Watton",
                'pais_id' => 229
            ],
            [
                'nome' => "Wednesbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Wellingborough",
                'pais_id' => 229
            ],
            [
                'nome' => "Wellington",
                'pais_id' => 229
            ],
            [
                'nome' => "Wells",
                'pais_id' => 229
            ],
            [
                'nome' => "Wells-next-the-Sea",
                'pais_id' => 229
            ],
            [
                'nome' => "Welshpool / Y Trallwng",
                'pais_id' => 229
            ],
            [
                'nome' => "Welwyn Garden City",
                'pais_id' => 229
            ],
            [
                'nome' => "Wem",
                'pais_id' => 229
            ],
            [
                'nome' => "Wendover",
                'pais_id' => 229
            ],
            [
                'nome' => "West Bridgford",
                'pais_id' => 229
            ],
            [
                'nome' => "West Bromwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Westbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Westerham",
                'pais_id' => 229
            ],
            [
                'nome' => "Westhill",
                'pais_id' => 229
            ],
            [
                'nome' => "Westhoughton",
                'pais_id' => 229
            ],
            [
                'nome' => "West Kirby",
                'pais_id' => 229
            ],
            [
                'nome' => "West Malling",
                'pais_id' => 229
            ],
            [
                'nome' => "West Mersea",
                'pais_id' => 229
            ],
            [
                'nome' => "Westminster",
                'pais_id' => 229
            ],
            [
                'nome' => "Weston-Super-Mare",
                'pais_id' => 229
            ],
            [
                'nome' => "Wetherby",
                'pais_id' => 229
            ],
            [
                'nome' => "Weybridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Weymouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Whaley Bridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Whickham",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitby",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitchurch",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitchurch",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitefield",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitehaven",
                'pais_id' => 229
            ],
            [
                'nome' => "Whithorn",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitland / Hendy-Gwyn",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitley Bay",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitnash",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitstable",
                'pais_id' => 229
            ],
            [
                'nome' => "Whittlesey",
                'pais_id' => 229
            ],
            [
                'nome' => "Whitworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Wick",
                'pais_id' => 229
            ],
            [
                'nome' => "Wickford",
                'pais_id' => 229
            ],
            [
                'nome' => "Wickham",
                'pais_id' => 229
            ],
            [
                'nome' => "Wickham Market",
                'pais_id' => 229
            ],
            [
                'nome' => "Widnes",
                'pais_id' => 229
            ],
            [
                'nome' => "Wigan",
                'pais_id' => 229
            ],
            [
                'nome' => "Wigton",
                'pais_id' => 229
            ],
            [
                'nome' => "Wigtown",
                'pais_id' => 229
            ],
            [
                'nome' => "Willenhall",
                'pais_id' => 229
            ],
            [
                'nome' => "Willington",
                'pais_id' => 229
            ],
            [
                'nome' => "Wilmslow",
                'pais_id' => 229
            ],
            [
                'nome' => "Wilton",
                'pais_id' => 229
            ],
            [
                'nome' => "Wimborne Minster",
                'pais_id' => 229
            ],
            [
                'nome' => "Wincanton",
                'pais_id' => 229
            ],
            [
                'nome' => "Winchcombe",
                'pais_id' => 229
            ],
            [
                'nome' => "Winchester",
                'pais_id' => 229
            ],
            [
                'nome' => "Windermere",
                'pais_id' => 229
            ],
            [
                'nome' => "Windsor",
                'pais_id' => 229
            ],
            [
                'nome' => "Winsford",
                'pais_id' => 229
            ],
            [
                'nome' => "Winslow",
                'pais_id' => 229
            ],
            [
                'nome' => "Winterton",
                'pais_id' => 229
            ],
            [
                'nome' => "Wirksworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Wisbech",
                'pais_id' => 229
            ],
            [
                'nome' => "Wishaw",
                'pais_id' => 229
            ],
            [
                'nome' => "Witham",
                'pais_id' => 229
            ],
            [
                'nome' => "Withernsea",
                'pais_id' => 229
            ],
            [
                'nome' => "Witney",
                'pais_id' => 229
            ],
            [
                'nome' => "Wiveliscombe",
                'pais_id' => 229
            ],
            [
                'nome' => "Wivenhoe",
                'pais_id' => 229
            ],
            [
                'nome' => "Woburn",
                'pais_id' => 229
            ],
            [
                'nome' => "Woburn Sands",
                'pais_id' => 229
            ],
            [
                'nome' => "Woking",
                'pais_id' => 229
            ],
            [
                'nome' => "Wokingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Wolsingham",
                'pais_id' => 229
            ],
            [
                'nome' => "Wolverhampton",
                'pais_id' => 229
            ],
            [
                'nome' => "Wombwell",
                'pais_id' => 229
            ],
            [
                'nome' => "Woodbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Woodhall Spa",
                'pais_id' => 229
            ],
            [
                'nome' => "Woodley",
                'pais_id' => 229
            ],
            [
                'nome' => "Woodstock",
                'pais_id' => 229
            ],
            [
                'nome' => "Wooler",
                'pais_id' => 229
            ],
            [
                'nome' => "Worcester",
                'pais_id' => 229
            ],
            [
                'nome' => "Workington",
                'pais_id' => 229
            ],
            [
                'nome' => "Worksop",
                'pais_id' => 229
            ],
            [
                'nome' => "Worsbrough",
                'pais_id' => 229
            ],
            [
                'nome' => "Worsley",
                'pais_id' => 229
            ],
            [
                'nome' => "Worthing",
                'pais_id' => 229
            ],
            [
                'nome' => "Wotton Cross",
                'pais_id' => 229
            ],
            [
                'nome' => "Wotton-under-Edge",
                'pais_id' => 229
            ],
            [
                'nome' => "Wragby",
                'pais_id' => 229
            ],
            [
                'nome' => "Wrexham / Wrecsam",
                'pais_id' => 229
            ],
            [
                'nome' => "Wymondham",
                'pais_id' => 229
            ],
            [
                'nome' => "Yarm",
                'pais_id' => 229
            ],
            [
                'nome' => "Yarmouth",
                'pais_id' => 229
            ],
            [
                'nome' => "Yate",
                'pais_id' => 229
            ],
            [
                'nome' => "Yateley",
                'pais_id' => 229
            ],
            [
                'nome' => "Y Bala",
                'pais_id' => 229
            ],
            [
                'nome' => "Yeadon",
                'pais_id' => 229
            ],
            [
                'nome' => "Yeovil",
                'pais_id' => 229
            ],
            [
                'nome' => "York",
                'pais_id' => 229
            ],
            [
                'nome' => "Ystradgynlais",
                'pais_id' => 229
            ],
            [
                'nome' => "Ystrad Mynach",
                'pais_id' => 229
            ],
            [
                'nome' => "Acton",
                'pais_id' => 229
            ],
            [
                'nome' => "Alameda Place",
                'pais_id' => 229
            ],
            [
                'nome' => "Aperfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Barking",
                'pais_id' => 229
            ],
            [
                'nome' => "Barnes",
                'pais_id' => 229
            ],
            [
                'nome' => "Barnet",
                'pais_id' => 229
            ],
            [
                'nome' => "Barnet Gate",
                'pais_id' => 229
            ],
            [
                'nome' => "Battersea",
                'pais_id' => 229
            ],
            [
                'nome' => "Beckenham",
                'pais_id' => 229
            ],
            [
                'nome' => "Bermondsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Bethnal Green",
                'pais_id' => 229
            ],
            [
                'nome' => "Bexley",
                'pais_id' => 229
            ],
            [
                'nome' => "Biggin Hill",
                'pais_id' => 229
            ],
            [
                'nome' => "Bow",
                'pais_id' => 229
            ],
            [
                'nome' => "Brentford",
                'pais_id' => 229
            ],
            [
                'nome' => "Bromley",
                'pais_id' => 229
            ],
            [
                'nome' => "Camberwell",
                'pais_id' => 229
            ],
            [
                'nome' => "Camden Town",
                'pais_id' => 229
            ],
            [
                'nome' => "Carshalton",
                'pais_id' => 229
            ],
            [
                'nome' => "Catford",
                'pais_id' => 229
            ],
            [
                'nome' => "Central Parade",
                'pais_id' => 229
            ],
            [
                'nome' => "Chase Village",
                'pais_id' => 229
            ],
            [
                'nome' => "Chelsea",
                'pais_id' => 229
            ],
            [
                'nome' => "Chingford",
                'pais_id' => 229
            ],
            [
                'nome' => "Chislehurst",
                'pais_id' => 229
            ],
            [
                'nome' => "Chiswick",
                'pais_id' => 229
            ],
            [
                'nome' => "Clapham",
                'pais_id' => 229
            ],
            [
                'nome' => "Clock House",
                'pais_id' => 229
            ],
            [
                'nome' => "Coalmakers Wharf",
                'pais_id' => 229
            ],
            [
                'nome' => "Coldharbour",
                'pais_id' => 229
            ],
            [
                'nome' => "Cole Park",
                'pais_id' => 229
            ],
            [
                'nome' => "Colney Hatch",
                'pais_id' => 229
            ],
            [
                'nome' => "Coulsdon",
                'pais_id' => 229
            ],
            [
                'nome' => "Cowley Peachy",
                'pais_id' => 229
            ],
            [
                'nome' => "Crayford",
                'pais_id' => 229
            ],
            [
                'nome' => "Croydon",
                'pais_id' => 229
            ],
            [
                'nome' => "Dagenham",
                'pais_id' => 229
            ],
            [
                'nome' => "Denham",
                'pais_id' => 229
            ],
            [
                'nome' => "Deptford",
                'pais_id' => 229
            ],
            [
                'nome' => "Ealing",
                'pais_id' => 229
            ],
            [
                'nome' => "Eastcote Village",
                'pais_id' => 229
            ],
            [
                'nome' => "East Ham",
                'pais_id' => 229
            ],
            [
                'nome' => "Edgware",
                'pais_id' => 229
            ],
            [
                'nome' => "Edmonton",
                'pais_id' => 229
            ],
            [
                'nome' => "Eltham",
                'pais_id' => 229
            ],
            [
                'nome' => "Enfield",
                'pais_id' => 229
            ],
            [
                'nome' => "Erith",
                'pais_id' => 229
            ],
            [
                'nome' => "Feltham",
                'pais_id' => 229
            ],
            [
                'nome' => "Festubert Place",
                'pais_id' => 229
            ],
            [
                'nome' => "Finchley",
                'pais_id' => 229
            ],
            [
                'nome' => "Foxbury",
                'pais_id' => 229
            ],
            [
                'nome' => "Frank Whipple Estate",
                'pais_id' => 229
            ],
            [
                'nome' => "Friern Barnet",
                'pais_id' => 229
            ],
            [
                'nome' => "Fulham",
                'pais_id' => 229
            ],
            [
                'nome' => "Gallows Corner",
                'pais_id' => 229
            ],
            [
                'nome' => "Greenford",
                'pais_id' => 229
            ],
            [
                'nome' => "Greenwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Hackney",
                'pais_id' => 229
            ],
            [
                'nome' => "Hacton",
                'pais_id' => 229
            ],
            [
                'nome' => "Hallsville Quarter",
                'pais_id' => 229
            ],
            [
                'nome' => "Hammersmith",
                'pais_id' => 229
            ],
            [
                'nome' => "Hampstead",
                'pais_id' => 229
            ],
            [
                'nome' => "Hampton",
                'pais_id' => 229
            ],
            [
                'nome' => "Harefield Grove",
                'pais_id' => 229
            ],
            [
                'nome' => "Harrow",
                'pais_id' => 229
            ],
            [
                'nome' => "Hayes",
                'pais_id' => 229
            ],
            [
                'nome' => "Hayes Town",
                'pais_id' => 229
            ],
            [
                'nome' => "Hendon",
                'pais_id' => 229
            ],
            [
                'nome' => "Highwood Hill",
                'pais_id' => 229
            ],
            [
                'nome' => "Hillingdon",
                'pais_id' => 229
            ],
            [
                'nome' => "Hitchin Square",
                'pais_id' => 229
            ],
            [
                'nome' => "Holders Hill",
                'pais_id' => 229
            ],
            [
                'nome' => "Hornchurch",
                'pais_id' => 229
            ],
            [
                'nome' => "Hornsey",
                'pais_id' => 229
            ],
            [
                'nome' => "Hornsey Vale",
                'pais_id' => 229
            ],
            [
                'nome' => "Hounslow",
                'pais_id' => 229
            ],
            [
                'nome' => "Ilford",
                'pais_id' => 229
            ],
            [
                'nome' => "Isle of Dogs",
                'pais_id' => 229
            ],
            [
                'nome' => "Isleworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Islington",
                'pais_id' => 229
            ],
            [
                'nome' => "Kensington",
                'pais_id' => 229
            ],
            [
                'nome' => "Kenton",
                'pais_id' => 229
            ],
            [
                'nome' => "Kingston upon Thames",
                'pais_id' => 229
            ],
            [
                'nome' => "Knight's Hill",
                'pais_id' => 229
            ],
            [
                'nome' => "Lewisham",
                'pais_id' => 229
            ],
            [
                'nome' => "Leyton",
                'pais_id' => 229
            ],
            [
                'nome' => "Merton",
                'pais_id' => 229
            ],
            [
                'nome' => "Mitcham",
                'pais_id' => 229
            ],
            [
                'nome' => "Morden",
                'pais_id' => 229
            ],
            [
                'nome' => "New Cross Gate",
                'pais_id' => 229
            ],
            [
                'nome' => "New Malden",
                'pais_id' => 229
            ],
            [
                'nome' => "Northolt",
                'pais_id' => 229
            ],
            [
                'nome' => "Northwood",
                'pais_id' => 229
            ],
            [
                'nome' => "Orpington",
                'pais_id' => 229
            ],
            [
                'nome' => "Paddington",
                'pais_id' => 229
            ],
            [
                'nome' => "Park Royal",
                'pais_id' => 229
            ],
            [
                'nome' => "Penge",
                'pais_id' => 229
            ],
            [
                'nome' => "Pinner",
                'pais_id' => 229
            ],
            [
                'nome' => "Poplar",
                'pais_id' => 229
            ],
            [
                'nome' => "Poynders Parade",
                'pais_id' => 229
            ],
            [
                'nome' => "Purley",
                'pais_id' => 229
            ],
            [
                'nome' => "Putney",
                'pais_id' => 229
            ],
            [
                'nome' => "Rainham",
                'pais_id' => 229
            ],
            [
                'nome' => "Risley Close",
                'pais_id' => 229
            ],
            [
                'nome' => "Romford",
                'pais_id' => 229
            ],
            [
                'nome' => "Ruislip",
                'pais_id' => 229
            ],
            [
                'nome' => "Ruislip Gardens",
                'pais_id' => 229
            ],
            [
                'nome' => "Rushmore Hill",
                'pais_id' => 229
            ],
            [
                'nome' => "Sidcup",
                'pais_id' => 229
            ],
            [
                'nome' => "Southall",
                'pais_id' => 229
            ],
            [
                'nome' => "South Bromley",
                'pais_id' => 229
            ],
            [
                'nome' => "Southgate",
                'pais_id' => 229
            ],
            [
                'nome' => "Southwark",
                'pais_id' => 229
            ],
            [
                'nome' => "Stanmore",
                'pais_id' => 229
            ],
            [
                'nome' => "Stepney",
                'pais_id' => 229
            ],
            [
                'nome' => "Stoke Newington",
                'pais_id' => 229
            ],
            [
                'nome' => "Stratford",
                'pais_id' => 229
            ],
            [
                'nome' => "Streatham",
                'pais_id' => 229
            ],
            [
                'nome' => "Surbiton",
                'pais_id' => 229
            ],
            [
                'nome' => "Sutton",
                'pais_id' => 229
            ],
            [
                'nome' => "Tavern Quay",
                'pais_id' => 229
            ],
            [
                'nome' => "Teddington",
                'pais_id' => 229
            ],
            [
                'nome' => "The Mews",
                'pais_id' => 229
            ],
            [
                'nome' => "Tottenham",
                'pais_id' => 229
            ],
            [
                'nome' => "Tower Gardens",
                'pais_id' => 229
            ],
            [
                'nome' => "Trinity Buoy Wharf",
                'pais_id' => 229
            ],
            [
                'nome' => "Twickenham",
                'pais_id' => 229
            ],
            [
                'nome' => "Unity Place",
                'pais_id' => 229
            ],
            [
                'nome' => "Upminster",
                'pais_id' => 229
            ],
            [
                'nome' => "Uxbridge",
                'pais_id' => 229
            ],
            [
                'nome' => "Wallington",
                'pais_id' => 229
            ],
            [
                'nome' => "Wallington Square",
                'pais_id' => 229
            ],
            [
                'nome' => "Walthamstow",
                'pais_id' => 229
            ],
            [
                'nome' => "Wandle Park",
                'pais_id' => 229
            ],
            [
                'nome' => "Wandsworth",
                'pais_id' => 229
            ],
            [
                'nome' => "Wanstead",
                'pais_id' => 229
            ],
            [
                'nome' => "Wembley",
                'pais_id' => 229
            ],
            [
                'nome' => "West Drayton",
                'pais_id' => 229
            ],
            [
                'nome' => "West Ham",
                'pais_id' => 229
            ],
            [
                'nome' => "Willesden",
                'pais_id' => 229
            ],
            [
                'nome' => "Wimbledon",
                'pais_id' => 229
            ],
            [
                'nome' => "Woodford",
                'pais_id' => 229
            ],
            [
                'nome' => "Wood Green",
                'pais_id' => 229
            ],
            [
                'nome' => "Woolwich",
                'pais_id' => 229
            ],
            [
                'nome' => "Yiewsley",
                'pais_id' => 229
            ],
            [
                'nome' => "Unknown",
                'pais_id' => 229
            ],
        ];

        foreach($ukCitiesAndTowns as $city)
        {
            Cidade::create($city);
        }
    }
}
