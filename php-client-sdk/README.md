cortical.io
===========
Welcome to the cortical.io Retina PHP client source code page.

Release Version: 2.1.0

This page contains
<UL>
<LI><B>Introduction</B></LI>
<LI><B>Dependencies</B></LI>
<LI><B>How to use</B></LI>
<LI><B>Change Log</B></LI>
<LI><B>License</B></LI>
</UL>


### Introduction
cortical.io's PHP client - a simple PHP http client which simplifies the communication with the Retina server using the Retina's <a href="http://api.cortical.io/">REST API</a>. 
The source code is split into the following:

* `/` Endpoint files - One for each endpoint group.
* `/models` - The return object classes.
* `/tests` - Unit tests of all endpoints and examples of their usage.


### Dependencies
cortical.io's Retina PHP client has been tested with PHP Version 5.6.3 and with all 2.x.x versions of <a href="http://api.cortical.io">cortical.io's api</a>.

To use the API you will need to obtain an <a href="http://www.cortical.io/developers_apikey.html">api key</a>.


### How to use/build
* You will need PHP (version 5.6.3 has been tested).
* Install <a href="https://phpunit.de/getting-started.html">PHPUnit</a>, this is library for run integration tests (optional installation).
* Clone all the sources from our Github repository.

You should now be able to use the client in the following way (obtaining a semantic representation of the term *apple*):

```php
    require_once("ApiClient.php");
    $API_KEY = "your_api_key";
    $BASE_PATH = "http://api.cortical.io/rest";
    $RETINA_NAME = "en_associative";
    $apiClient = new APIClient($API_KEY, $BASE_PATH);
    $termsApi = new TermsApi($apiClient);
    
    $terms = $termsApi->getTerm("apple", true, $RETINA_NAME);
    echo serialize($termArr[0]->fingerprint->positions);
```

For further documentation about the Retina-API and information on cortical.io's 'Retina' technology please see: 
http://www.cortical.io/developers_tutorials.html. Also the `tests` folder contains more examples of how to use client. 

If you have any questions or problems please visit our forum:
http://www.cortical.io/developers_forum.html

### Change Log
<B>v 2.1.0</B>
* Initial release version.

    
### License
Copyright 2014 cortical.io GmbH.

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.