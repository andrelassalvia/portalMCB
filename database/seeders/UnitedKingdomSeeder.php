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
                'pais_id' => 2
            ],
            [
                'nome' => "Abercarn",
                'pais_id' => 2
            ],
            [
                'nome' => "Aberchirder",
                'pais_id' => 2
            ],
            [
                'nome' => "Abercynon",
                'pais_id' => 2
            ],
            [
                'nome' => "Aberdare / Aberdâr",
                'pais_id' => 2
            ],
            [
                'nome' => "Aberdeen",
                'pais_id' => 2
            ],
            [
                'nome' => "Aberfeldy",
                'pais_id' => 2
            ],
            [
                'nome' => "Abergavenny / Y Fenni",
                'pais_id' => 2
            ],
            [
                'nome' => "Abergele",
                'pais_id' => 2
            ],
            [
                'nome' => "Abersychan",
                'pais_id' => 2
            ],
            [
                'nome' => "Abertillery / Abertyleri",
                'pais_id' => 2
            ],
            [
                'nome' => "Aberystwyth",
                'pais_id' => 2
            ],
            [
                'nome' => "Abingdon-on-Thames",
                'pais_id' => 2
            ],
            [
                'nome' => "Accrington",
                'pais_id' => 2
            ],
            [
                'nome' => "Acton",
                'pais_id' => 2
            ],
            [
                'nome' => "Addlestone",
                'pais_id' => 2
            ],
            [
                'nome' => "Adlington",
                'pais_id' => 2
            ],
            [
                'nome' => "Adwick le Street",
                'pais_id' => 2
            ],
            [
                'nome' => "Airdrie",
                'pais_id' => 2
            ],
            [
                'nome' => "Alcester",
                'pais_id' => 2
            ],
            [
                'nome' => "Aldeburgh",
                'pais_id' => 2
            ],
            [
                'nome' => "Aldershot",
                'pais_id' => 2
            ],
            [
                'nome' => "Aldridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Alexandria",
                'pais_id' => 2
            ],
            [
                'nome' => "Alford",
                'pais_id' => 2
            ],
            [
                'nome' => "Alfreton",
                'pais_id' => 2
            ],
            [
                'nome' => "Alloa",
                'pais_id' => 2
            ],
            [
                'nome' => "Alness",
                'pais_id' => 2
            ],
            [
                'nome' => "Alnwick",
                'pais_id' => 2
            ],
            [
                'nome' => "Alsager",
                'pais_id' => 2
            ],
            [
                'nome' => "Alston",
                'pais_id' => 2
            ],
            [
                'nome' => "Alton",
                'pais_id' => 2
            ],
            [
                'nome' => "Altrincham",
                'pais_id' => 2
            ],
            [
                'nome' => "Alva",
                'pais_id' => 2
            ],
            [
                'nome' => "Alyth",
                'pais_id' => 2
            ],
            [
                'nome' => "Amble",
                'pais_id' => 2
            ],
            [
                'nome' => "Ambleside",
                'pais_id' => 2
            ],
            [
                'nome' => "Amersham",
                'pais_id' => 2
            ],
            [
                'nome' => "Amesbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Amlwch",
                'pais_id' => 2
            ],
            [
                'nome' => "Ammanford / Rhydaman",
                'pais_id' => 2
            ],
            [
                'nome' => "Ampthill",
                'pais_id' => 2
            ],
            [
                'nome' => "Andover",
                'pais_id' => 2
            ],
            [
                'nome' => "Annan",
                'pais_id' => 2
            ],
            [
                'nome' => "Annfield Plain",
                'pais_id' => 2
            ],
            [
                'nome' => "Anstruther",
                'pais_id' => 2
            ],
            [
                'nome' => "Antrim",
                'pais_id' => 2
            ],
            [
                'nome' => "Appleby-in-Westmorland",
                'pais_id' => 2
            ],
            [
                'nome' => "Arbroath",
                'pais_id' => 2
            ],
            [
                'nome' => "Ardrossan",
                'pais_id' => 2
            ],
            [
                'nome' => "Armadale",
                'pais_id' => 2
            ],
            [
                'nome' => "Armagh",
                'pais_id' => 2
            ],
            [
                'nome' => "Arnold",
                'pais_id' => 2
            ],
            [
                'nome' => "Arundel",
                'pais_id' => 2
            ],
            [
                'nome' => "Ashbourne",
                'pais_id' => 2
            ],
            [
                'nome' => "Ashburton",
                'pais_id' => 2
            ],
            [
                'nome' => "Ashby-de-la-Zouch",
                'pais_id' => 2
            ],
            [
                'nome' => "Ashford",
                'pais_id' => 2
            ],
            [
                'nome' => "Ashford",
                'pais_id' => 2
            ],
            [
                'nome' => "Ashington",
                'pais_id' => 2
            ],
            [
                'nome' => "Ashton-in-Makerfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Ashton-under-Lyne",
                'pais_id' => 2
            ],
            [
                'nome' => "Aspatria",
                'pais_id' => 2
            ],
            [
                'nome' => "Atherstone",
                'pais_id' => 2
            ],
            [
                'nome' => "Atherton",
                'pais_id' => 2
            ],
            [
                'nome' => "Attleborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Auchterarder",
                'pais_id' => 2
            ],
            [
                'nome' => "Auchtermuchty",
                'pais_id' => 2
            ],
            [
                'nome' => "Aviemore",
                'pais_id' => 2
            ],
            [
                'nome' => "Axbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Axminster",
                'pais_id' => 2
            ],
            [
                'nome' => "Aylesbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Aylsham",
                'pais_id' => 2
            ],
            [
                'nome' => "Ayr",
                'pais_id' => 2
            ],
            [
                'nome' => "Bacup",
                'pais_id' => 2
            ],
            [
                'nome' => "Baildon",
                'pais_id' => 2
            ],
            [
                'nome' => "Bakewell",
                'pais_id' => 2
            ],
            [
                'nome' => "Baldock",
                'pais_id' => 2
            ],
            [
                'nome' => "Ballater",
                'pais_id' => 2
            ],
            [
                'nome' => "Ballycastle",
                'pais_id' => 2
            ],
            [
                'nome' => "Ballyclare",
                'pais_id' => 2
            ],
            [
                'nome' => "Ballymena",
                'pais_id' => 2
            ],
            [
                'nome' => "Ballymoney",
                'pais_id' => 2
            ],
            [
                'nome' => "Ballynahinch",
                'pais_id' => 2
            ],
            [
                'nome' => "Bamber Bridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Banbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Banbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Banchory",
                'pais_id' => 2
            ],
            [
                'nome' => "Banff",
                'pais_id' => 2
            ],
            [
                'nome' => "Bangor",
                'pais_id' => 2
            ],
            [
                'nome' => "Bangor",
                'pais_id' => 2
            ],
            [
                'nome' => "Banstead",
                'pais_id' => 2
            ],
            [
                'nome' => "Bargod / Bargoed",
                'pais_id' => 2
            ],
            [
                'nome' => "Barmouth / Abermaw",
                'pais_id' => 2
            ],
            [
                'nome' => "Barnard Castle",
                'pais_id' => 2
            ],
            [
                'nome' => "Barnoldswick",
                'pais_id' => 2
            ],
            [
                'nome' => "Barnsley",
                'pais_id' => 2
            ],
            [
                'nome' => "Barnstaple",
                'pais_id' => 2
            ],
            [
                'nome' => "Barrhead",
                'pais_id' => 2
            ],
            [
                'nome' => "Barrowford",
                'pais_id' => 2
            ],
            [
                'nome' => "Barrow-in-Furness",
                'pais_id' => 2
            ],
            [
                'nome' => "Barry / Barri",
                'pais_id' => 2
            ],
            [
                'nome' => "Barton-upon-Humber",
                'pais_id' => 2
            ],
            [
                'nome' => "Basildon",
                'pais_id' => 2
            ],
            [
                'nome' => "Basingstoke",
                'pais_id' => 2
            ],
            [
                'nome' => "Bath",
                'pais_id' => 2
            ],
            [
                'nome' => "Bathgate",
                'pais_id' => 2
            ],
            [
                'nome' => "Batley",
                'pais_id' => 2
            ],
            [
                'nome' => "Battle",
                'pais_id' => 2
            ],
            [
                'nome' => "Bawtry",
                'pais_id' => 2
            ],
            [
                'nome' => "Beaconsfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Beaminster",
                'pais_id' => 2
            ],
            [
                'nome' => "Bearsden",
                'pais_id' => 2
            ],
            [
                'nome' => "Beaumaris",
                'pais_id' => 2
            ],
            [
                'nome' => "Bebington",
                'pais_id' => 2
            ],
            [
                'nome' => "Beccles",
                'pais_id' => 2
            ],
            [
                'nome' => "Bedale",
                'pais_id' => 2
            ],
            [
                'nome' => "Bedford",
                'pais_id' => 2
            ],
            [
                'nome' => "Bedlington",
                'pais_id' => 2
            ],
            [
                'nome' => "Bedworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Beeston",
                'pais_id' => 2
            ],
            [
                'nome' => "Belfast",
                'pais_id' => 2
            ],
            [
                'nome' => "Bellshill",
                'pais_id' => 2
            ],
            [
                'nome' => "Belper",
                'pais_id' => 2
            ],
            [
                'nome' => "Bentley",
                'pais_id' => 2
            ],
            [
                'nome' => "Berkhamsted",
                'pais_id' => 2
            ],
            [
                'nome' => "Berwick-upon-Tweed",
                'pais_id' => 2
            ],
            [
                'nome' => "Bethesda",
                'pais_id' => 2
            ],
            [
                'nome' => "Betws-y-Coed",
                'pais_id' => 2
            ],
            [
                'nome' => "Beverley",
                'pais_id' => 2
            ],
            [
                'nome' => "Bewdley",
                'pais_id' => 2
            ],
            [
                'nome' => "Bexhill",
                'pais_id' => 2
            ],
            [
                'nome' => "Bicester",
                'pais_id' => 2
            ],
            [
                'nome' => "Biddulph",
                'pais_id' => 2
            ],
            [
                'nome' => "Bideford",
                'pais_id' => 2
            ],
            [
                'nome' => "Biggar",
                'pais_id' => 2
            ],
            [
                'nome' => "Biggleswade",
                'pais_id' => 2
            ],
            [
                'nome' => "Billericay",
                'pais_id' => 2
            ],
            [
                'nome' => "Billinge",
                'pais_id' => 2
            ],
            [
                'nome' => "Billingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Bilston",
                'pais_id' => 2
            ],
            [
                'nome' => "Bingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Bingley",
                'pais_id' => 2
            ],
            [
                'nome' => "Birkenhead",
                'pais_id' => 2
            ],
            [
                'nome' => "Birmingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Bishop Auckland",
                'pais_id' => 2
            ],
            [
                'nome' => "Bishopbriggs",
                'pais_id' => 2
            ],
            [
                'nome' => "Bishop's Castle",
                'pais_id' => 2
            ],
            [
                'nome' => "Bishop's Stortford",
                'pais_id' => 2
            ],
            [
                'nome' => "Bishop's Waltham",
                'pais_id' => 2
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Blackburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Blackheath",
                'pais_id' => 2
            ],
            [
                'nome' => "Blackpool",
                'pais_id' => 2
            ],
            [
                'nome' => "Blackwater",
                'pais_id' => 2
            ],
            [
                'nome' => "Blackwood / Y Coed Duon",
                'pais_id' => 2
            ],
            [
                'nome' => "Blaenau Ffestiniog",
                'pais_id' => 2
            ],
            [
                'nome' => "Blaenavon",
                'pais_id' => 2
            ],
            [
                'nome' => "Blaina / Y Blaenau",
                'pais_id' => 2
            ],
            [
                'nome' => "Blairgowrie and Rattray",
                'pais_id' => 2
            ],
            [
                'nome' => "Blandford Forum",
                'pais_id' => 2
            ],
            [
                'nome' => "Blaydon",
                'pais_id' => 2
            ],
            [
                'nome' => "Bletchley",
                'pais_id' => 2
            ],
            [
                'nome' => "Bloxwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Blyth",
                'pais_id' => 2
            ],
            [
                'nome' => "Bodmin",
                'pais_id' => 2
            ],
            [
                'nome' => "Bognor Regis",
                'pais_id' => 2
            ],
            [
                'nome' => "Bollington",
                'pais_id' => 2
            ],
            [
                'nome' => "Bolsover",
                'pais_id' => 2
            ],
            [
                'nome' => "Bolton",
                'pais_id' => 2
            ],
            [
                'nome' => "Bolton upon Dearne",
                'pais_id' => 2
            ],
            [
                'nome' => "Bo'ness",
                'pais_id' => 2
            ],
            [
                'nome' => "Bonnyrigg",
                'pais_id' => 2
            ],
            [
                'nome' => "Bootle",
                'pais_id' => 2
            ],
            [
                'nome' => "Bordon",
                'pais_id' => 2
            ],
            [
                'nome' => "Borehamwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Boroughbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Boston",
                'pais_id' => 2
            ],
            [
                'nome' => "Bourne",
                'pais_id' => 2
            ],
            [
                'nome' => "Bournemouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Bovey Tracey",
                'pais_id' => 2
            ],
            [
                'nome' => "Bowness-on-Windermere",
                'pais_id' => 2
            ],
            [
                'nome' => "Brackley",
                'pais_id' => 2
            ],
            [
                'nome' => "Bracknell",
                'pais_id' => 2
            ],
            [
                'nome' => "Bradford",
                'pais_id' => 2
            ],
            [
                'nome' => "Bradford-on-Avon",
                'pais_id' => 2
            ],
            [
                'nome' => "Brading",
                'pais_id' => 2
            ],
            [
                'nome' => "Bradley Stoke",
                'pais_id' => 2
            ],
            [
                'nome' => "Braintree",
                'pais_id' => 2
            ],
            [
                'nome' => "Bramhall",
                'pais_id' => 2
            ],
            [
                'nome' => "Brampton",
                'pais_id' => 2
            ],
            [
                'nome' => "Brandon",
                'pais_id' => 2
            ],
            [
                'nome' => "Brechin",
                'pais_id' => 2
            ],
            [
                'nome' => "Brecon / Aberhonddu",
                'pais_id' => 2
            ],
            [
                'nome' => "Brentwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Bridgend / Pen-y-bont ar Ogwr",
                'pais_id' => 2
            ],
            [
                'nome' => "Bridge of Allan",
                'pais_id' => 2
            ],
            [
                'nome' => "Bridgnorth",
                'pais_id' => 2
            ],
            [
                'nome' => "Bridgwater",
                'pais_id' => 2
            ],
            [
                'nome' => "Bridlington",
                'pais_id' => 2
            ],
            [
                'nome' => "Bridport",
                'pais_id' => 2
            ],
            [
                'nome' => "Brierfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Brierley Hill",
                'pais_id' => 2
            ],
            [
                'nome' => "Brigg",
                'pais_id' => 2
            ],
            [
                'nome' => "Brighouse",
                'pais_id' => 2
            ],
            [
                'nome' => "Brightlingsea",
                'pais_id' => 2
            ],
            [
                'nome' => "Brighton and Hove",
                'pais_id' => 2
            ],
            [
                'nome' => "Bristol",
                'pais_id' => 2
            ],
            [
                'nome' => "Brixham",
                'pais_id' => 2
            ],
            [
                'nome' => "Broadstairs",
                'pais_id' => 2
            ],
            [
                'nome' => "Bromsgrove",
                'pais_id' => 2
            ],
            [
                'nome' => "Bromyard",
                'pais_id' => 2
            ],
            [
                'nome' => "Broseley",
                'pais_id' => 2
            ],
            [
                'nome' => "Brotton",
                'pais_id' => 2
            ],
            [
                'nome' => "Broughton in Furness",
                'pais_id' => 2
            ],
            [
                'nome' => "Broughty Ferry",
                'pais_id' => 2
            ],
            [
                'nome' => "Brownhills",
                'pais_id' => 2
            ],
            [
                'nome' => "Broxburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Bruton",
                'pais_id' => 2
            ],
            [
                'nome' => "Brynmawr / Bryn-Mawr",
                'pais_id' => 2
            ],
            [
                'nome' => "Buckfastleigh",
                'pais_id' => 2
            ],
            [
                'nome' => "Buckhaven",
                'pais_id' => 2
            ],
            [
                'nome' => "Buckie",
                'pais_id' => 2
            ],
            [
                'nome' => "Buckingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Buckley / Bwcle",
                'pais_id' => 2
            ],
            [
                'nome' => "Bude",
                'pais_id' => 2
            ],
            [
                'nome' => "Budleigh Salterton",
                'pais_id' => 2
            ],
            [
                'nome' => "Builth Wells / Llanfair-ym-Muallt",
                'pais_id' => 2
            ],
            [
                'nome' => "Bungay",
                'pais_id' => 2
            ],
            [
                'nome' => "Buntingford",
                'pais_id' => 2
            ],
            [
                'nome' => "Burford",
                'pais_id' => 2
            ],
            [
                'nome' => "Burgess Hill",
                'pais_id' => 2
            ],
            [
                'nome' => "Burghead",
                'pais_id' => 2
            ],
            [
                'nome' => "Burnham-on-Crouch",
                'pais_id' => 2
            ],
            [
                'nome' => "Burnham-on-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Burnley",
                'pais_id' => 2
            ],
            [
                'nome' => "Burntisland",
                'pais_id' => 2
            ],
            [
                'nome' => "Burntwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Burry Port / Porth Tywyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Burton Latimer",
                'pais_id' => 2
            ],
            [
                'nome' => "Burton upon Trent",
                'pais_id' => 2
            ],
            [
                'nome' => "Bury",
                'pais_id' => 2
            ],
            [
                'nome' => "Bury St Edmunds",
                'pais_id' => 2
            ],
            [
                'nome' => "Bushey",
                'pais_id' => 2
            ],
            [
                'nome' => "Buxton",
                'pais_id' => 2
            ],
            [
                'nome' => "Caerleon / Caerllion",
                'pais_id' => 2
            ],
            [
                'nome' => "Caernarfon",
                'pais_id' => 2
            ],
            [
                'nome' => "Caerphilly / Caerffili",
                'pais_id' => 2
            ],
            [
                'nome' => "Caerwys",
                'pais_id' => 2
            ],
            [
                'nome' => "Caister-on-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Caldicot / Cil-y-coed",
                'pais_id' => 2
            ],
            [
                'nome' => "Callander",
                'pais_id' => 2
            ],
            [
                'nome' => "Callington",
                'pais_id' => 2
            ],
            [
                'nome' => "Calne",
                'pais_id' => 2
            ],
            [
                'nome' => "Camberley",
                'pais_id' => 2
            ],
            [
                'nome' => "Camborne",
                'pais_id' => 2
            ],
            [
                'nome' => "Cambridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Camelford",
                'pais_id' => 2
            ],
            [
                'nome' => "Campbeltown / Ceann Loch Chille Chiarain",
                'pais_id' => 2
            ],
            [
                'nome' => "Cannock",
                'pais_id' => 2
            ],
            [
                'nome' => "Canterbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Canvey Island",
                'pais_id' => 2
            ],
            [
                'nome' => "Cardiff / Caerdydd",
                'pais_id' => 2
            ],
            [
                'nome' => "Cardigan / Aberteifi",
                'pais_id' => 2
            ],
            [
                'nome' => "Carlisle",
                'pais_id' => 2
            ],
            [
                'nome' => "Carluke",
                'pais_id' => 2
            ],
            [
                'nome' => "Carmarthen / Caerfyrddin",
                'pais_id' => 2
            ],
            [
                'nome' => "Carnforth",
                'pais_id' => 2
            ],
            [
                'nome' => "Carnoustie",
                'pais_id' => 2
            ],
            [
                'nome' => "Carrickfergus",
                'pais_id' => 2
            ],
            [
                'nome' => "Carryduff",
                'pais_id' => 2
            ],
            [
                'nome' => "Carterton",
                'pais_id' => 2
            ],
            [
                'nome' => "Castle Cary",
                'pais_id' => 2
            ],
            [
                'nome' => "Castle Douglas",
                'pais_id' => 2
            ],
            [
                'nome' => "Castleford",
                'pais_id' => 2
            ],
            [
                'nome' => "Castletown",
                'pais_id' => 2
            ],
            [
                'nome' => "Caterham",
                'pais_id' => 2
            ],
            [
                'nome' => "Chadderton",
                'pais_id' => 2
            ],
            [
                'nome' => "Chagford",
                'pais_id' => 2
            ],
            [
                'nome' => "Chapel-en-le-Frith",
                'pais_id' => 2
            ],
            [
                'nome' => "Chard",
                'pais_id' => 2
            ],
            [
                'nome' => "Charlbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Charlestown of Aberlour",
                'pais_id' => 2
            ],
            [
                'nome' => "Chatham",
                'pais_id' => 2
            ],
            [
                'nome' => "Chatteris",
                'pais_id' => 2
            ],
            [
                'nome' => "Cheadle",
                'pais_id' => 2
            ],
            [
                'nome' => "Cheadle",
                'pais_id' => 2
            ],
            [
                'nome' => "Cheadle Hulme",
                'pais_id' => 2
            ],
            [
                'nome' => "Chelmsford",
                'pais_id' => 2
            ],
            [
                'nome' => "Cheltenham",
                'pais_id' => 2
            ],
            [
                'nome' => "Chepstow / Cas-Gwent",
                'pais_id' => 2
            ],
            [
                'nome' => "Chertsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Chesham",
                'pais_id' => 2
            ],
            [
                'nome' => "Cheshunt",
                'pais_id' => 2
            ],
            [
                'nome' => "Chester",
                'pais_id' => 2
            ],
            [
                'nome' => "Chesterfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Chester-le-Street",
                'pais_id' => 2
            ],
            [
                'nome' => "Chichester",
                'pais_id' => 2
            ],
            [
                'nome' => "Chickerell",
                'pais_id' => 2
            ],
            [
                'nome' => "Chigwell",
                'pais_id' => 2
            ],
            [
                'nome' => "Chippenham",
                'pais_id' => 2
            ],
            [
                'nome' => "Chipping Campden",
                'pais_id' => 2
            ],
            [
                'nome' => "Chipping Norton",
                'pais_id' => 2
            ],
            [
                'nome' => "Chipping Ongar",
                'pais_id' => 2
            ],
            [
                'nome' => "Chipping Sodbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Chirk / Y Waun",
                'pais_id' => 2
            ],
            [
                'nome' => "Chorley",
                'pais_id' => 2
            ],
            [
                'nome' => "Chorleywood",
                'pais_id' => 2
            ],
            [
                'nome' => "Christchurch",
                'pais_id' => 2
            ],
            [
                'nome' => "Chudleigh",
                'pais_id' => 2
            ],
            [
                'nome' => "Church",
                'pais_id' => 2
            ],
            [
                'nome' => "Church Stretton",
                'pais_id' => 2
            ],
            [
                'nome' => "Cinderford",
                'pais_id' => 2
            ],
            [
                'nome' => "Cirencester",
                'pais_id' => 2
            ],
            [
                'nome' => "Clackmannan",
                'pais_id' => 2
            ],
            [
                'nome' => "Clacton-on-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Clare",
                'pais_id' => 2
            ],
            [
                'nome' => "Clay Cross",
                'pais_id' => 2
            ],
            [
                'nome' => "Clayton-le-Moors",
                'pais_id' => 2
            ],
            [
                'nome' => "Cleator Moor",
                'pais_id' => 2
            ],
            [
                'nome' => "Cleckheaton",
                'pais_id' => 2
            ],
            [
                'nome' => "Cleethorpes",
                'pais_id' => 2
            ],
            [
                'nome' => "Cleobury Mortimer",
                'pais_id' => 2
            ],
            [
                'nome' => "Clevedon",
                'pais_id' => 2
            ],
            [
                'nome' => "Cleveleys",
                'pais_id' => 2
            ],
            [
                'nome' => "Clitheroe",
                'pais_id' => 2
            ],
            [
                'nome' => "Clydebank",
                'pais_id' => 2
            ],
            [
                'nome' => "Coalisland",
                'pais_id' => 2
            ],
            [
                'nome' => "Coalville",
                'pais_id' => 2
            ],
            [
                'nome' => "Coatbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Cockenzie and Port Seton",
                'pais_id' => 2
            ],
            [
                'nome' => "Cockermouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Coggeshall",
                'pais_id' => 2
            ],
            [
                'nome' => "Colchester",
                'pais_id' => 2
            ],
            [
                'nome' => "Coldstream",
                'pais_id' => 2
            ],
            [
                'nome' => "Coleford",
                'pais_id' => 2
            ],
            [
                'nome' => "Coleraine",
                'pais_id' => 2
            ],
            [
                'nome' => "Coleshill",
                'pais_id' => 2
            ],
            [
                'nome' => "Colne",
                'pais_id' => 2
            ],
            [
                'nome' => "Colwyn Bay / Bae Colwyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Colyton",
                'pais_id' => 2
            ],
            [
                'nome' => "Comber",
                'pais_id' => 2
            ],
            [
                'nome' => "Congleton",
                'pais_id' => 2
            ],
            [
                'nome' => "Conisbrough",
                'pais_id' => 2
            ],
            [
                'nome' => "Connah's Quay / Cei Connah",
                'pais_id' => 2
            ],
            [
                'nome' => "Consett",
                'pais_id' => 2
            ],
            [
                'nome' => "Conwy",
                'pais_id' => 2
            ],
            [
                'nome' => "Cookstown",
                'pais_id' => 2
            ],
            [
                'nome' => "Corbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Corby",
                'pais_id' => 2
            ],
            [
                'nome' => "Corsham",
                'pais_id' => 2
            ],
            [
                'nome' => "Coseley",
                'pais_id' => 2
            ],
            [
                'nome' => "Cotgrave",
                'pais_id' => 2
            ],
            [
                'nome' => "Cottingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Coupar Angus",
                'pais_id' => 2
            ],
            [
                'nome' => "Coventry",
                'pais_id' => 2
            ],
            [
                'nome' => "Cowbridge / Y Bont-Faen",
                'pais_id' => 2
            ],
            [
                'nome' => "Cowdenbeath",
                'pais_id' => 2
            ],
            [
                'nome' => "Cowes",
                'pais_id' => 2
            ],
            [
                'nome' => "Craigavon",
                'pais_id' => 2
            ],
            [
                'nome' => "Crail",
                'pais_id' => 2
            ],
            [
                'nome' => "Cramlington",
                'pais_id' => 2
            ],
            [
                'nome' => "Craven Arms",
                'pais_id' => 2
            ],
            [
                'nome' => "Crawley",
                'pais_id' => 2
            ],
            [
                'nome' => "Crediton",
                'pais_id' => 2
            ],
            [
                'nome' => "Crewe",
                'pais_id' => 2
            ],
            [
                'nome' => "Crewkerne",
                'pais_id' => 2
            ],
            [
                'nome' => "Criccieth / Cricieth",
                'pais_id' => 2
            ],
            [
                'nome' => "Crickhowell / Crughywel",
                'pais_id' => 2
            ],
            [
                'nome' => "Cricklade",
                'pais_id' => 2
            ],
            [
                'nome' => "Crieff",
                'pais_id' => 2
            ],
            [
                'nome' => "Cromarty",
                'pais_id' => 2
            ],
            [
                'nome' => "Cromer",
                'pais_id' => 2
            ],
            [
                'nome' => "Crook",
                'pais_id' => 2
            ],
            [
                'nome' => "Crosby",
                'pais_id' => 2
            ],
            [
                'nome' => "Crowborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Crowland",
                'pais_id' => 2
            ],
            [
                'nome' => "Crowle",
                'pais_id' => 2
            ],
            [
                'nome' => "Crowthorne",
                'pais_id' => 2
            ],
            [
                'nome' => "Cuckfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Cullen",
                'pais_id' => 2
            ],
            [
                'nome' => "Cullompton",
                'pais_id' => 2
            ],
            [
                'nome' => "Culross",
                'pais_id' => 2
            ],
            [
                'nome' => "Cumbernauld",
                'pais_id' => 2
            ],
            [
                'nome' => "Cumnock",
                'pais_id' => 2
            ],
            [
                'nome' => "Cupar",
                'pais_id' => 2
            ],
            [
                'nome' => "Cwmbrân",
                'pais_id' => 2
            ],
            [
                'nome' => "Dalbeattie",
                'pais_id' => 2
            ],
            [
                'nome' => "Dalkeith",
                'pais_id' => 2
            ],
            [
                'nome' => "Dalton-in-Furness",
                'pais_id' => 2
            ],
            [
                'nome' => "Darlaston",
                'pais_id' => 2
            ],
            [
                'nome' => "Darley Dale",
                'pais_id' => 2
            ],
            [
                'nome' => "Darlington",
                'pais_id' => 2
            ],
            [
                'nome' => "Dartford",
                'pais_id' => 2
            ],
            [
                'nome' => "Dartmouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Darvel",
                'pais_id' => 2
            ],
            [
                'nome' => "Darwen",
                'pais_id' => 2
            ],
            [
                'nome' => "Daventry",
                'pais_id' => 2
            ],
            [
                'nome' => "Dawlish",
                'pais_id' => 2
            ],
            [
                'nome' => "Deal",
                'pais_id' => 2
            ],
            [
                'nome' => "Denbigh / Dinbych",
                'pais_id' => 2
            ],
            [
                'nome' => "Denny",
                'pais_id' => 2
            ],
            [
                'nome' => "Denton",
                'pais_id' => 2
            ],
            [
                'nome' => "Derby",
                'pais_id' => 2
            ],
            [
                'nome' => "Dereham",
                'pais_id' => 2
            ],
            [
                'nome' => "Derry / Londonderry",
                'pais_id' => 2
            ],
            [
                'nome' => "Desborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Devizes",
                'pais_id' => 2
            ],
            [
                'nome' => "Dewsbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Didcot",
                'pais_id' => 2
            ],
            [
                'nome' => "Dingwall",
                'pais_id' => 2
            ],
            [
                'nome' => "Dinnington",
                'pais_id' => 2
            ],
            [
                'nome' => "Diss",
                'pais_id' => 2
            ],
            [
                'nome' => "Dolgellau",
                'pais_id' => 2
            ],
            [
                'nome' => "Dollar",
                'pais_id' => 2
            ],
            [
                'nome' => "Donaghadee",
                'pais_id' => 2
            ],
            [
                'nome' => "Doncaster",
                'pais_id' => 2
            ],
            [
                'nome' => "Dorchester",
                'pais_id' => 2
            ],
            [
                'nome' => "Dorking",
                'pais_id' => 2
            ],
            [
                'nome' => "Dornoch",
                'pais_id' => 2
            ],
            [
                'nome' => "Douglas",
                'pais_id' => 2
            ],
            [
                'nome' => "Doune",
                'pais_id' => 2
            ],
            [
                'nome' => "Dover",
                'pais_id' => 2
            ],
            [
                'nome' => "Downham Market",
                'pais_id' => 2
            ],
            [
                'nome' => "Downpatrick",
                'pais_id' => 2
            ],
            [
                'nome' => "Driffield",
                'pais_id' => 2
            ],
            [
                'nome' => "Droitwich Spa",
                'pais_id' => 2
            ],
            [
                'nome' => "Dromore ",
                'pais_id' => 2
            ],
            [
                'nome' => "Dronfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Droylsden",
                'pais_id' => 2
            ],
            [
                'nome' => "Dudley",
                'pais_id' => 2
            ],
            [
                'nome' => "Dufftown",
                'pais_id' => 2
            ],
            [
                'nome' => "Dukinfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Dulverton",
                'pais_id' => 2
            ],
            [
                'nome' => "Dumbarton",
                'pais_id' => 2
            ],
            [
                'nome' => "Dumfries",
                'pais_id' => 2
            ],
            [
                'nome' => "Dunbar",
                'pais_id' => 2
            ],
            [
                'nome' => "Dunblane",
                'pais_id' => 2
            ],
            [
                'nome' => "Dundee",
                'pais_id' => 2
            ],
            [
                'nome' => "Dundonald",
                'pais_id' => 2
            ],
            [
                'nome' => "Dunfermline",
                'pais_id' => 2
            ],
            [
                'nome' => "Dungannon",
                'pais_id' => 2
            ],
            [
                'nome' => "Dunmurry",
                'pais_id' => 2
            ],
            [
                'nome' => "Dunoon / Dùn Obhainn",
                'pais_id' => 2
            ],
            [
                'nome' => "Duns",
                'pais_id' => 2
            ],
            [
                'nome' => "Dunstable",
                'pais_id' => 2
            ],
            [
                'nome' => "Durham",
                'pais_id' => 2
            ],
            [
                'nome' => "Dursley",
                'pais_id' => 2
            ],
            [
                'nome' => "Earby",
                'pais_id' => 2
            ],
            [
                'nome' => "Earl Shilton",
                'pais_id' => 2
            ],
            [
                'nome' => "Easingwold",
                'pais_id' => 2
            ],
            [
                'nome' => "Eastbourne",
                'pais_id' => 2
            ],
            [
                'nome' => "East Cowes",
                'pais_id' => 2
            ],
            [
                'nome' => "East Grinstead",
                'pais_id' => 2
            ],
            [
                'nome' => "East Kilbride",
                'pais_id' => 2
            ],
            [
                'nome' => "Eastleigh",
                'pais_id' => 2
            ],
            [
                'nome' => "East Linton",
                'pais_id' => 2
            ],
            [
                'nome' => "Eastwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Ebbw Vale / Glyn Ebwy",
                'pais_id' => 2
            ],
            [
                'nome' => "Eccles",
                'pais_id' => 2
            ],
            [
                'nome' => "Eccleshall",
                'pais_id' => 2
            ],
            [
                'nome' => "Edenbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Edinburgh",
                'pais_id' => 2
            ],
            [
                'nome' => "Egham",
                'pais_id' => 2
            ],
            [
                'nome' => "Egremont",
                'pais_id' => 2
            ],
            [
                'nome' => "Elgin",
                'pais_id' => 2
            ],
            [
                'nome' => "Elland",
                'pais_id' => 2
            ],
            [
                'nome' => "Ellesmere",
                'pais_id' => 2
            ],
            [
                'nome' => "Ellesmere Port",
                'pais_id' => 2
            ],
            [
                'nome' => "Ellon",
                'pais_id' => 2
            ],
            [
                'nome' => "Ely",
                'pais_id' => 2
            ],
            [
                'nome' => "Emsworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Enniskillen",
                'pais_id' => 2
            ],
            [
                'nome' => "Epping",
                'pais_id' => 2
            ],
            [
                'nome' => "Epsom",
                'pais_id' => 2
            ],
            [
                'nome' => "Epworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Erskine",
                'pais_id' => 2
            ],
            [
                'nome' => "Esher",
                'pais_id' => 2
            ],
            [
                'nome' => "Eton",
                'pais_id' => 2
            ],
            [
                'nome' => "Evesham",
                'pais_id' => 2
            ],
            [
                'nome' => "Ewell",
                'pais_id' => 2
            ],
            [
                'nome' => "Exeter",
                'pais_id' => 2
            ],
            [
                'nome' => "Exmouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Eye",
                'pais_id' => 2
            ],
            [
                'nome' => "Eyemouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Failsworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Fairford",
                'pais_id' => 2
            ],
            [
                'nome' => "Fakenham",
                'pais_id' => 2
            ],
            [
                'nome' => "Falkirk",
                'pais_id' => 2
            ],
            [
                'nome' => "Falkland",
                'pais_id' => 2
            ],
            [
                'nome' => "Falmouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Fareham",
                'pais_id' => 2
            ],
            [
                'nome' => "Faringdon",
                'pais_id' => 2
            ],
            [
                'nome' => "Farnborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Farnham",
                'pais_id' => 2
            ],
            [
                'nome' => "Farnworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Faversham",
                'pais_id' => 2
            ],
            [
                'nome' => "Fazeley",
                'pais_id' => 2
            ],
            [
                'nome' => "Featherstone",
                'pais_id' => 2
            ],
            [
                'nome' => "Felixstowe",
                'pais_id' => 2
            ],
            [
                'nome' => "Ferndale",
                'pais_id' => 2
            ],
            [
                'nome' => "Ferndown",
                'pais_id' => 2
            ],
            [
                'nome' => "Ferryhill",
                'pais_id' => 2
            ],
            [
                'nome' => "Filey",
                'pais_id' => 2
            ],
            [
                'nome' => "Filton",
                'pais_id' => 2
            ],
            [
                'nome' => "Findochty",
                'pais_id' => 2
            ],
            [
                'nome' => "Fishguard / Abergwaun",
                'pais_id' => 2
            ],
            [
                'nome' => "Fleet",
                'pais_id' => 2
            ],
            [
                'nome' => "Fleetwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Flint / Y Fflint",
                'pais_id' => 2
            ],
            [
                'nome' => "Flitwick",
                'pais_id' => 2
            ],
            [
                'nome' => "Folkestone",
                'pais_id' => 2
            ],
            [
                'nome' => "Fordingbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Forfar",
                'pais_id' => 2
            ],
            [
                'nome' => "Formby",
                'pais_id' => 2
            ],
            [
                'nome' => "Forres",
                'pais_id' => 2
            ],
            [
                'nome' => "Fortrose",
                'pais_id' => 2
            ],
            [
                'nome' => "Fortuneswell",
                'pais_id' => 2
            ],
            [
                'nome' => "Fort William / An Gearasdan",
                'pais_id' => 2
            ],
            [
                'nome' => "Fowey",
                'pais_id' => 2
            ],
            [
                'nome' => "Framlingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Fraserburgh",
                'pais_id' => 2
            ],
            [
                'nome' => "Freckleton",
                'pais_id' => 2
            ],
            [
                'nome' => "Frimley",
                'pais_id' => 2
            ],
            [
                'nome' => "Frinton-on-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Frodsham",
                'pais_id' => 2
            ],
            [
                'nome' => "Frome",
                'pais_id' => 2
            ],
            [
                'nome' => "Fulwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Gainsborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Galashiels",
                'pais_id' => 2
            ],
            [
                'nome' => "Galston",
                'pais_id' => 2
            ],
            [
                'nome' => "Garforth",
                'pais_id' => 2
            ],
            [
                'nome' => "Garstang",
                'pais_id' => 2
            ],
            [
                'nome' => "Gatehouse of Fleet",
                'pais_id' => 2
            ],
            [
                'nome' => "Gateshead",
                'pais_id' => 2
            ],
            [
                'nome' => "Gatley",
                'pais_id' => 2
            ],
            [
                'nome' => "Gerrards Cross",
                'pais_id' => 2
            ],
            [
                'nome' => "Gillingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Gillingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Girvan",
                'pais_id' => 2
            ],
            [
                'nome' => "Glasgow",
                'pais_id' => 2
            ],
            [
                'nome' => "Glastonbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Glenrothes",
                'pais_id' => 2
            ],
            [
                'nome' => "Glossop",
                'pais_id' => 2
            ],
            [
                'nome' => "Gloucester",
                'pais_id' => 2
            ],
            [
                'nome' => "Glyn-neath / Glyn-nedd",
                'pais_id' => 2
            ],
            [
                'nome' => "Godalming",
                'pais_id' => 2
            ],
            [
                'nome' => "Godmanchester",
                'pais_id' => 2
            ],
            [
                'nome' => "Golborne",
                'pais_id' => 2
            ],
            [
                'nome' => "Goldthorpe",
                'pais_id' => 2
            ],
            [
                'nome' => "Goodwick / Wdig",
                'pais_id' => 2
            ],
            [
                'nome' => "Goole",
                'pais_id' => 2
            ],
            [
                'nome' => "Gorleston-on-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Gorseinon",
                'pais_id' => 2
            ],
            [
                'nome' => "Gosport",
                'pais_id' => 2
            ],
            [
                'nome' => "Gourock",
                'pais_id' => 2
            ],
            [
                'nome' => "Grangemouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Grange-over-Sands",
                'pais_id' => 2
            ],
            [
                'nome' => "Grantham",
                'pais_id' => 2
            ],
            [
                'nome' => "Grantown-on-Spey",
                'pais_id' => 2
            ],
            [
                'nome' => "Gravesend",
                'pais_id' => 2
            ],
            [
                'nome' => "Grays",
                'pais_id' => 2
            ],
            [
                'nome' => "Great Dunmow",
                'pais_id' => 2
            ],
            [
                'nome' => "Great Harwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Great Malvern",
                'pais_id' => 2
            ],
            [
                'nome' => "Great Torrington",
                'pais_id' => 2
            ],
            [
                'nome' => "Great Yarmouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Greenock",
                'pais_id' => 2
            ],
            [
                'nome' => "Grimsby",
                'pais_id' => 2
            ],
            [
                'nome' => "Guildford",
                'pais_id' => 2
            ],
            [
                'nome' => "Guisborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Guiseley",
                'pais_id' => 2
            ],
            [
                'nome' => "Haddington",
                'pais_id' => 2
            ],
            [
                'nome' => "Hadleigh",
                'pais_id' => 2
            ],
            [
                'nome' => "Hailsham",
                'pais_id' => 2
            ],
            [
                'nome' => "Hale",
                'pais_id' => 2
            ],
            [
                'nome' => "Halesowen",
                'pais_id' => 2
            ],
            [
                'nome' => "Halesworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Halifax",
                'pais_id' => 2
            ],
            [
                'nome' => "Halstead",
                'pais_id' => 2
            ],
            [
                'nome' => "Haltwhistle",
                'pais_id' => 2
            ],
            [
                'nome' => "Hamilton",
                'pais_id' => 2
            ],
            [
                'nome' => "Harlech",
                'pais_id' => 2
            ],
            [
                'nome' => "Harleston",
                'pais_id' => 2
            ],
            [
                'nome' => "Harlow",
                'pais_id' => 2
            ],
            [
                'nome' => "Harpenden",
                'pais_id' => 2
            ],
            [
                'nome' => "Harrogate",
                'pais_id' => 2
            ],
            [
                'nome' => "Hartlepool",
                'pais_id' => 2
            ],
            [
                'nome' => "Harwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Haslemere",
                'pais_id' => 2
            ],
            [
                'nome' => "Haslingden",
                'pais_id' => 2
            ],
            [
                'nome' => "Hastings",
                'pais_id' => 2
            ],
            [
                'nome' => "Hatfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Havant",
                'pais_id' => 2
            ],
            [
                'nome' => "Haverfordwest / Hwlffordd",
                'pais_id' => 2
            ],
            [
                'nome' => "Haverhill",
                'pais_id' => 2
            ],
            [
                'nome' => "Hawick",
                'pais_id' => 2
            ],
            [
                'nome' => "Haxby",
                'pais_id' => 2
            ],
            [
                'nome' => "Haydock",
                'pais_id' => 2
            ],
            [
                'nome' => "Hayle",
                'pais_id' => 2
            ],
            [
                'nome' => "Hay-on-Wye / Y Gelli Gandryll",
                'pais_id' => 2
            ],
            [
                'nome' => "Haywards Heath",
                'pais_id' => 2
            ],
            [
                'nome' => "Hazel Grove",
                'pais_id' => 2
            ],
            [
                'nome' => "Heanor",
                'pais_id' => 2
            ],
            [
                'nome' => "Heathfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Hebburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Hebden Bridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Heckington",
                'pais_id' => 2
            ],
            [
                'nome' => "Heckmondwike",
                'pais_id' => 2
            ],
            [
                'nome' => "Hedge End",
                'pais_id' => 2
            ],
            [
                'nome' => "Hedon",
                'pais_id' => 2
            ],
            [
                'nome' => "Helensburgh",
                'pais_id' => 2
            ],
            [
                'nome' => "Helmsley",
                'pais_id' => 2
            ],
            [
                'nome' => "Helston",
                'pais_id' => 2
            ],
            [
                'nome' => "Hemel Hempstead",
                'pais_id' => 2
            ],
            [
                'nome' => "Hemsworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Henley-in-Arden",
                'pais_id' => 2
            ],
            [
                'nome' => "Henley-on-Thames",
                'pais_id' => 2
            ],
            [
                'nome' => "Hereford",
                'pais_id' => 2
            ],
            [
                'nome' => "Herne Bay",
                'pais_id' => 2
            ],
            [
                'nome' => "Hertford",
                'pais_id' => 2
            ],
            [
                'nome' => "Hessle",
                'pais_id' => 2
            ],
            [
                'nome' => "Heswall",
                'pais_id' => 2
            ],
            [
                'nome' => "Hetton-le-Hole",
                'pais_id' => 2
            ],
            [
                'nome' => "Hexham",
                'pais_id' => 2
            ],
            [
                'nome' => "Heysham",
                'pais_id' => 2
            ],
            [
                'nome' => "Heywood",
                'pais_id' => 2
            ],
            [
                'nome' => "Higham Ferrers",
                'pais_id' => 2
            ],
            [
                'nome' => "High Bentham",
                'pais_id' => 2
            ],
            [
                'nome' => "Higher Dunstone",
                'pais_id' => 2
            ],
            [
                'nome' => "Higher Larrick",
                'pais_id' => 2
            ],
            [
                'nome' => "Highworth",
                'pais_id' => 2
            ],
            [
                'nome' => "High Wycombe",
                'pais_id' => 2
            ],
            [
                'nome' => "Hinckley",
                'pais_id' => 2
            ],
            [
                'nome' => "Hindley",
                'pais_id' => 2
            ],
            [
                'nome' => "Hingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Hitchin",
                'pais_id' => 2
            ],
            [
                'nome' => "Hoddesdon",
                'pais_id' => 2
            ],
            [
                'nome' => "Holbeach",
                'pais_id' => 2
            ],
            [
                'nome' => "Holmfirth",
                'pais_id' => 2
            ],
            [
                'nome' => "Holsworthy",
                'pais_id' => 2
            ],
            [
                'nome' => "Holt",
                'pais_id' => 2
            ],
            [
                'nome' => "Holyhead / Caergybi",
                'pais_id' => 2
            ],
            [
                'nome' => "Holywell / Treffynnon",
                'pais_id' => 2
            ],
            [
                'nome' => "Holywood",
                'pais_id' => 2
            ],
            [
                'nome' => "Honiton",
                'pais_id' => 2
            ],
            [
                'nome' => "Horbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Horley",
                'pais_id' => 2
            ],
            [
                'nome' => "Horncastle",
                'pais_id' => 2
            ],
            [
                'nome' => "Horndean",
                'pais_id' => 2
            ],
            [
                'nome' => "Hornsea",
                'pais_id' => 2
            ],
            [
                'nome' => "Horsham",
                'pais_id' => 2
            ],
            [
                'nome' => "Horwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Houghton-le-Spring",
                'pais_id' => 2
            ],
            [
                'nome' => "Houghton Regis",
                'pais_id' => 2
            ],
            [
                'nome' => "Howden",
                'pais_id' => 2
            ],
            [
                'nome' => "Hoylake",
                'pais_id' => 2
            ],
            [
                'nome' => "Hucknall",
                'pais_id' => 2
            ],
            [
                'nome' => "Huddersfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Hugh Town",
                'pais_id' => 2
            ],
            [
                'nome' => "Hungerford",
                'pais_id' => 2
            ],
            [
                'nome' => "Hunstanton",
                'pais_id' => 2
            ],
            [
                'nome' => "Huntingdon",
                'pais_id' => 2
            ],
            [
                'nome' => "Huntly",
                'pais_id' => 2
            ],
            [
                'nome' => "Hyde",
                'pais_id' => 2
            ],
            [
                'nome' => "Hythe",
                'pais_id' => 2
            ],
            [
                'nome' => "Ibstock",
                'pais_id' => 2
            ],
            [
                'nome' => "Ilfracombe",
                'pais_id' => 2
            ],
            [
                'nome' => "Ilkeston",
                'pais_id' => 2
            ],
            [
                'nome' => "Ilkley",
                'pais_id' => 2
            ],
            [
                'nome' => "Ilminster",
                'pais_id' => 2
            ],
            [
                'nome' => "Immingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Ince-in-Makerfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Innerleithen",
                'pais_id' => 2
            ],
            [
                'nome' => "Inveraray",
                'pais_id' => 2
            ],
            [
                'nome' => "Inverbervie",
                'pais_id' => 2
            ],
            [
                'nome' => "Invergordon",
                'pais_id' => 2
            ],
            [
                'nome' => "Inverkeithing",
                'pais_id' => 2
            ],
            [
                'nome' => "Inverness / Inbhir Nis",
                'pais_id' => 2
            ],
            [
                'nome' => "Inverurie",
                'pais_id' => 2
            ],
            [
                'nome' => "Ipswich",
                'pais_id' => 2
            ],
            [
                'nome' => "Irlam",
                'pais_id' => 2
            ],
            [
                'nome' => "Irthlingborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Irvine",
                'pais_id' => 2
            ],
            [
                'nome' => "Ivybridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Jarrow",
                'pais_id' => 2
            ],
            [
                'nome' => "Jedburgh",
                'pais_id' => 2
            ],
            [
                'nome' => "Johnstone",
                'pais_id' => 2
            ],
            [
                'nome' => "Kearsley",
                'pais_id' => 2
            ],
            [
                'nome' => "Keighley",
                'pais_id' => 2
            ],
            [
                'nome' => "Keith",
                'pais_id' => 2
            ],
            [
                'nome' => "Kelso",
                'pais_id' => 2
            ],
            [
                'nome' => "Kempston",
                'pais_id' => 2
            ],
            [
                'nome' => "Kendal",
                'pais_id' => 2
            ],
            [
                'nome' => "Kenilworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Kesgrave",
                'pais_id' => 2
            ],
            [
                'nome' => "Keswick",
                'pais_id' => 2
            ],
            [
                'nome' => "Kettering",
                'pais_id' => 2
            ],
            [
                'nome' => "Keynsham",
                'pais_id' => 2
            ],
            [
                'nome' => "Kidderminster",
                'pais_id' => 2
            ],
            [
                'nome' => "Kidlington",
                'pais_id' => 2
            ],
            [
                'nome' => "Kidsgrove",
                'pais_id' => 2
            ],
            [
                'nome' => "Kidwelly / Cydweli",
                'pais_id' => 2
            ],
            [
                'nome' => "Kilkeel",
                'pais_id' => 2
            ],
            [
                'nome' => "Kilmarnock",
                'pais_id' => 2
            ],
            [
                'nome' => "Kilsyth",
                'pais_id' => 2
            ],
            [
                'nome' => "Kilwinning",
                'pais_id' => 2
            ],
            [
                'nome' => "Kimberley",
                'pais_id' => 2
            ],
            [
                'nome' => "Kinghorn",
                'pais_id' => 2
            ],
            [
                'nome' => "Kingsbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "King's Lynn",
                'pais_id' => 2
            ],
            [
                'nome' => "Kingsteignton",
                'pais_id' => 2
            ],
            [
                'nome' => "Kingston upon Hull",
                'pais_id' => 2
            ],
            [
                'nome' => "Kingswinford",
                'pais_id' => 2
            ],
            [
                'nome' => "Kington",
                'pais_id' => 2
            ],
            [
                'nome' => "Kingussie",
                'pais_id' => 2
            ],
            [
                'nome' => "Kinross",
                'pais_id' => 2
            ],
            [
                'nome' => "Kintore",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkby",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkby-in-Ashfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkby Lonsdale",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkbymoorside",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkby Stephen",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkcaldy",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkcudbright",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkham",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkintilloch",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirkwall",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirriemuir",
                'pais_id' => 2
            ],
            [
                'nome' => "Kirton in Lindsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Knaresborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Knighton / Tref-y-Clawdd",
                'pais_id' => 2
            ],
            [
                'nome' => "Knottingley",
                'pais_id' => 2
            ],
            [
                'nome' => "Knutsford",
                'pais_id' => 2
            ],
            [
                'nome' => "Ladybank",
                'pais_id' => 2
            ],
            [
                'nome' => "Lampeter / Llanbedr Pont Steffan",
                'pais_id' => 2
            ],
            [
                'nome' => "Lanark",
                'pais_id' => 2
            ],
            [
                'nome' => "Lancaster",
                'pais_id' => 2
            ],
            [
                'nome' => "Langholm",
                'pais_id' => 2
            ],
            [
                'nome' => "Langport",
                'pais_id' => 2
            ],
            [
                'nome' => "Largs",
                'pais_id' => 2
            ],
            [
                'nome' => "Larkhall",
                'pais_id' => 2
            ],
            [
                'nome' => "Larne",
                'pais_id' => 2
            ],
            [
                'nome' => "Lauder",
                'pais_id' => 2
            ],
            [
                'nome' => "Laugharne / Talacharn",
                'pais_id' => 2
            ],
            [
                'nome' => "Launceston",
                'pais_id' => 2
            ],
            [
                'nome' => "Laurencekirk",
                'pais_id' => 2
            ],
            [
                'nome' => "Leatherhead",
                'pais_id' => 2
            ],
            [
                'nome' => "Lechlade-on-Thames",
                'pais_id' => 2
            ],
            [
                'nome' => "Ledbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Leeds",
                'pais_id' => 2
            ],
            [
                'nome' => "Leek",
                'pais_id' => 2
            ],
            [
                'nome' => "Lees",
                'pais_id' => 2
            ],
            [
                'nome' => "Leicester",
                'pais_id' => 2
            ],
            [
                'nome' => "Leigh",
                'pais_id' => 2
            ],
            [
                'nome' => "Leigh-on-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Leighton Buzzard",
                'pais_id' => 2
            ],
            [
                'nome' => "Leiston",
                'pais_id' => 2
            ],
            [
                'nome' => "Leominster",
                'pais_id' => 2
            ],
            [
                'nome' => "Lerwick",
                'pais_id' => 2
            ],
            [
                'nome' => "Leslie",
                'pais_id' => 2
            ],
            [
                'nome' => "Letchworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Leven",
                'pais_id' => 2
            ],
            [
                'nome' => "Lewes",
                'pais_id' => 2
            ],
            [
                'nome' => "Leyburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Leyland",
                'pais_id' => 2
            ],
            [
                'nome' => "Lichfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Limavady",
                'pais_id' => 2
            ],
            [
                'nome' => "Lincoln",
                'pais_id' => 2
            ],
            [
                'nome' => "Linlithgow",
                'pais_id' => 2
            ],
            [
                'nome' => "Lisburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Liskeard",
                'pais_id' => 2
            ],
            [
                'nome' => "Litherland",
                'pais_id' => 2
            ],
            [
                'nome' => "Littleborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Littlehampton",
                'pais_id' => 2
            ],
            [
                'nome' => "Little Lever",
                'pais_id' => 2
            ],
            [
                'nome' => "Liverpool",
                'pais_id' => 2
            ],
            [
                'nome' => "Liversedge",
                'pais_id' => 2
            ],
            [
                'nome' => "Livingston",
                'pais_id' => 2
            ],
            [
                'nome' => "Llandeilo",
                'pais_id' => 2
            ],
            [
                'nome' => "Llandovery / Llanymddyfri",
                'pais_id' => 2
            ],
            [
                'nome' => "Llandrindod Wells / Llandrindod",
                'pais_id' => 2
            ],
            [
                'nome' => "Llandudno",
                'pais_id' => 2
            ],
            [
                'nome' => "Llandysul",
                'pais_id' => 2
            ],
            [
                'nome' => "Llanelli",
                'pais_id' => 2
            ],
            [
                'nome' => "Llanfair Caereinion",
                'pais_id' => 2
            ],
            [
                'nome' => "Llanfairfechan",
                'pais_id' => 2
            ],
            [
                'nome' => "Llanfyllin",
                'pais_id' => 2
            ],
            [
                'nome' => "Llangefni",
                'pais_id' => 2
            ],
            [
                'nome' => "Llangollen",
                'pais_id' => 2
            ],
            [
                'nome' => "Llanidloes",
                'pais_id' => 2
            ],
            [
                'nome' => "Llanrwst",
                'pais_id' => 2
            ],
            [
                'nome' => "Llantrisant",
                'pais_id' => 2
            ],
            [
                'nome' => "Llantwit Major / Llanilltud Fawr",
                'pais_id' => 2
            ],
            [
                'nome' => "Llanwrtyd Wells",
                'pais_id' => 2
            ],
            [
                'nome' => "Llanybydder / Llanybyther",
                'pais_id' => 2
            ],
            [
                'nome' => "Loanhead",
                'pais_id' => 2
            ],
            [
                'nome' => "Lochgelly",
                'pais_id' => 2
            ],
            [
                'nome' => "Lochgilphead / Ceann Loch Gilb",
                'pais_id' => 2
            ],
            [
                'nome' => "Lochmaben",
                'pais_id' => 2
            ],
            [
                'nome' => "Lockerbie",
                'pais_id' => 2
            ],
            [
                'nome' => "Loddon",
                'pais_id' => 2
            ],
            [
                'nome' => "Loftus",
                'pais_id' => 2
            ],
            [
                'nome' => "London",
                'pais_id' => 2
            ],
            [
                'nome' => "Longbenton",
                'pais_id' => 2
            ],
            [
                'nome' => "Long Eaton",
                'pais_id' => 2
            ],
            [
                'nome' => "Longridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Long Sutton",
                'pais_id' => 2
            ],
            [
                'nome' => "Longtown",
                'pais_id' => 2
            ],
            [
                'nome' => "Looe",
                'pais_id' => 2
            ],
            [
                'nome' => "Lossiemouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Lostwithiel",
                'pais_id' => 2
            ],
            [
                'nome' => "Loughborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Loughor / Casllwchwr",
                'pais_id' => 2
            ],
            [
                'nome' => "Loughton",
                'pais_id' => 2
            ],
            [
                'nome' => "Louth",
                'pais_id' => 2
            ],
            [
                'nome' => "Lowestoft",
                'pais_id' => 2
            ],
            [
                'nome' => "Ludgershall",
                'pais_id' => 2
            ],
            [
                'nome' => "Ludlow",
                'pais_id' => 2
            ],
            [
                'nome' => "Lurgan",
                'pais_id' => 2
            ],
            [
                'nome' => "Luton",
                'pais_id' => 2
            ],
            [
                'nome' => "Lutterworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Lydd",
                'pais_id' => 2
            ],
            [
                'nome' => "Lydney",
                'pais_id' => 2
            ],
            [
                'nome' => "Lyme Regis",
                'pais_id' => 2
            ],
            [
                'nome' => "Lymington",
                'pais_id' => 2
            ],
            [
                'nome' => "Lymm",
                'pais_id' => 2
            ],
            [
                'nome' => "Lynton",
                'pais_id' => 2
            ],
            [
                'nome' => "Lytham St Anne's",
                'pais_id' => 2
            ],
            [
                'nome' => "Mablethorpe",
                'pais_id' => 2
            ],
            [
                'nome' => "Macclesfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Macduff",
                'pais_id' => 2
            ],
            [
                'nome' => "Machynlleth",
                'pais_id' => 2
            ],
            [
                'nome' => "Madeley",
                'pais_id' => 2
            ],
            [
                'nome' => "Maesteg",
                'pais_id' => 2
            ],
            [
                'nome' => "Magherafelt",
                'pais_id' => 2
            ],
            [
                'nome' => "Maghull",
                'pais_id' => 2
            ],
            [
                'nome' => "Maidenhead",
                'pais_id' => 2
            ],
            [
                'nome' => "Maidstone",
                'pais_id' => 2
            ],
            [
                'nome' => "Maldon",
                'pais_id' => 2
            ],
            [
                'nome' => "Malmesbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Maltby",
                'pais_id' => 2
            ],
            [
                'nome' => "Malton",
                'pais_id' => 2
            ],
            [
                'nome' => "Manchester",
                'pais_id' => 2
            ],
            [
                'nome' => "Manningtree",
                'pais_id' => 2
            ],
            [
                'nome' => "Mansfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Mansfield Woodhouse",
                'pais_id' => 2
            ],
            [
                'nome' => "March",
                'pais_id' => 2
            ],
            [
                'nome' => "Margate",
                'pais_id' => 2
            ],
            [
                'nome' => "Market Bosworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Market Deeping",
                'pais_id' => 2
            ],
            [
                'nome' => "Market Drayton",
                'pais_id' => 2
            ],
            [
                'nome' => "Market Harborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Market Jew / Marazion",
                'pais_id' => 2
            ],
            [
                'nome' => "Market Rasen",
                'pais_id' => 2
            ],
            [
                'nome' => "Market Warsop",
                'pais_id' => 2
            ],
            [
                'nome' => "Market Weighton",
                'pais_id' => 2
            ],
            [
                'nome' => "Markinch",
                'pais_id' => 2
            ],
            [
                'nome' => "Marlborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Marlow",
                'pais_id' => 2
            ],
            [
                'nome' => "Marple",
                'pais_id' => 2
            ],
            [
                'nome' => "Marske-by-the-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Maryport",
                'pais_id' => 2
            ],
            [
                'nome' => "Masham",
                'pais_id' => 2
            ],
            [
                'nome' => "Matlock",
                'pais_id' => 2
            ],
            [
                'nome' => "Maybole",
                'pais_id' => 2
            ],
            [
                'nome' => "Meadow Well",
                'pais_id' => 2
            ],
            [
                'nome' => "Melksham",
                'pais_id' => 2
            ],
            [
                'nome' => "Melrose",
                'pais_id' => 2
            ],
            [
                'nome' => "Meltham",
                'pais_id' => 2
            ],
            [
                'nome' => "Melton Mowbray",
                'pais_id' => 2
            ],
            [
                'nome' => "Menai Bridge / Porthaethwy",
                'pais_id' => 2
            ],
            [
                'nome' => "Mere",
                'pais_id' => 2
            ],
            [
                'nome' => "Merthyr Tydfil / Merthyr Tudful",
                'pais_id' => 2
            ],
            [
                'nome' => "Methil",
                'pais_id' => 2
            ],
            [
                'nome' => "Mexborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Middleham",
                'pais_id' => 2
            ],
            [
                'nome' => "Middlesbrough",
                'pais_id' => 2
            ],
            [
                'nome' => "Middleton",
                'pais_id' => 2
            ],
            [
                'nome' => "Middlewich",
                'pais_id' => 2
            ],
            [
                'nome' => "Midhurst",
                'pais_id' => 2
            ],
            [
                'nome' => "Midsomer Norton",
                'pais_id' => 2
            ],
            [
                'nome' => "Mildenhall",
                'pais_id' => 2
            ],
            [
                'nome' => "Milford Haven / Aberdaugleddau",
                'pais_id' => 2
            ],
            [
                'nome' => "Millom",
                'pais_id' => 2
            ],
            [
                'nome' => "Millport",
                'pais_id' => 2
            ],
            [
                'nome' => "Milngavie",
                'pais_id' => 2
            ],
            [
                'nome' => "Milnrow",
                'pais_id' => 2
            ],
            [
                'nome' => "Milton Keynes",
                'pais_id' => 2
            ],
            [
                'nome' => "Minchinhampton",
                'pais_id' => 2
            ],
            [
                'nome' => "Minehead",
                'pais_id' => 2
            ],
            [
                'nome' => "Minster",
                'pais_id' => 2
            ],
            [
                'nome' => "Mirfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Mitcheldean",
                'pais_id' => 2
            ],
            [
                'nome' => "Moffat",
                'pais_id' => 2
            ],
            [
                'nome' => "Mold / Yr Wyddgrug",
                'pais_id' => 2
            ],
            [
                'nome' => "Monifieth",
                'pais_id' => 2
            ],
            [
                'nome' => "Monmouth / Trefynwy",
                'pais_id' => 2
            ],
            [
                'nome' => "Montgomery / Trefaldwyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Montrose",
                'pais_id' => 2
            ],
            [
                'nome' => "Morecambe",
                'pais_id' => 2
            ],
            [
                'nome' => "Moretonhampstead",
                'pais_id' => 2
            ],
            [
                'nome' => "Moreton-in-Marsh",
                'pais_id' => 2
            ],
            [
                'nome' => "Morley",
                'pais_id' => 2
            ],
            [
                'nome' => "Morpeth",
                'pais_id' => 2
            ],
            [
                'nome' => "Mossley",
                'pais_id' => 2
            ],
            [
                'nome' => "Motherwell",
                'pais_id' => 2
            ],
            [
                'nome' => "Mountain Ash / Aberpennar",
                'pais_id' => 2
            ],
            [
                'nome' => "Much Wenlock",
                'pais_id' => 2
            ],
            [
                'nome' => "Musselburgh",
                'pais_id' => 2
            ],
            [
                'nome' => "Nailsea",
                'pais_id' => 2
            ],
            [
                'nome' => "Nailsworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Nairn",
                'pais_id' => 2
            ],
            [
                'nome' => "Nantwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Nantyglo",
                'pais_id' => 2
            ],
            [
                'nome' => "Narberth / Arberth",
                'pais_id' => 2
            ],
            [
                'nome' => "Neath / Castell-nedd",
                'pais_id' => 2
            ],
            [
                'nome' => "Needham Market",
                'pais_id' => 2
            ],
            [
                'nome' => "Nefyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Nelson",
                'pais_id' => 2
            ],
            [
                'nome' => "Neston",
                'pais_id' => 2
            ],
            [
                'nome' => "New Alresford",
                'pais_id' => 2
            ],
            [
                'nome' => "Newark-on-Trent",
                'pais_id' => 2
            ],
            [
                'nome' => "Newbiggin-by-the-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Newbridge / Trecceln",
                'pais_id' => 2
            ],
            [
                'nome' => "Newburgh",
                'pais_id' => 2
            ],
            [
                'nome' => "Newbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Newcastle",
                'pais_id' => 2
            ],
            [
                'nome' => "Newcastle Emlyn / Castell Newydd Emlyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Newcastle-under-Lyme",
                'pais_id' => 2
            ],
            [
                'nome' => "Newcastle upon Tyne",
                'pais_id' => 2
            ],
            [
                'nome' => "Newent",
                'pais_id' => 2
            ],
            [
                'nome' => "New Galloway",
                'pais_id' => 2
            ],
            [
                'nome' => "Newhaven",
                'pais_id' => 2
            ],
            [
                'nome' => "Newlyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Newmarket",
                'pais_id' => 2
            ],
            [
                'nome' => "New Mills",
                'pais_id' => 2
            ],
            [
                'nome' => "Newmilns",
                'pais_id' => 2
            ],
            [
                'nome' => "New Milton",
                'pais_id' => 2
            ],
            [
                'nome' => "Newport",
                'pais_id' => 2
            ],
            [
                'nome' => "Newport",
                'pais_id' => 2
            ],
            [
                'nome' => "Newport / Casnewydd",
                'pais_id' => 2
            ],
            [
                'nome' => "Newport-on-Tay",
                'pais_id' => 2
            ],
            [
                'nome' => "Newport Pagnell",
                'pais_id' => 2
            ],
            [
                'nome' => "Newport / Trefdraeth",
                'pais_id' => 2
            ],
            [
                'nome' => "Newquay",
                'pais_id' => 2
            ],
            [
                'nome' => "New Quay / Ceinewydd",
                'pais_id' => 2
            ],
            [
                'nome' => "New Romney",
                'pais_id' => 2
            ],
            [
                'nome' => "Newry",
                'pais_id' => 2
            ],
            [
                'nome' => "Newton Abbot",
                'pais_id' => 2
            ],
            [
                'nome' => "Newton Aycliffe",
                'pais_id' => 2
            ],
            [
                'nome' => "Newton-le-Willows",
                'pais_id' => 2
            ],
            [
                'nome' => "Newton Stewart",
                'pais_id' => 2
            ],
            [
                'nome' => "Newtownabbey",
                'pais_id' => 2
            ],
            [
                'nome' => "Newtownards",
                'pais_id' => 2
            ],
            [
                'nome' => "Newtown / Y Drenewydd",
                'pais_id' => 2
            ],
            [
                'nome' => "Neyland",
                'pais_id' => 2
            ],
            [
                'nome' => "Normanton",
                'pais_id' => 2
            ],
            [
                'nome' => "Northallerton",
                'pais_id' => 2
            ],
            [
                'nome' => "Northam",
                'pais_id' => 2
            ],
            [
                'nome' => "Northampton",
                'pais_id' => 2
            ],
            [
                'nome' => "North Berwick",
                'pais_id' => 2
            ],
            [
                'nome' => "Northfleet",
                'pais_id' => 2
            ],
            [
                'nome' => "North Hykeham",
                'pais_id' => 2
            ],
            [
                'nome' => "Northleach",
                'pais_id' => 2
            ],
            [
                'nome' => "North Petherton",
                'pais_id' => 2
            ],
            [
                'nome' => "North Tawton",
                'pais_id' => 2
            ],
            [
                'nome' => "North Walsham",
                'pais_id' => 2
            ],
            [
                'nome' => "Northwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Norton-on-Derwent",
                'pais_id' => 2
            ],
            [
                'nome' => "Norwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Nottingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Nuneaton",
                'pais_id' => 2
            ],
            [
                'nome' => "Oakham",
                'pais_id' => 2
            ],
            [
                'nome' => "Oban",
                'pais_id' => 2
            ],
            [
                'nome' => "Okehampton",
                'pais_id' => 2
            ],
            [
                'nome' => "Oldbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Oldham",
                'pais_id' => 2
            ],
            [
                'nome' => "Oldmeldrum",
                'pais_id' => 2
            ],
            [
                'nome' => "Olney",
                'pais_id' => 2
            ],
            [
                'nome' => "Omagh",
                'pais_id' => 2
            ],
            [
                'nome' => "Ormskirk",
                'pais_id' => 2
            ],
            [
                'nome' => "Ossett",
                'pais_id' => 2
            ],
            [
                'nome' => "Oswaldtwistle",
                'pais_id' => 2
            ],
            [
                'nome' => "Oswestry / Croesoswallt",
                'pais_id' => 2
            ],
            [
                'nome' => "Otley",
                'pais_id' => 2
            ],
            [
                'nome' => "Ottery St Mary",
                'pais_id' => 2
            ],
            [
                'nome' => "Oundle",
                'pais_id' => 2
            ],
            [
                'nome' => "Oxford",
                'pais_id' => 2
            ],
            [
                'nome' => "Oxted",
                'pais_id' => 2
            ],
            [
                'nome' => "Paddock Wood",
                'pais_id' => 2
            ],
            [
                'nome' => "Padiham",
                'pais_id' => 2
            ],
            [
                'nome' => "Padstow",
                'pais_id' => 2
            ],
            [
                'nome' => "Paignton",
                'pais_id' => 2
            ],
            [
                'nome' => "Painswick",
                'pais_id' => 2
            ],
            [
                'nome' => "Paisley",
                'pais_id' => 2
            ],
            [
                'nome' => "Partington",
                'pais_id' => 2
            ],
            [
                'nome' => "Pateley Bridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Peacehaven",
                'pais_id' => 2
            ],
            [
                'nome' => "Peebles",
                'pais_id' => 2
            ],
            [
                'nome' => "Peel",
                'pais_id' => 2
            ],
            [
                'nome' => "Pembroke Dock / Doc Penfro",
                'pais_id' => 2
            ],
            [
                'nome' => "Pembroke / Penfro",
                'pais_id' => 2
            ],
            [
                'nome' => "Penarth",
                'pais_id' => 2
            ],
            [
                'nome' => "Pencoed",
                'pais_id' => 2
            ],
            [
                'nome' => "Penicuik",
                'pais_id' => 2
            ],
            [
                'nome' => "Penistone",
                'pais_id' => 2
            ],
            [
                'nome' => "Penkridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Penmaenmawr",
                'pais_id' => 2
            ],
            [
                'nome' => "Penrith",
                'pais_id' => 2
            ],
            [
                'nome' => "Penryn",
                'pais_id' => 2
            ],
            [
                'nome' => "Penzance",
                'pais_id' => 2
            ],
            [
                'nome' => "Pershore",
                'pais_id' => 2
            ],
            [
                'nome' => "Perth",
                'pais_id' => 2
            ],
            [
                'nome' => "Peterborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Peterhead",
                'pais_id' => 2
            ],
            [
                'nome' => "Peterlee",
                'pais_id' => 2
            ],
            [
                'nome' => "Petersfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Petworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Pickering",
                'pais_id' => 2
            ],
            [
                'nome' => "Pitlochry",
                'pais_id' => 2
            ],
            [
                'nome' => "Pittenweem",
                'pais_id' => 2
            ],
            [
                'nome' => "Plymouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Pocklington",
                'pais_id' => 2
            ],
            [
                'nome' => "Polegate",
                'pais_id' => 2
            ],
            [
                'nome' => "Pontardawe",
                'pais_id' => 2
            ],
            [
                'nome' => "Pontarddulais",
                'pais_id' => 2
            ],
            [
                'nome' => "Pontefract",
                'pais_id' => 2
            ],
            [
                'nome' => "Ponteland",
                'pais_id' => 2
            ],
            [
                'nome' => "Pontllanfraith",
                'pais_id' => 2
            ],
            [
                'nome' => "Pontycymer",
                'pais_id' => 2
            ],
            [
                'nome' => "Pontypool / Pont-y-pŵl",
                'pais_id' => 2
            ],
            [
                'nome' => "Pontypridd",
                'pais_id' => 2
            ],
            [
                'nome' => "Poole",
                'pais_id' => 2
            ],
            [
                'nome' => "Portadown",
                'pais_id' => 2
            ],
            [
                'nome' => "Port Glasgow",
                'pais_id' => 2
            ],
            [
                'nome' => "Porth",
                'pais_id' => 2
            ],
            [
                'nome' => "Porthcawl",
                'pais_id' => 2
            ],
            [
                'nome' => "Porthmadog",
                'pais_id' => 2
            ],
            [
                'nome' => "Portishead",
                'pais_id' => 2
            ],
            [
                'nome' => "Portlethen",
                'pais_id' => 2
            ],
            [
                'nome' => "Portrush",
                'pais_id' => 2
            ],
            [
                'nome' => "Portsmouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Portsoy",
                'pais_id' => 2
            ],
            [
                'nome' => "Portstewart",
                'pais_id' => 2
            ],
            [
                'nome' => "Port Talbot",
                'pais_id' => 2
            ],
            [
                'nome' => "Potters Bar",
                'pais_id' => 2
            ],
            [
                'nome' => "Potton",
                'pais_id' => 2
            ],
            [
                'nome' => "Poulton-le-Fylde",
                'pais_id' => 2
            ],
            [
                'nome' => "Poynton",
                'pais_id' => 2
            ],
            [
                'nome' => "Prescot",
                'pais_id' => 2
            ],
            [
                'nome' => "Prestatyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Presteigne / Llanandras",
                'pais_id' => 2
            ],
            [
                'nome' => "Preston",
                'pais_id' => 2
            ],
            [
                'nome' => "Prestonpans",
                'pais_id' => 2
            ],
            [
                'nome' => "Prestwick",
                'pais_id' => 2
            ],
            [
                'nome' => "Princes Risborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Prudhoe",
                'pais_id' => 2
            ],
            [
                'nome' => "Pudsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Pwllheli",
                'pais_id' => 2
            ],
            [
                'nome' => "Queenborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Queensferry",
                'pais_id' => 2
            ],
            [
                'nome' => "Radcliffe",
                'pais_id' => 2
            ],
            [
                'nome' => "Radlett",
                'pais_id' => 2
            ],
            [
                'nome' => "Radstock",
                'pais_id' => 2
            ],
            [
                'nome' => "Rainford",
                'pais_id' => 2
            ],
            [
                'nome' => "Ramsbottom",
                'pais_id' => 2
            ],
            [
                'nome' => "Ramsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Ramsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Ramsgate",
                'pais_id' => 2
            ],
            [
                'nome' => "Randalstown",
                'pais_id' => 2
            ],
            [
                'nome' => "Raunds",
                'pais_id' => 2
            ],
            [
                'nome' => "Rawmarsh",
                'pais_id' => 2
            ],
            [
                'nome' => "Rawtenstall",
                'pais_id' => 2
            ],
            [
                'nome' => "Rayleigh",
                'pais_id' => 2
            ],
            [
                'nome' => "Reading",
                'pais_id' => 2
            ],
            [
                'nome' => "Redcar",
                'pais_id' => 2
            ],
            [
                'nome' => "Redditch",
                'pais_id' => 2
            ],
            [
                'nome' => "Redhill",
                'pais_id' => 2
            ],
            [
                'nome' => "Redruth",
                'pais_id' => 2
            ],
            [
                'nome' => "Reepham",
                'pais_id' => 2
            ],
            [
                'nome' => "Reigate",
                'pais_id' => 2
            ],
            [
                'nome' => "Renfrew",
                'pais_id' => 2
            ],
            [
                'nome' => "Retford",
                'pais_id' => 2
            ],
            [
                'nome' => "Rhayader / Rhaeadr Gwy",
                'pais_id' => 2
            ],
            [
                'nome' => "Rhondda",
                'pais_id' => 2
            ],
            [
                'nome' => "Rhosgadfan",
                'pais_id' => 2
            ],
            [
                'nome' => "Rhuddlan",
                'pais_id' => 2
            ],
            [
                'nome' => "Rhyl",
                'pais_id' => 2
            ],
            [
                'nome' => "Rhymney / Rhymni",
                'pais_id' => 2
            ],
            [
                'nome' => "Richmond",
                'pais_id' => 2
            ],
            [
                'nome' => "Richmond",
                'pais_id' => 2
            ],
            [
                'nome' => "Rickmansworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Ringwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Ripley",
                'pais_id' => 2
            ],
            [
                'nome' => "Ripon",
                'pais_id' => 2
            ],
            [
                'nome' => "Risca / Rhisga",
                'pais_id' => 2
            ],
            [
                'nome' => "Rishton",
                'pais_id' => 2
            ],
            [
                'nome' => "Rochdale",
                'pais_id' => 2
            ],
            [
                'nome' => "Rochester",
                'pais_id' => 2
            ],
            [
                'nome' => "Rochford",
                'pais_id' => 2
            ],
            [
                'nome' => "Romiley",
                'pais_id' => 2
            ],
            [
                'nome' => "Romsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Rosehearty",
                'pais_id' => 2
            ],
            [
                'nome' => "Ross-on-Wye",
                'pais_id' => 2
            ],
            [
                'nome' => "Rothbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Rotherham",
                'pais_id' => 2
            ],
            [
                'nome' => "Rothes",
                'pais_id' => 2
            ],
            [
                'nome' => "Rothesay",
                'pais_id' => 2
            ],
            [
                'nome' => "Rothwell",
                'pais_id' => 2
            ],
            [
                'nome' => "Rowley Regis",
                'pais_id' => 2
            ],
            [
                'nome' => "Royal Leamington Spa",
                'pais_id' => 2
            ],
            [
                'nome' => "Royal Sutton Coldfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Royal Tunbridge Wells",
                'pais_id' => 2
            ],
            [
                'nome' => "Royal Wootton Bassett",
                'pais_id' => 2
            ],
            [
                'nome' => "Royston",
                'pais_id' => 2
            ],
            [
                'nome' => "Royston",
                'pais_id' => 2
            ],
            [
                'nome' => "Royton",
                'pais_id' => 2
            ],
            [
                'nome' => "Rugby",
                'pais_id' => 2
            ],
            [
                'nome' => "Rugeley",
                'pais_id' => 2
            ],
            [
                'nome' => "Runcorn",
                'pais_id' => 2
            ],
            [
                'nome' => "Rushden",
                'pais_id' => 2
            ],
            [
                'nome' => "Rutherglen",
                'pais_id' => 2
            ],
            [
                'nome' => "Ruthin / Rhuthun",
                'pais_id' => 2
            ],
            [
                'nome' => "Ryde",
                'pais_id' => 2
            ],
            [
                'nome' => "Rye",
                'pais_id' => 2
            ],
            [
                'nome' => "Ryton",
                'pais_id' => 2
            ],
            [
                'nome' => "Saffron Walden",
                'pais_id' => 2
            ],
            [
                'nome' => "Salcombe",
                'pais_id' => 2
            ],
            [
                'nome' => "Sale",
                'pais_id' => 2
            ],
            [
                'nome' => "Salford",
                'pais_id' => 2
            ],
            [
                'nome' => "Salisbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Saltash",
                'pais_id' => 2
            ],
            [
                'nome' => "Saltburn-by-the-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Saltcoats",
                'pais_id' => 2
            ],
            [
                'nome' => "Sandbach",
                'pais_id' => 2
            ],
            [
                'nome' => "Sandhurst",
                'pais_id' => 2
            ],
            [
                'nome' => "Sandiacre",
                'pais_id' => 2
            ],
            [
                'nome' => "Sandown",
                'pais_id' => 2
            ],
            [
                'nome' => "Sandwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Sandy",
                'pais_id' => 2
            ],
            [
                'nome' => "Sanquhar",
                'pais_id' => 2
            ],
            [
                'nome' => "Sawbridgeworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Saxmundham",
                'pais_id' => 2
            ],
            [
                'nome' => "Scarborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Scunthorpe",
                'pais_id' => 2
            ],
            [
                'nome' => "Seaford",
                'pais_id' => 2
            ],
            [
                'nome' => "Seaham",
                'pais_id' => 2
            ],
            [
                'nome' => "Seaton",
                'pais_id' => 2
            ],
            [
                'nome' => "Sedbergh",
                'pais_id' => 2
            ],
            [
                'nome' => "Sedgefield",
                'pais_id' => 2
            ],
            [
                'nome' => "Sedgley",
                'pais_id' => 2
            ],
            [
                'nome' => "Selby",
                'pais_id' => 2
            ],
            [
                'nome' => "Selkirk",
                'pais_id' => 2
            ],
            [
                'nome' => "Selsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Settle",
                'pais_id' => 2
            ],
            [
                'nome' => "Sevenoaks",
                'pais_id' => 2
            ],
            [
                'nome' => "Shaftesbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Shanklin",
                'pais_id' => 2
            ],
            [
                'nome' => "Shaw",
                'pais_id' => 2
            ],
            [
                'nome' => "Sheerness",
                'pais_id' => 2
            ],
            [
                'nome' => "Sheffield",
                'pais_id' => 2
            ],
            [
                'nome' => "Shefford",
                'pais_id' => 2
            ],
            [
                'nome' => "Shepshed",
                'pais_id' => 2
            ],
            [
                'nome' => "Shepton Mallet",
                'pais_id' => 2
            ],
            [
                'nome' => "Sherborne",
                'pais_id' => 2
            ],
            [
                'nome' => "Sherford",
                'pais_id' => 2
            ],
            [
                'nome' => "Sheringham",
                'pais_id' => 2
            ],
            [
                'nome' => "Shildon",
                'pais_id' => 2
            ],
            [
                'nome' => "Shipley",
                'pais_id' => 2
            ],
            [
                'nome' => "Shipston-on-Stour",
                'pais_id' => 2
            ],
            [
                'nome' => "Shirebrook",
                'pais_id' => 2
            ],
            [
                'nome' => "Shoreham-by-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Shotton",
                'pais_id' => 2
            ],
            [
                'nome' => "Shrewsbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Sidmouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Silloth",
                'pais_id' => 2
            ],
            [
                'nome' => "Silsden",
                'pais_id' => 2
            ],
            [
                'nome' => "Sittingbourne",
                'pais_id' => 2
            ],
            [
                'nome' => "Skegness",
                'pais_id' => 2
            ],
            [
                'nome' => "Skelmersdale",
                'pais_id' => 2
            ],
            [
                'nome' => "Skelton",
                'pais_id' => 2
            ],
            [
                'nome' => "Skipton",
                'pais_id' => 2
            ],
            [
                'nome' => "Sleaford",
                'pais_id' => 2
            ],
            [
                'nome' => "Slough",
                'pais_id' => 2
            ],
            [
                'nome' => "Smethwick",
                'pais_id' => 2
            ],
            [
                'nome' => "Snodland",
                'pais_id' => 2
            ],
            [
                'nome' => "Soham",
                'pais_id' => 2
            ],
            [
                'nome' => "Solihull",
                'pais_id' => 2
            ],
            [
                'nome' => "Somerton",
                'pais_id' => 2
            ],
            [
                'nome' => "Southam",
                'pais_id' => 2
            ],
            [
                'nome' => "Southampton",
                'pais_id' => 2
            ],
            [
                'nome' => "Southborough",
                'pais_id' => 2
            ],
            [
                'nome' => "South Cave",
                'pais_id' => 2
            ],
            [
                'nome' => "South Elmsall",
                'pais_id' => 2
            ],
            [
                'nome' => "Southend-on-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "South Kirkby",
                'pais_id' => 2
            ],
            [
                'nome' => "Southminster",
                'pais_id' => 2
            ],
            [
                'nome' => "South Molton",
                'pais_id' => 2
            ],
            [
                'nome' => "South Petherton",
                'pais_id' => 2
            ],
            [
                'nome' => "Southport",
                'pais_id' => 2
            ],
            [
                'nome' => "South Shields",
                'pais_id' => 2
            ],
            [
                'nome' => "Southwell",
                'pais_id' => 2
            ],
            [
                'nome' => "Southwick",
                'pais_id' => 2
            ],
            [
                'nome' => "Southwold",
                'pais_id' => 2
            ],
            [
                'nome' => "South Woodham Ferrers",
                'pais_id' => 2
            ],
            [
                'nome' => "Sowerby Bridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Spalding",
                'pais_id' => 2
            ],
            [
                'nome' => "Spennymoor",
                'pais_id' => 2
            ],
            [
                'nome' => "Spilsby",
                'pais_id' => 2
            ],
            [
                'nome' => "Stafford",
                'pais_id' => 2
            ],
            [
                'nome' => "Staines-upon-Thames",
                'pais_id' => 2
            ],
            [
                'nome' => "St Albans",
                'pais_id' => 2
            ],
            [
                'nome' => "Stalbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Stalham",
                'pais_id' => 2
            ],
            [
                'nome' => "Stalybridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Stamford",
                'pais_id' => 2
            ],
            [
                'nome' => "Standish",
                'pais_id' => 2
            ],
            [
                'nome' => "St Andrews",
                'pais_id' => 2
            ],
            [
                'nome' => "Stanford-le-Hope",
                'pais_id' => 2
            ],
            [
                'nome' => "Stanhope",
                'pais_id' => 2
            ],
            [
                'nome' => "Stanley",
                'pais_id' => 2
            ],
            [
                'nome' => "Stansted Mountfitchet",
                'pais_id' => 2
            ],
            [
                'nome' => "Stapleford",
                'pais_id' => 2
            ],
            [
                'nome' => "St Asaph / Llanelwy",
                'pais_id' => 2
            ],
            [
                'nome' => "St Austell",
                'pais_id' => 2
            ],
            [
                'nome' => "Staveley",
                'pais_id' => 2
            ],
            [
                'nome' => "St Blazey",
                'pais_id' => 2
            ],
            [
                'nome' => "St Clears / Sanclêr",
                'pais_id' => 2
            ],
            [
                'nome' => "St Columb Major",
                'pais_id' => 2
            ],
            [
                'nome' => "St Davids / Tyddewi",
                'pais_id' => 2
            ],
            [
                'nome' => "Stevenage",
                'pais_id' => 2
            ],
            [
                'nome' => "Stevenston",
                'pais_id' => 2
            ],
            [
                'nome' => "Stewarton",
                'pais_id' => 2
            ],
            [
                'nome' => "Steyning",
                'pais_id' => 2
            ],
            [
                'nome' => "St Helens",
                'pais_id' => 2
            ],
            [
                'nome' => "Stirling",
                'pais_id' => 2
            ],
            [
                'nome' => "St Ives",
                'pais_id' => 2
            ],
            [
                'nome' => "St Ives",
                'pais_id' => 2
            ],
            [
                'nome' => "St Just / St Just in Penwith",
                'pais_id' => 2
            ],
            [
                'nome' => "St Neots",
                'pais_id' => 2
            ],
            [
                'nome' => "Stockport",
                'pais_id' => 2
            ],
            [
                'nome' => "Stocksbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Stockton-on-Tees",
                'pais_id' => 2
            ],
            [
                'nome' => "Stoke-on-Trent",
                'pais_id' => 2
            ],
            [
                'nome' => "Stone",
                'pais_id' => 2
            ],
            [
                'nome' => "Stonehaven",
                'pais_id' => 2
            ],
            [
                'nome' => "Stonehouse",
                'pais_id' => 2
            ],
            [
                'nome' => "Stornoway / Steòrnabhagh",
                'pais_id' => 2
            ],
            [
                'nome' => "Stotfold",
                'pais_id' => 2
            ],
            [
                'nome' => "Stourbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Stourport-on-Severn",
                'pais_id' => 2
            ],
            [
                'nome' => "Stowmarket",
                'pais_id' => 2
            ],
            [
                'nome' => "Stow-on-the-Wold",
                'pais_id' => 2
            ],
            [
                'nome' => "Strabane",
                'pais_id' => 2
            ],
            [
                'nome' => "Stranraer",
                'pais_id' => 2
            ],
            [
                'nome' => "Stratford-upon-Avon",
                'pais_id' => 2
            ],
            [
                'nome' => "Stratton",
                'pais_id' => 2
            ],
            [
                'nome' => "Street",
                'pais_id' => 2
            ],
            [
                'nome' => "Stretford",
                'pais_id' => 2
            ],
            [
                'nome' => "Stromness",
                'pais_id' => 2
            ],
            [
                'nome' => "Stroud",
                'pais_id' => 2
            ],
            [
                'nome' => "Sturminster Newton",
                'pais_id' => 2
            ],
            [
                'nome' => "Sudbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Sunbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Sunbury-on-Thames",
                'pais_id' => 2
            ],
            [
                'nome' => "Sunderland",
                'pais_id' => 2
            ],
            [
                'nome' => "Sutton Coldfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Sutton in Ashfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Swadlincote",
                'pais_id' => 2
            ],
            [
                'nome' => "Swaffham",
                'pais_id' => 2
            ],
            [
                'nome' => "Swanage",
                'pais_id' => 2
            ],
            [
                'nome' => "Swanley",
                'pais_id' => 2
            ],
            [
                'nome' => "Swanscombe",
                'pais_id' => 2
            ],
            [
                'nome' => "Swansea / Abertawe",
                'pais_id' => 2
            ],
            [
                'nome' => "Swindon",
                'pais_id' => 2
            ],
            [
                'nome' => "Swinton",
                'pais_id' => 2
            ],
            [
                'nome' => "Syston",
                'pais_id' => 2
            ],
            [
                'nome' => "Tadcaster",
                'pais_id' => 2
            ],
            [
                'nome' => "Tadley",
                'pais_id' => 2
            ],
            [
                'nome' => "Tain",
                'pais_id' => 2
            ],
            [
                'nome' => "Talbot Green",
                'pais_id' => 2
            ],
            [
                'nome' => "Talgarth",
                'pais_id' => 2
            ],
            [
                'nome' => "Tamworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Taunton",
                'pais_id' => 2
            ],
            [
                'nome' => "Tavistock",
                'pais_id' => 2
            ],
            [
                'nome' => "Tayport",
                'pais_id' => 2
            ],
            [
                'nome' => "Teignmouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Telford",
                'pais_id' => 2
            ],
            [
                'nome' => "Tenbury Wells",
                'pais_id' => 2
            ],
            [
                'nome' => "Tenby / Dinbych-y-Pysgod",
                'pais_id' => 2
            ],
            [
                'nome' => "Tenterden",
                'pais_id' => 2
            ],
            [
                'nome' => "Tetbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Tewkesbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Thame",
                'pais_id' => 2
            ],
            [
                'nome' => "Thatcham",
                'pais_id' => 2
            ],
            [
                'nome' => "Thaxted",
                'pais_id' => 2
            ],
            [
                'nome' => "Thetford",
                'pais_id' => 2
            ],
            [
                'nome' => "Thirsk",
                'pais_id' => 2
            ],
            [
                'nome' => "Thornaby-on-Tees",
                'pais_id' => 2
            ],
            [
                'nome' => "Thornbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Thorne",
                'pais_id' => 2
            ],
            [
                'nome' => "Thornton",
                'pais_id' => 2
            ],
            [
                'nome' => "Thrapston",
                'pais_id' => 2
            ],
            [
                'nome' => "Thurnscoe",
                'pais_id' => 2
            ],
            [
                'nome' => "Thurso",
                'pais_id' => 2
            ],
            [
                'nome' => "Tickhill",
                'pais_id' => 2
            ],
            [
                'nome' => "Tidworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Tilbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Tillicoultry",
                'pais_id' => 2
            ],
            [
                'nome' => "Tipton",
                'pais_id' => 2
            ],
            [
                'nome' => "Tiverton",
                'pais_id' => 2
            ],
            [
                'nome' => "Tobermory",
                'pais_id' => 2
            ],
            [
                'nome' => "Todmorden",
                'pais_id' => 2
            ],
            [
                'nome' => "Tonbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Tonypandy",
                'pais_id' => 2
            ],
            [
                'nome' => "Topsham",
                'pais_id' => 2
            ],
            [
                'nome' => "Torpoint",
                'pais_id' => 2
            ],
            [
                'nome' => "Torquay",
                'pais_id' => 2
            ],
            [
                'nome' => "Totnes",
                'pais_id' => 2
            ],
            [
                'nome' => "Totton",
                'pais_id' => 2
            ],
            [
                'nome' => "Towcester",
                'pais_id' => 2
            ],
            [
                'nome' => "Tow Law",
                'pais_id' => 2
            ],
            [
                'nome' => "Tranent",
                'pais_id' => 2
            ],
            [
                'nome' => "Trawden",
                'pais_id' => 2
            ],
            [
                'nome' => "Tredegar",
                'pais_id' => 2
            ],
            [
                'nome' => "Tregaron",
                'pais_id' => 2
            ],
            [
                'nome' => "Treharris",
                'pais_id' => 2
            ],
            [
                'nome' => "Treherbert",
                'pais_id' => 2
            ],
            [
                'nome' => "Treorchy / Treorci",
                'pais_id' => 2
            ],
            [
                'nome' => "Tring",
                'pais_id' => 2
            ],
            [
                'nome' => "Troon",
                'pais_id' => 2
            ],
            [
                'nome' => "Trowbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Truro",
                'pais_id' => 2
            ],
            [
                'nome' => "Turriff",
                'pais_id' => 2
            ],
            [
                'nome' => "Tyldesley",
                'pais_id' => 2
            ],
            [
                'nome' => "Tynemouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Tywyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Uckfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Uddingston",
                'pais_id' => 2
            ],
            [
                'nome' => "Ulverston",
                'pais_id' => 2
            ],
            [
                'nome' => "Uppingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Urmston",
                'pais_id' => 2
            ],
            [
                'nome' => "Usk / Brynbuga",
                'pais_id' => 2
            ],
            [
                'nome' => "Uttoxeter",
                'pais_id' => 2
            ],
            [
                'nome' => "Ventnor",
                'pais_id' => 2
            ],
            [
                'nome' => "Verwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Wadebridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Wadhurst",
                'pais_id' => 2
            ],
            [
                'nome' => "Wainfleet All Saints",
                'pais_id' => 2
            ],
            [
                'nome' => "Wakefield",
                'pais_id' => 2
            ],
            [
                'nome' => "Walkden",
                'pais_id' => 2
            ],
            [
                'nome' => "Wallasey",
                'pais_id' => 2
            ],
            [
                'nome' => "Wallingford",
                'pais_id' => 2
            ],
            [
                'nome' => "Wallsend",
                'pais_id' => 2
            ],
            [
                'nome' => "Walsall",
                'pais_id' => 2
            ],
            [
                'nome' => "Waltham Abbey",
                'pais_id' => 2
            ],
            [
                'nome' => "Waltham Cross",
                'pais_id' => 2
            ],
            [
                'nome' => "Walton-on-Thames",
                'pais_id' => 2
            ],
            [
                'nome' => "Walton-on-the-Naze",
                'pais_id' => 2
            ],
            [
                'nome' => "Wantage",
                'pais_id' => 2
            ],
            [
                'nome' => "Ware",
                'pais_id' => 2
            ],
            [
                'nome' => "Wareham",
                'pais_id' => 2
            ],
            [
                'nome' => "Warlingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Warminster",
                'pais_id' => 2
            ],
            [
                'nome' => "Warrenpoint",
                'pais_id' => 2
            ],
            [
                'nome' => "Warrington",
                'pais_id' => 2
            ],
            [
                'nome' => "Warwick",
                'pais_id' => 2
            ],
            [
                'nome' => "Washington",
                'pais_id' => 2
            ],
            [
                'nome' => "Watchet",
                'pais_id' => 2
            ],
            [
                'nome' => "Watford",
                'pais_id' => 2
            ],
            [
                'nome' => "Wath upon Dearne",
                'pais_id' => 2
            ],
            [
                'nome' => "Watlington",
                'pais_id' => 2
            ],
            [
                'nome' => "Watton",
                'pais_id' => 2
            ],
            [
                'nome' => "Wednesbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Wellingborough",
                'pais_id' => 2
            ],
            [
                'nome' => "Wellington",
                'pais_id' => 2
            ],
            [
                'nome' => "Wells",
                'pais_id' => 2
            ],
            [
                'nome' => "Wells-next-the-Sea",
                'pais_id' => 2
            ],
            [
                'nome' => "Welshpool / Y Trallwng",
                'pais_id' => 2
            ],
            [
                'nome' => "Welwyn Garden City",
                'pais_id' => 2
            ],
            [
                'nome' => "Wem",
                'pais_id' => 2
            ],
            [
                'nome' => "Wendover",
                'pais_id' => 2
            ],
            [
                'nome' => "West Bridgford",
                'pais_id' => 2
            ],
            [
                'nome' => "West Bromwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Westbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Westerham",
                'pais_id' => 2
            ],
            [
                'nome' => "Westhill",
                'pais_id' => 2
            ],
            [
                'nome' => "Westhoughton",
                'pais_id' => 2
            ],
            [
                'nome' => "West Kirby",
                'pais_id' => 2
            ],
            [
                'nome' => "West Malling",
                'pais_id' => 2
            ],
            [
                'nome' => "West Mersea",
                'pais_id' => 2
            ],
            [
                'nome' => "Westminster",
                'pais_id' => 2
            ],
            [
                'nome' => "Weston-Super-Mare",
                'pais_id' => 2
            ],
            [
                'nome' => "Wetherby",
                'pais_id' => 2
            ],
            [
                'nome' => "Weybridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Weymouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Whaley Bridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Whickham",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitby",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitchurch",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitchurch",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitefield",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitehaven",
                'pais_id' => 2
            ],
            [
                'nome' => "Whithorn",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitland / Hendy-Gwyn",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitley Bay",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitnash",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitstable",
                'pais_id' => 2
            ],
            [
                'nome' => "Whittlesey",
                'pais_id' => 2
            ],
            [
                'nome' => "Whitworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Wick",
                'pais_id' => 2
            ],
            [
                'nome' => "Wickford",
                'pais_id' => 2
            ],
            [
                'nome' => "Wickham",
                'pais_id' => 2
            ],
            [
                'nome' => "Wickham Market",
                'pais_id' => 2
            ],
            [
                'nome' => "Widnes",
                'pais_id' => 2
            ],
            [
                'nome' => "Wigan",
                'pais_id' => 2
            ],
            [
                'nome' => "Wigton",
                'pais_id' => 2
            ],
            [
                'nome' => "Wigtown",
                'pais_id' => 2
            ],
            [
                'nome' => "Willenhall",
                'pais_id' => 2
            ],
            [
                'nome' => "Willington",
                'pais_id' => 2
            ],
            [
                'nome' => "Wilmslow",
                'pais_id' => 2
            ],
            [
                'nome' => "Wilton",
                'pais_id' => 2
            ],
            [
                'nome' => "Wimborne Minster",
                'pais_id' => 2
            ],
            [
                'nome' => "Wincanton",
                'pais_id' => 2
            ],
            [
                'nome' => "Winchcombe",
                'pais_id' => 2
            ],
            [
                'nome' => "Winchester",
                'pais_id' => 2
            ],
            [
                'nome' => "Windermere",
                'pais_id' => 2
            ],
            [
                'nome' => "Windsor",
                'pais_id' => 2
            ],
            [
                'nome' => "Winsford",
                'pais_id' => 2
            ],
            [
                'nome' => "Winslow",
                'pais_id' => 2
            ],
            [
                'nome' => "Winterton",
                'pais_id' => 2
            ],
            [
                'nome' => "Wirksworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Wisbech",
                'pais_id' => 2
            ],
            [
                'nome' => "Wishaw",
                'pais_id' => 2
            ],
            [
                'nome' => "Witham",
                'pais_id' => 2
            ],
            [
                'nome' => "Withernsea",
                'pais_id' => 2
            ],
            [
                'nome' => "Witney",
                'pais_id' => 2
            ],
            [
                'nome' => "Wiveliscombe",
                'pais_id' => 2
            ],
            [
                'nome' => "Wivenhoe",
                'pais_id' => 2
            ],
            [
                'nome' => "Woburn",
                'pais_id' => 2
            ],
            [
                'nome' => "Woburn Sands",
                'pais_id' => 2
            ],
            [
                'nome' => "Woking",
                'pais_id' => 2
            ],
            [
                'nome' => "Wokingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Wolsingham",
                'pais_id' => 2
            ],
            [
                'nome' => "Wolverhampton",
                'pais_id' => 2
            ],
            [
                'nome' => "Wombwell",
                'pais_id' => 2
            ],
            [
                'nome' => "Woodbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Woodhall Spa",
                'pais_id' => 2
            ],
            [
                'nome' => "Woodley",
                'pais_id' => 2
            ],
            [
                'nome' => "Woodstock",
                'pais_id' => 2
            ],
            [
                'nome' => "Wooler",
                'pais_id' => 2
            ],
            [
                'nome' => "Worcester",
                'pais_id' => 2
            ],
            [
                'nome' => "Workington",
                'pais_id' => 2
            ],
            [
                'nome' => "Worksop",
                'pais_id' => 2
            ],
            [
                'nome' => "Worsbrough",
                'pais_id' => 2
            ],
            [
                'nome' => "Worsley",
                'pais_id' => 2
            ],
            [
                'nome' => "Worthing",
                'pais_id' => 2
            ],
            [
                'nome' => "Wotton Cross",
                'pais_id' => 2
            ],
            [
                'nome' => "Wotton-under-Edge",
                'pais_id' => 2
            ],
            [
                'nome' => "Wragby",
                'pais_id' => 2
            ],
            [
                'nome' => "Wrexham / Wrecsam",
                'pais_id' => 2
            ],
            [
                'nome' => "Wymondham",
                'pais_id' => 2
            ],
            [
                'nome' => "Yarm",
                'pais_id' => 2
            ],
            [
                'nome' => "Yarmouth",
                'pais_id' => 2
            ],
            [
                'nome' => "Yate",
                'pais_id' => 2
            ],
            [
                'nome' => "Yateley",
                'pais_id' => 2
            ],
            [
                'nome' => "Y Bala",
                'pais_id' => 2
            ],
            [
                'nome' => "Yeadon",
                'pais_id' => 2
            ],
            [
                'nome' => "Yeovil",
                'pais_id' => 2
            ],
            [
                'nome' => "York",
                'pais_id' => 2
            ],
            [
                'nome' => "Ystradgynlais",
                'pais_id' => 2
            ],
            [
                'nome' => "Ystrad Mynach",
                'pais_id' => 2
            ],
            [
                'nome' => "Acton",
                'pais_id' => 2
            ],
            [
                'nome' => "Alameda Place",
                'pais_id' => 2
            ],
            [
                'nome' => "Aperfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Barking",
                'pais_id' => 2
            ],
            [
                'nome' => "Barnes",
                'pais_id' => 2
            ],
            [
                'nome' => "Barnet",
                'pais_id' => 2
            ],
            [
                'nome' => "Barnet Gate",
                'pais_id' => 2
            ],
            [
                'nome' => "Battersea",
                'pais_id' => 2
            ],
            [
                'nome' => "Beckenham",
                'pais_id' => 2
            ],
            [
                'nome' => "Bermondsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Bethnal Green",
                'pais_id' => 2
            ],
            [
                'nome' => "Bexley",
                'pais_id' => 2
            ],
            [
                'nome' => "Biggin Hill",
                'pais_id' => 2
            ],
            [
                'nome' => "Bow",
                'pais_id' => 2
            ],
            [
                'nome' => "Brentford",
                'pais_id' => 2
            ],
            [
                'nome' => "Bromley",
                'pais_id' => 2
            ],
            [
                'nome' => "Camberwell",
                'pais_id' => 2
            ],
            [
                'nome' => "Camden Town",
                'pais_id' => 2
            ],
            [
                'nome' => "Carshalton",
                'pais_id' => 2
            ],
            [
                'nome' => "Catford",
                'pais_id' => 2
            ],
            [
                'nome' => "Central Parade",
                'pais_id' => 2
            ],
            [
                'nome' => "Chase Village",
                'pais_id' => 2
            ],
            [
                'nome' => "Chelsea",
                'pais_id' => 2
            ],
            [
                'nome' => "Chingford",
                'pais_id' => 2
            ],
            [
                'nome' => "Chislehurst",
                'pais_id' => 2
            ],
            [
                'nome' => "Chiswick",
                'pais_id' => 2
            ],
            [
                'nome' => "Clapham",
                'pais_id' => 2
            ],
            [
                'nome' => "Clock House",
                'pais_id' => 2
            ],
            [
                'nome' => "Coalmakers Wharf",
                'pais_id' => 2
            ],
            [
                'nome' => "Coldharbour",
                'pais_id' => 2
            ],
            [
                'nome' => "Cole Park",
                'pais_id' => 2
            ],
            [
                'nome' => "Colney Hatch",
                'pais_id' => 2
            ],
            [
                'nome' => "Coulsdon",
                'pais_id' => 2
            ],
            [
                'nome' => "Cowley Peachy",
                'pais_id' => 2
            ],
            [
                'nome' => "Crayford",
                'pais_id' => 2
            ],
            [
                'nome' => "Croydon",
                'pais_id' => 2
            ],
            [
                'nome' => "Dagenham",
                'pais_id' => 2
            ],
            [
                'nome' => "Denham",
                'pais_id' => 2
            ],
            [
                'nome' => "Deptford",
                'pais_id' => 2
            ],
            [
                'nome' => "Ealing",
                'pais_id' => 2
            ],
            [
                'nome' => "Eastcote Village",
                'pais_id' => 2
            ],
            [
                'nome' => "East Ham",
                'pais_id' => 2
            ],
            [
                'nome' => "Edgware",
                'pais_id' => 2
            ],
            [
                'nome' => "Edmonton",
                'pais_id' => 2
            ],
            [
                'nome' => "Eltham",
                'pais_id' => 2
            ],
            [
                'nome' => "Enfield",
                'pais_id' => 2
            ],
            [
                'nome' => "Erith",
                'pais_id' => 2
            ],
            [
                'nome' => "Feltham",
                'pais_id' => 2
            ],
            [
                'nome' => "Festubert Place",
                'pais_id' => 2
            ],
            [
                'nome' => "Finchley",
                'pais_id' => 2
            ],
            [
                'nome' => "Foxbury",
                'pais_id' => 2
            ],
            [
                'nome' => "Frank Whipple Estate",
                'pais_id' => 2
            ],
            [
                'nome' => "Friern Barnet",
                'pais_id' => 2
            ],
            [
                'nome' => "Fulham",
                'pais_id' => 2
            ],
            [
                'nome' => "Gallows Corner",
                'pais_id' => 2
            ],
            [
                'nome' => "Greenford",
                'pais_id' => 2
            ],
            [
                'nome' => "Greenwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Hackney",
                'pais_id' => 2
            ],
            [
                'nome' => "Hacton",
                'pais_id' => 2
            ],
            [
                'nome' => "Hallsville Quarter",
                'pais_id' => 2
            ],
            [
                'nome' => "Hammersmith",
                'pais_id' => 2
            ],
            [
                'nome' => "Hampstead",
                'pais_id' => 2
            ],
            [
                'nome' => "Hampton",
                'pais_id' => 2
            ],
            [
                'nome' => "Harefield Grove",
                'pais_id' => 2
            ],
            [
                'nome' => "Harrow",
                'pais_id' => 2
            ],
            [
                'nome' => "Hayes",
                'pais_id' => 2
            ],
            [
                'nome' => "Hayes Town",
                'pais_id' => 2
            ],
            [
                'nome' => "Hendon",
                'pais_id' => 2
            ],
            [
                'nome' => "Highwood Hill",
                'pais_id' => 2
            ],
            [
                'nome' => "Hillingdon",
                'pais_id' => 2
            ],
            [
                'nome' => "Hitchin Square",
                'pais_id' => 2
            ],
            [
                'nome' => "Holders Hill",
                'pais_id' => 2
            ],
            [
                'nome' => "Hornchurch",
                'pais_id' => 2
            ],
            [
                'nome' => "Hornsey",
                'pais_id' => 2
            ],
            [
                'nome' => "Hornsey Vale",
                'pais_id' => 2
            ],
            [
                'nome' => "Hounslow",
                'pais_id' => 2
            ],
            [
                'nome' => "Ilford",
                'pais_id' => 2
            ],
            [
                'nome' => "Isle of Dogs",
                'pais_id' => 2
            ],
            [
                'nome' => "Isleworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Islington",
                'pais_id' => 2
            ],
            [
                'nome' => "Kensington",
                'pais_id' => 2
            ],
            [
                'nome' => "Kenton",
                'pais_id' => 2
            ],
            [
                'nome' => "Kingston upon Thames",
                'pais_id' => 2
            ],
            [
                'nome' => "Knight's Hill",
                'pais_id' => 2
            ],
            [
                'nome' => "Lewisham",
                'pais_id' => 2
            ],
            [
                'nome' => "Leyton",
                'pais_id' => 2
            ],
            [
                'nome' => "Merton",
                'pais_id' => 2
            ],
            [
                'nome' => "Mitcham",
                'pais_id' => 2
            ],
            [
                'nome' => "Morden",
                'pais_id' => 2
            ],
            [
                'nome' => "New Cross Gate",
                'pais_id' => 2
            ],
            [
                'nome' => "New Malden",
                'pais_id' => 2
            ],
            [
                'nome' => "Northolt",
                'pais_id' => 2
            ],
            [
                'nome' => "Northwood",
                'pais_id' => 2
            ],
            [
                'nome' => "Orpington",
                'pais_id' => 2
            ],
            [
                'nome' => "Paddington",
                'pais_id' => 2
            ],
            [
                'nome' => "Park Royal",
                'pais_id' => 2
            ],
            [
                'nome' => "Penge",
                'pais_id' => 2
            ],
            [
                'nome' => "Pinner",
                'pais_id' => 2
            ],
            [
                'nome' => "Poplar",
                'pais_id' => 2
            ],
            [
                'nome' => "Poynders Parade",
                'pais_id' => 2
            ],
            [
                'nome' => "Purley",
                'pais_id' => 2
            ],
            [
                'nome' => "Putney",
                'pais_id' => 2
            ],
            [
                'nome' => "Rainham",
                'pais_id' => 2
            ],
            [
                'nome' => "Risley Close",
                'pais_id' => 2
            ],
            [
                'nome' => "Romford",
                'pais_id' => 2
            ],
            [
                'nome' => "Ruislip",
                'pais_id' => 2
            ],
            [
                'nome' => "Ruislip Gardens",
                'pais_id' => 2
            ],
            [
                'nome' => "Rushmore Hill",
                'pais_id' => 2
            ],
            [
                'nome' => "Sidcup",
                'pais_id' => 2
            ],
            [
                'nome' => "Southall",
                'pais_id' => 2
            ],
            [
                'nome' => "South Bromley",
                'pais_id' => 2
            ],
            [
                'nome' => "Southgate",
                'pais_id' => 2
            ],
            [
                'nome' => "Southwark",
                'pais_id' => 2
            ],
            [
                'nome' => "Stanmore",
                'pais_id' => 2
            ],
            [
                'nome' => "Stepney",
                'pais_id' => 2
            ],
            [
                'nome' => "Stoke Newington",
                'pais_id' => 2
            ],
            [
                'nome' => "Stratford",
                'pais_id' => 2
            ],
            [
                'nome' => "Streatham",
                'pais_id' => 2
            ],
            [
                'nome' => "Surbiton",
                'pais_id' => 2
            ],
            [
                'nome' => "Sutton",
                'pais_id' => 2
            ],
            [
                'nome' => "Tavern Quay",
                'pais_id' => 2
            ],
            [
                'nome' => "Teddington",
                'pais_id' => 2
            ],
            [
                'nome' => "The Mews",
                'pais_id' => 2
            ],
            [
                'nome' => "Tottenham",
                'pais_id' => 2
            ],
            [
                'nome' => "Tower Gardens",
                'pais_id' => 2
            ],
            [
                'nome' => "Trinity Buoy Wharf",
                'pais_id' => 2
            ],
            [
                'nome' => "Twickenham",
                'pais_id' => 2
            ],
            [
                'nome' => "Unity Place",
                'pais_id' => 2
            ],
            [
                'nome' => "Upminster",
                'pais_id' => 2
            ],
            [
                'nome' => "Uxbridge",
                'pais_id' => 2
            ],
            [
                'nome' => "Wallington",
                'pais_id' => 2
            ],
            [
                'nome' => "Wallington Square",
                'pais_id' => 2
            ],
            [
                'nome' => "Walthamstow",
                'pais_id' => 2
            ],
            [
                'nome' => "Wandle Park",
                'pais_id' => 2
            ],
            [
                'nome' => "Wandsworth",
                'pais_id' => 2
            ],
            [
                'nome' => "Wanstead",
                'pais_id' => 2
            ],
            [
                'nome' => "Wembley",
                'pais_id' => 2
            ],
            [
                'nome' => "West Drayton",
                'pais_id' => 2
            ],
            [
                'nome' => "West Ham",
                'pais_id' => 2
            ],
            [
                'nome' => "Willesden",
                'pais_id' => 2
            ],
            [
                'nome' => "Wimbledon",
                'pais_id' => 2
            ],
            [
                'nome' => "Woodford",
                'pais_id' => 2
            ],
            [
                'nome' => "Wood Green",
                'pais_id' => 2
            ],
            [
                'nome' => "Woolwich",
                'pais_id' => 2
            ],
            [
                'nome' => "Yiewsley",
                'pais_id' => 2
            ],
            [
                'nome' => "Unknown",
                'pais_id' => 2
            ],
        ];

        foreach($ukCitiesAndTowns as $city)
        {
            Cidade::create($city);
        }
    }
}
