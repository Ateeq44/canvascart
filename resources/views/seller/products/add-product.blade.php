@extends('layouts.authorization')
@section('title') 
Dashboard
@endsection 
@section('content')
<style>
  .card-header{
    display: block !important;
  }
  span.select2.select2-container.select2-container--default {
    width: 100% !important;
  }
  .select2-selection.select2-selection--multiple .select2-selection__rendered .select2-selection__choice{
    padding-right: 8px !important;
  }
</style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css'>
<form   action="{{url('seller-dashboard/addproduct')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row row-cards" style="margin-top: 35px;">
    <div class="col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product Images</h3>
          <small>Upload between 3 to 8 images</small>
        </div>
        <div class="card-body">
          <div class="drop-zone">
            <div class="msg">Just drag and drop files here</div>
            <input type="file" multiple="multiple" name="images[]" class="receiver"/>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h3 class="card-title">Product Information</h3>
          <small>Having accurate product information raises discoverability.</small>
        </div>
        <div class="card-body row">
          <div class="mb-3 col-md-12 col-lg-12">
            <label class="form-label">Product Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Product Name" name="product_name">
          </div>
          <div class="mb-3 col-md-12 col-lg-6">
            <label class="form-label">Category <span class="text-danger">*</span></label>
            <select class="form-control" name="cat_id" id="category">
              @foreach($category as $cat)
              <option value="{{ $cat->id }}">{{ $cat->title }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3 col-md-12 col-lg-6">
            <label class="form-label">Sub Category <span class="text-danger">*</span></label>
            <select class="form-control CategorySelector" name="subcat_id" id="subcategory"></select>
          </div>
        </div>
      </div>
    </div>
    {{--  --}}
    <div class="col-md-12 col-lg-12 colors" style="display:none;" id="1">
      <div class="card  ">
        <div class="card-header d-block">
          <h3 class="card-title">Product Details</h3>
        </div>
        <div class="card-body row">
          <div class="col-md-12 col-lg-6">
            <label class="form-label">Brand <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="brand">
              @foreach( $brand as $key => $val )
              <option value="{{ $val->name }}">{{ $val->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-12 col-lg-6">
            <label class="form-label">Graphics Memory <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Graphics Memory" name="g_memory">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Barcode Ean <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Graphics Memory" name="barcode">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Model <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Graphics Memory" name="model">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Number Cpus <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Graphics Memory" name="num_cpus">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Cl Cable Length <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Graphics Memory" name="ci_cable_length">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">System Memory <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="system_memory">
              <option value="16GB">16GB</option>
              <option value="2GB">2GB</option>
              <option value="8GB">8GB</option>
              <option value="4GB">4GB</option>
              <option value="3GB">3GB</option>
              <option value="1GB & Under">1GB &amp; Under</option>
              <option value="16GB & Up">16GB &amp; Up</option>
              <option value="6GB">6GB</option>
              <option value="512MB">512MB</option>
              <option value="5GB">5GB</option>
              <option value="12GB">12GB</option>
              <option value="10GB">10GB</option>
              <option value="11GB">11GB</option>
              <option value="7GB">7GB</option>
              <option value="9GB">9GB</option>
              <option value="13GB">13GB</option>
              <option value="14GB">14GB</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    {{--  --}}
    <div class="col-md-12 col-lg-12 colors" style="display: none;" id="2">
      <div class="card">
        <div class="card-body row">
          <div class="col-md-12 col-lg-6">
            <label class="form-label">Hard Disk (GB) <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="hard_disk">
              <option value="3.5TB">3.5TB</option>
              <option value="120GB">120GB</option>
              <option value="20TB">20TB</option>
              <option value="16TB">16TB</option>
              <option value="30TB">30TB</option>
              <option value="8TB">8TB</option>
              <option value="12TB">12TB</option>
              <option value="256GB">256GB</option>
              <option value="320GB">320GB</option>
              <option value="750GB">750GB</option>
              <option value="480GB">480GB</option>
              <option value="6TB">6TB</option>
              <option value="4TB">4TB</option>
              <option value="3TB">3TB</option>
              <option value="2TB">2TB</option>
              <option value="250GB">250GB</option>
              <option value="512GB">512GB</option>
              <option value="5TB">5TB</option>
              <option value="500GB">500GB</option>
              <option value="128GB">128GB</option>
              <option value="1TB">1TB</option>
              <option value="240GB">240GB</option>
              <option value="960GB">960GB</option>
              <option value="18">18</option>
              <option value="1GB">1GB</option>
              <option value="2GB">2GB</option>
              <option value="32GB">32GB</option>
              <option value="64GB">64GB</option>
              <option value="400">400</option>
              <option value="125">125</option>
              <option value="200">200</option>
              <option value="160GB">160GB</option>
              <option value="640GB">640GB</option>
              <option value="10TB">10TB</option>
              <option value="361">361</option>
              <option value="1050GB">1050GB</option>
              <option value="256gb">256gb</option>
              <option value="525GB">525GB</option>
              <option value="180GB">180GB</option>
              <option value="360">360</option>
              <option value="107">107</option>
              <option value="56">56</option>
              <option value="434">434</option>
              <option value="222">222</option>
              <option value="357">357</option>
              <option value="377">377</option>
              <option value="392">392</option>
              <option value="289">289</option>
              <option value="64">64</option>
              <option value="74">74</option>
              <option value="66">66</option>
              <option value="76">76</option>
              <option value="68">68</option>
              <option value="121">121</option>
              <option value="360GB">360GB</option>
              <option value="1000">1000</option>
              <option value="313">313</option>
              <option value="123">123</option>
              <option value="120">120</option>
              <option value="110">110</option>
              <option value="115">115</option>
              <option value="100">100</option>
              <option value="57">57</option>
              <option value="59">59</option>
              <option value="99">99</option>
              <option value="128">128</option>
              <option value="129">129</option>
              <option value="53">53</option>
              <option value="63">63</option>
              <option value="69">69</option>
              <option value="71">71</option>
              <option value="73">73</option>
              <option value="83">83</option>
              <option value="87">87</option>
              <option value="89">89</option>
              <option value="91">91</option>
              <option value="92">92</option>
              <option value="93">93</option>
              <option value="94">94</option>
              <option value="96">96</option>
              <option value="97">97</option>
              <option value="101">101</option>
              <option value="102">102</option>
              <option value="103">103</option>
              <option value="104">104</option>
              <option value="106">106</option>
              <option value="108">108</option>
              <option value="109">109</option>
              <option value="111">111</option>
              <option value="113">113</option>
              <option value="114">114</option>
              <option value="116">116</option>
              <option value="117">117</option>
              <option value="118">118</option>
              <option value="119">119</option>
              <option value="122">122</option>
              <option value="124">124</option>
              <option value="126">126</option>
              <option value="130">130</option>
              <option value="131">131</option>
              <option value="132">132</option>
              <option value="133">133</option>
              <option value="134">134</option>
              <option value="135">135</option>
              <option value="136">136</option>
              <option value="137">137</option>
              <option value="138">138</option>
              <option value="139">139</option>
              <option value="140">140</option>
              <option value="141">141</option>
              <option value="142">142</option>
              <option value="143">143</option>
              <option value="144">144</option>
              <option value="145">145</option>
              <option value="146">146</option>
              <option value="147">147</option>
              <option value="148">148</option>
              <option value="149">149</option>
              <option value="150">150</option>
              <option value="151">151</option>
              <option value="152">152</option>
              <option value="153">153</option>
              <option value="154">154</option>
              <option value="155">155</option>
              <option value="156">156</option>
              <option value="157">157</option>
              <option value="158">158</option>
              <option value="159">159</option>
              <option value="160">160</option>
              <option value="161">161</option>
              <option value="162">162</option>
              <option value="163">163</option>
              <option value="164">164</option>
              <option value="165">165</option>
              <option value="166">166</option>
              <option value="167">167</option>
              <option value="168">168</option>
              <option value="169">169</option>
              <option value="170">170</option>
              <option value="171">171</option>
              <option value="172">172</option>
              <option value="173">173</option>
              <option value="174">174</option>
              <option value="175">175</option>
              <option value="176">176</option>
              <option value="177">177</option>
              <option value="178">178</option>
              <option value="179">179</option>
              <option value="180">180</option>
              <option value="181">181</option>
              <option value="182">182</option>
              <option value="183">183</option>
              <option value="184">184</option>
              <option value="185">185</option>
              <option value="186">186</option>
              <option value="187">187</option>
              <option value="188">188</option>
              <option value="189">189</option>
              <option value="190">190</option>
              <option value="191">191</option>
              <option value="192">192</option>
              <option value="193">193</option>
              <option value="194">194</option>
              <option value="195">195</option>
              <option value="196">196</option>
              <option value="197">197</option>
              <option value="198">198</option>
              <option value="199">199</option>
              <option value="201">201</option>
              <option value="202">202</option>
              <option value="203">203</option>
              <option value="204">204</option>
              <option value="205">205</option>
              <option value="206">206</option>
              <option value="207">207</option>
              <option value="208">208</option>
              <option value="209">209</option>
              <option value="210">210</option>
              <option value="211">211</option>
              <option value="212">212</option>
              <option value="213">213</option>
              <option value="214">214</option>
              <option value="215">215</option>
              <option value="216">216</option>
              <option value="217">217</option>
              <option value="218">218</option>
              <option value="219">219</option>
              <option value="220">220</option>
              <option value="221">221</option>
              <option value="223">223</option>
              <option value="224">224</option>
              <option value="225">225</option>
              <option value="226">226</option>
              <option value="227">227</option>
              <option value="228">228</option>
              <option value="229">229</option>
              <option value="230">230</option>
              <option value="231">231</option>
              <option value="232">232</option>
              <option value="233">233</option>
              <option value="234">234</option>
              <option value="235">235</option>
              <option value="236">236</option>
              <option value="237">237</option>
              <option value="238">238</option>
              <option value="239">239</option>
              <option value="240">240</option>
              <option value="241">241</option>
              <option value="242">242</option>
              <option value="243">243</option>
              <option value="244">244</option>
              <option value="245">245</option>
              <option value="246">246</option>
              <option value="247">247</option>
              <option value="248">248</option>
              <option value="249">249</option>
              <option value="250">250</option>
              <option value="251">251</option>
              <option value="252">252</option>
              <option value="253">253</option>
              <option value="254">254</option>
              <option value="255">255</option>
              <option value="256">256</option>
              <option value="257">257</option>
              <option value="258">258</option>
              <option value="259">259</option>
              <option value="260">260</option>
              <option value="261">261</option>
              <option value="262">262</option>
              <option value="263">263</option>
              <option value="264">264</option>
              <option value="265">265</option>
              <option value="266">266</option>
              <option value="267">267</option>
              <option value="268">268</option>
              <option value="269">269</option>
              <option value="270">270</option>
              <option value="271">271</option>
              <option value="272">272</option>
              <option value="273">273</option>
              <option value="274">274</option>
              <option value="275">275</option>
              <option value="276">276</option>
              <option value="277">277</option>
              <option value="278">278</option>
              <option value="279">279</option>
              <option value="280">280</option>
              <option value="281">281</option>
              <option value="282">282</option>
              <option value="283">283</option>
              <option value="284">284</option>
              <option value="285">285</option>
              <option value="286">286</option>
              <option value="287">287</option>
              <option value="288">288</option>
              <option value="290">290</option>
              <option value="291">291</option>
              <option value="292">292</option>
              <option value="293">293</option>
              <option value="294">294</option>
              <option value="295">295</option>
              <option value="296">296</option>
              <option value="297">297</option>
              <option value="298">298</option>
              <option value="299">299</option>
              <option value="300">300</option>
              <option value="301">301</option>
              <option value="302">302</option>
              <option value="303">303</option>
              <option value="304">304</option>
              <option value="305">305</option>
              <option value="306">306</option>
              <option value="307">307</option>
              <option value="308">308</option>
              <option value="309">309</option>
              <option value="310">310</option>
              <option value="312">312</option>
              <option value="314">314</option>
              <option value="315">315</option>
              <option value="316">316</option>
              <option value="317">317</option>
              <option value="318">318</option>
              <option value="319">319</option>
              <option value="320">320</option>
              <option value="321">321</option>
              <option value="322">322</option>
              <option value="323">323</option>
              <option value="324">324</option>
              <option value="325">325</option>
              <option value="326">326</option>
              <option value="327">327</option>
              <option value="328">328</option>
              <option value="329">329</option>
              <option value="330">330</option>
              <option value="331">331</option>
              <option value="332">332</option>
              <option value="333">333</option>
              <option value="334">334</option>
              <option value="335">335</option>
              <option value="336">336</option>
              <option value="337">337</option>
              <option value="338">338</option>
              <option value="339">339</option>
              <option value="340">340</option>
              <option value="341">341</option>
              <option value="342">342</option>
              <option value="343">343</option>
              <option value="344">344</option>
              <option value="345">345</option>
              <option value="346">346</option>
              <option value="347">347</option>
              <option value="348">348</option>
              <option value="349">349</option>
              <option value="350">350</option>
              <option value="351">351</option>
              <option value="352">352</option>
              <option value="353">353</option>
              <option value="354">354</option>
              <option value="355">355</option>
              <option value="356">356</option>
              <option value="358">358</option>
              <option value="359">359</option>
              <option value="362">362</option>
              <option value="363">363</option>
              <option value="364">364</option>
              <option value="365">365</option>
              <option value="366">366</option>
              <option value="367">367</option>
              <option value="368">368</option>
              <option value="369">369</option>
              <option value="370">370</option>
              <option value="371">371</option>
              <option value="372">372</option>
              <option value="373">373</option>
              <option value="374">374</option>
              <option value="375">375</option>
              <option value="376">376</option>
              <option value="378">378</option>
              <option value="379">379</option>
              <option value="380">380</option>
              <option value="381">381</option>
              <option value="382">382</option>
              <option value="383">383</option>
              <option value="384">384</option>
              <option value="385">385</option>
              <option value="386">386</option>
              <option value="387">387</option>
              <option value="388">388</option>
              <option value="389">389</option>
              <option value="390">390</option>
              <option value="391">391</option>
              <option value="393">393</option>
              <option value="394">394</option>
              <option value="395">395</option>
              <option value="396">396</option>
              <option value="397">397</option>
              <option value="398">398</option>
              <option value="399">399</option>
              <option value="401">401</option>
              <option value="402">402</option>
              <option value="403">403</option>
              <option value="404">404</option>
              <option value="405">405</option>
              <option value="406">406</option>
              <option value="407">407</option>
              <option value="408">408</option>
              <option value="409">409</option>
              <option value="410">410</option>
              <option value="411">411</option>
              <option value="412">412</option>
              <option value="413">413</option>
              <option value="414">414</option>
              <option value="415">415</option>
              <option value="416">416</option>
              <option value="417">417</option>
              <option value="418">418</option>
              <option value="419">419</option>
              <option value="420">420</option>
              <option value="421">421</option>
              <option value="422">422</option>
              <option value="423">423</option>
              <option value="424">424</option>
              <option value="425">425</option>
              <option value="426">426</option>
              <option value="427">427</option>
              <option value="428">428</option>
              <option value="429">429</option>
              <option value="430">430</option>
              <option value="431">431</option>
              <option value="432">432</option>
              <option value="433">433</option>
              <option value="435">435</option>
              <option value="436">436</option>
              <option value="437">437</option>
              <option value="438">438</option>
              <option value="439">439</option>
              <option value="440">440</option>
              <option value="441">441</option>
              <option value="442">442</option>
              <option value="443">443</option>
              <option value="444">444</option>
              <option value="445">445</option>
              <option value="446">446</option>
              <option value="447">447</option>
              <option value="448">448</option>
              <option value="500">500</option>
              <option value="640">640</option>
              <option value="750">750</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6">
            <label class="form-label">Brand <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="brand">
              @foreach( $brand as $key => $val )
              <option value="{{ $val->name }}">{{ $val->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">CPU Speed (GHz) <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="cpu_speed">
              <option>2-3GHz</option>
              <option>16.9</option>
              <option>1.5</option>
              <option>2.5</option>
              <option>3.5</option>
              <option>3-4Ghz</option>
              <option>5-6GHz</option>
              <option>1-2Ghz</option>
              <option>7-8Ghz</option>
              <option>Intel Xeon</option>
              <option>Intel Pentium</option>
              <option>Intel Celeron</option>
              <option>AMD Phenom</option>
              <option>AMD Athlon</option>
              <option>AMD A10</option>
              <option>AMD A8</option>
              <option>AMD A6</option>
              <option>Intel Atom</option>
              <option>role=</option>
              <option>role=</option>
              <option>AMD Turion</option>
              <option>2.50GHz</option>
              <option>2.60GHz</option>
              <option>1.66GHz</option>
              <option>1.80GHz</option>
              <option>1.30GHz</option>
              <option>2.66GHz</option>
              <option>0.80GHz</option>
              <option>1.60GHz</option>
              <option>1.33GHz</option>
              <option>2.30GHz</option>
              <option>2.8</option>
              <option>2.6</option>
              <option>2.4</option>
              <option>1.1</option>
              <option>1.2</option>
              <option>1.3</option>
              <option>1.33</option>
              <option>1.4</option>
              <option>1.6</option>
              <option>1.7</option>
              <option>1.8</option>
              <option>1.83</option>
              <option>1.86</option>
              <option>1.9</option>
              <option>2.16</option>
              <option>2.2</option>
              <option>2.3</option>
              <option>2.7</option>
              <option>2.9</option>
              <option>3.1</option>
              <option>3.2</option>
              <option>3.3</option>
              <option>3.4</option>
              <option>3.6</option>
              <option>3.7</option>
              <option>3.8</option>
              <option>4.1</option>
              <option>4.9</option>
              <option>5.9</option>
              <option>6.9</option>
              <option>7.9</option>
              <option>8.9</option>
              <option>9.9</option>
              <option>10.9</option>
              <option>11.9</option>
              <option>12.9</option>
              <option>13.9</option>
              <option>14.9</option>
              <option>15.9</option>
              <option>17.9</option>
              <option>18.9</option>
              <option>19.9</option>
              <option>20.9</option>
              <option>21.9</option>
              <option>22.9</option>
              <option>23.9</option>
              <option>24.9</option>
              <option>25.9</option>
              <option>26.9</option>
              <option>27.9</option>
              <option>28.9</option>
              <option>29.9</option>
              <option>30.9</option>
              <option>31.9</option>
              <option>32.9</option>
              <option>33.9</option>
              <option>34.9</option>
              <option>35.9</option>
              <option>36.9</option>
              <option>37.9</option>
              <option>38.9</option>
              <option>39.9</option>
              <option>40.9</option>
              <option>41.9</option>
              <option>42.9</option>
              <option>43.9</option>
              <option>44.9</option>
              <option>45.9</option>
              <option>46.9</option>
              <option>47.9</option>
              <option>48.9</option>
              <option>49.9</option>
              <option>50.9</option>
              <option>51.9</option>
              <option>52.9</option>
              <option>53.9</option>
              <option>54.9</option>
              <option>55.9</option>
              <option>56.9</option>
              <option>57.9</option>
              <option>58.9</option>
              <option>59.9</option>
              <option>60.9</option>
              <option>61.9</option>
              <option>62.9</option>
              <option>63.9</option>
              <option>64.9</option>
              <option>65.9</option>
              <option>66.9</option>
              <option>67.9</option>
              <option>68.9</option>
              <option>69.9</option>
              <option>70.9</option>
              <option>71.9</option>
              <option>72.9</option>
              <option>73.9</option>
              <option>74.9</option>
              <option>75.9</option>
              <option>76.9</option>
              <option>77.9</option>
              <option>78.9</option>
              <option>79.9</option>
              <option>80.9</option>
              <option>81.9</option>
              <option>82.9</option>
              <option>83.9</option>
              <option>84.9</option>
              <option>85.9</option>
              <option>86.9</option>
              <option>87.9</option>
              <option>88.9</option>
              <option>89.9</option>
              <option>90.9</option>
              <option>91.9</option>
              <option>92.9</option>
              <option>93.9</option>
              <option>94.9</option>
              <option>95.9</option>
              <option>96.9</option>
              <option>97.9</option>
              <option>98.9</option>
              <option>99.9</option>
              <option>100.9</option>
              <option>101.9</option>
              <option>102.9</option>
              <option>103.9</option>
              <option>104.9</option>
              <option>105.9</option>
              <option>106.9</option>
              <option>107.9</option>
              <option>108.9</option>
              <option>109.9</option>
              <option>110.9</option>
              <option>111.9</option>
              <option>112.9</option>
              <option>113.9</option>
              <option>114.9</option>
              <option>115.9</option>
              <option>116.9</option>
              <option>117.9</option>
              <option>118.9</option>
              <option>119.9</option>
              <option>120.9</option>
              <option>121.9</option>
              <option>122.9</option>
              <option>123.9</option>
              <option>124.9</option>
              <option>125.9</option>
              <option>126.9</option>
              <option>127.9</option>
              <option>128.9</option>
              <option>129.9</option>
              <option>130.9</option>
              <option>131.9</option>
              <option>132.9</option>
              <option>133.9</option>
              <option>134.9</option>
              <option>135.9</option>
              <option>136.9</option>
              <option>137.9</option>
              <option>138.9</option>
              <option>139.9</option>
              <option>140.9</option>
              <option>141.9</option>
              <option>142.9</option>
              <option>143.9</option>
              <option>144.9</option>
              <option>145.9</option>
              <option>146.9</option>
              <option>147.9</option>
              <option>148.9</option>
              <option>149.9</option>
              <option>150.9</option>
              <option>151.9</option>
              <option>152.9</option>
              <option>153.9</option>
              <option>154.9</option>
              <option>155.9</option>
              <option>156.9</option>
              <option>157.9</option>
              <option>158.9</option>
              <option>159.9</option>
              <option>160.9</option>
              <option>161.9</option>
              <option>162.9</option>
              <option>163.9</option>
              <option>164.9</option>
              <option>165.9</option>
              <option>166.9</option>
              <option>167.9</option>
              <option>168.9</option>
              <option>169.9</option>
              <option>170.9</option>
              <option>171.9</option>
              <option>172.9</option>
              <option>173.9</option>
              <option>174.9</option>
              <option>175.9</option>
              <option>176.9</option>
              <option>177.9</option>
              <option>178.9</option>
              <option>179.9</option>
              <option>180.9</option>
              <option>181.9</option>
              <option>182.9</option>
              <option>183.9</option>
              <option>184.9</option>
              <option>185.9</option>
              <option>186.9</option>
              <option>187.9</option>
              <option>188.9</option>
              <option>189.9</option>
              <option>190.9</option>
              <option>191.9</option>
              <option>192.9</option>
              <option>193.9</option>
              <option>194.9</option>
              <option>195.9</option>
              <option>196.9</option>
              <option>197.9</option>
              <option>198.9</option>
              <option>199.9</option>
              <option>200.9</option>
              <option>201.9</option>
              <option>202.9</option>
              <option>203.9</option>
              <option>204.9</option>
              <option>205.9</option>
              <option>206.9</option>
              <option>207.9</option>
              <option>208.9</option>
              <option>209.9</option>
              <option>210.9</option>
              <option>211.9</option>
              <option>212.9</option>
              <option>213.9</option>
              <option>214.9</option>
              <option>215.9</option>
              <option>216.9</option>
              <option>217.9</option>
              <option>218.9</option>
              <option>219.9</option>
              <option>220.9</option>
              <option>221.9</option>
              <option>222.9</option>
              <option>223.9</option>
              <option>224.9</option>
              <option>225.9</option>
              <option>226.9</option>
              <option>227.9</option>
              <option>228.9</option>
              <option>229.9</option>
              <option>230.9</option>
              <option>231.9</option>
              <option>232.9</option>
              <option>233.9</option>
              <option>234.9</option>
              <option>235.9</option>
              <option>236.9</option>
              <option>237.9</option>
              <option>238.9</option>
              <option>239.9</option>
              <option>240.9</option>
              <option>241.9</option>
              <option>242.9</option>
              <option>243.9</option>
              <option>244.9</option>
              <option>245.9</option>
              <option>246.9</option>
              <option>247.9</option>
              <option>248.9</option>
              <option>249.9</option>
              <option>250.9</option>
              <option>251.9</option>
              <option>252.9</option>
              <option>253.9</option>
              <option>254.9</option>
              <option>255.9</option>
              <option>256.9</option>
              <option>257.9</option>
              <option>258.9</option>
              <option>259.9</option>
              <option>260.9</option>
              <option>261.9</option>
              <option>262.9</option>
              <option>263.9</option>
              <option>264.9</option>
              <option>265.9</option>
              <option>266.9</option>
              <option>267.9</option>
              <option>268.9</option>
              <option>269.9</option>
              <option>270.9</option>
              <option>271.9</option>
              <option>272.9</option>
              <option>273.9</option>
              <option>274.9</option>
              <option>275.9</option>
              <option>276.9</option>
              <option>277.9</option>
              <option>278.9</option>
              <option>279.9</option>
              <option>280.9</option>
              <option>281.9</option>
              <option>282.9</option>
              <option>283.9</option>
              <option>284.9</option>
              <option>285.9</option>
              <option>286.9</option>
              <option>287.9</option>
              <option>288.9</option>
              <option>289.9</option>
              <option>290.9</option>
              <option>291.9</option>
              <option>292.9</option>
              <option>293.9</option>
              <option>294.9</option>
              <option>295.9</option>
              <option>296.9</option>
              <option>297.9</option>
              <option>298.9</option>
              <option>299.9</option>
              <option>300.9</option>
              <option>301.9</option>
              <option>302.9</option>
              <option>303.9</option>
              <option>304.9</option>
              <option>305.9</option>
              <option>306.9</option>
              <option>307.9</option>
              <option>308.9</option>
              <option>309.9</option>
              <option>310.9</option>
              <option>311.9</option>
              <option>312.9</option>
              <option>313.9</option>
              <option>314.9</option>
              <option>315.9</option>
              <option>316.9</option>
              <option>317.9</option>
              <option>318.9</option>
              <option>319.9</option>
              <option>320.9</option>
              <option>321.9</option>
              <option>322.9</option>
              <option>323.9</option>
              <option>324.9</option>
              <option>325.9</option>
              <option>326.9</option>
              <option>327.9</option>
              <option>328.9</option>
              <option>329.9</option>
              <option>330.9</option>
              <option>331.9</option>
              <option>332.9</option>
              <option>333.9</option>
              <option>334.9</option>
              <option>335.9</option>
              <option>336.9</option>
              <option>337.9</option>
              <option>338.9</option>
              <option>339.9</option>
              <option>340.9</option>
              <option>341.9</option>
              <option>342.9</option>
              <option>343.9</option>
              <option>344.9</option>
              <option>345.9</option>
              <option>346.9</option>
              <option>347.9</option>
              <option>348.9</option>
              <option>349.9</option>
              <option>350.9</option>
              <option>351.9</option>
              <option>352.9</option>
              <option>353.9</option>
              <option>354.9</option>
              <option>355.9</option>
              <option>356.9</option>
              <option>357.9</option>
              <option>358.9</option>
              <option>359.9</option>
              <option>360.9</option>
              <option>361.9</option>
              <option>362.9</option>
              <option>363.9</option>
              <option>364.9</option>
              <option>365.9</option>
              <option>366.9</option>
              <option>367.9</option>
              <option>368.9</option>
              <option>369.9</option>
              <option>370.9</option>
              <option>371.9</option>
              <option>372.9</option>
              <option>373.9</option>
              <option>374.9</option>
              <option>375.9</option>
              <option>376.9</option>
              <option>377.9</option>
              <option>378.9</option>
              <option>379.9</option>
              <option>380.9</option>
              <option>381.9</option>
              <option>382.9</option>
              <option>383.9</option>
              <option>384.9</option>
              <option>385.9</option>
              <option>386.9</option>
              <option>387.9</option>
              <option>388.9</option>
              <option>389.9</option>
              <option>390.9</option>
              <option>391.9</option>
              <option>392.9</option>
              <option>393.9</option>
              <option>394.9</option>
              <option>395.9</option>
              <option>396.9</option>
              <option>397.9</option>
              <option>398.9</option>
              <option>399.9</option>
              <option>400.9</option>
              <option>401.9</option>
              <option>402.9</option>
              <option>403.9</option>
              <option>404.9</option>
              <option>405.9</option>
              <option>406.9</option>
              <option>407.9</option>
              <option>408.9</option>
              <option>409.9</option>
              <option>410.9</option>
              <option>411.9</option>
              <option>412.9</option>
              <option>413.9</option>
              <option>414.9</option>
              <option>415.9</option>
              <option>416.9</option>
              <option>417.9</option>
              <option>418.9</option>
              <option>419.9</option>
              <option>420.9</option>
              <option>421.9</option>
              <option>422.9</option>
              <option>423.9</option>
              <option>424.9</option>
              <option>425.9</option>
              <option>426.9</option>
              <option>427.9</option>
              <option>428.9</option>
              <option>429.9</option>
              <option>430.9</option>
              <option>431.9</option>
              <option>432.9</option>
              <option>433.9</option>
              <option>434.9</option>
              <option>435.9</option>
              <option>436.9</option>
              <option>437.9</option>
              <option>438.9</option>
              <option>439.9</option>
              <option>440.9</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Graphics Memory <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Graphics Memory" name="g_memory">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Software Offerings <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="soft_offering">
              <option value="Windows">Windows</option>
              <option value="Linux">Linux</option>
              <option value="Ubuntu">Ubuntu</option>
              <option value="Mac OS">Mac OS</option>
              <option value="Others">Others</option>
              <option value="Indoor HDTV">Indoor HDTV</option>
              <option value="Linpus">Linpus</option>
              <option value="Microsoft office">Microsoft office</option>
              <option value="Skype">Skype</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Touch Pad <span class="text-danger">*</span></label>
            <select class="form-control" name="touch_pad">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Processor Type <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="processor_type">
              <option value="Single-core">Single-core</option>
              <option value="Dual-core">Dual-core</option>
              <option value="Tri Core">Tri Core</option>
              <option value="Quad-core">Quad-core</option>
              <option value="Octa-core">Octa-core</option>
              <option value="Hexa-core">Hexa-core</option>
              <option value="Deca-core">Deca-core</option>
              <option value="AMD">AMD</option>
              <option value="Intel">Intel</option>
              <option value="Intel Core i3">Intel Core i3</option>
              <option value="Intel Core 2 Duo">Intel Core 2 Duo</option>
              <option value="Intel Core i5">Intel Core i5</option>
              <option value="Intel Core i7">Intel Core i7</option>
              <option value="Apple A4">Apple A4</option>
              <option value="Apple A7">Apple A7</option>
              <option value="Apple A8">Apple A8</option>
              <option value="NVIDIA">NVIDIA</option>
              <option value="ARM">ARM</option>
              <option value="Apple A6X">Apple A6X</option>
              <option value="Apple A5">Apple A5</option>
              <option value="Boxchip">Boxchip</option>
              <option value="Mediatek">Mediatek</option>
              <option value="Intel Xeon">Intel Xeon</option>
              <option value="Intel Pentium">Intel Pentium</option>
              <option value="Intel Celeron">Intel Celeron</option>
              <option value="AMD Phenom">AMD Phenom</option>
              <option value="AMD Athlon">AMD Athlon</option>
              <option value="AMD A10">AMD A10</option>
              <option value="AMD A8">AMD A8</option>
              <option value="AMD A6">AMD A6</option>
              <option value="Xeon">Xeon</option>
              <option value="Allwinner">Allwinner</option>
              <option value="Intel Atom">Intel Atom</option>
              <option value="AMD Phenom II">AMD Phenom II</option>
              <option value="AMD E-Series">AMD E-Series</option>
              <option value="AMD Turion">AMD Turion</option>
              <option value="AMD A-Series">AMD A-Series</option>
              <option value="AMD Athlon II">AMD Athlon II</option>
              <option value="Intel Core 2">Intel Core 2</option>
              <option value="Triple-core">Triple-core</option>
              <option value="Intel Core i7-7500U">Intel Core i7-7500U</option>
              <option value="QC">QC</option>
              <option value="Intel Core i5-3317U">Intel Core i5-3317U</option>
              <option value="Intel Atom Z3740">Intel Atom Z3740</option>
              <option value="Intel Core M-5Y10">Intel Core M-5Y10</option>
              <option value="Intel Core i5-4300M">Intel Core i5-4300M</option>
              <option value="Intel Core i5-3210M">Intel Core i5-3210M</option>
              <option value="Intel Core 2 Duo T5450">Intel Core 2 Duo T5450</option>
              <option value="Intel Core i3-2350M">Intel Core i3-2350M</option>
              <option value="Intel Pentium 2117U">Intel Pentium 2117U</option>
              <option value="Intel Core i5-2467M">Intel Core i5-2467M</option>
              <option value="Intel Core Duo P8800">Intel Core Duo P8800</option>
              <option value="Intel Core 2 Duo SU7300">Intel Core 2 Duo SU7300</option>
              <option value="Intel Core i5-2410M">Intel Core i5-2410M</option>
              <option value="A11 Bionic">A11 Bionic</option>
              <option value="Intel Dual Core">Intel Dual Core</option>
              <option value="Octa-core Mediatek MT6592">Octa-core Mediatek MT6592</option>
              <option value="Quad-core Cortex-A7">Quad-core Cortex-A7</option>
              <option value="Cortex-A5">Cortex-A5</option>
              <option value="Intel Core-i3">Intel Core-i3</option>
              <option value="Intel Core-i5">Intel Core-i5</option>
              <option value="64-bit Octa-Core 1.3 GHz Cortex A53">64-bit Octa-Core 1.3 GHz Cortex A53</option>
              <option value="64-bit Snapdragon 8916 1.2 GHz Cortex-A53">64-bit Snapdragon 8916 1.2 GHz Cortex-A53</option>
              <option value="6C Xeon E5">6C Xeon E5</option>
              <option value="ARM Mali T880">ARM Mali T880</option>
              <option value="Blank">Blank</option>
              <option value="Celeron Dual Core">Celeron Dual Core</option>
              <option value="Ci5">Ci5</option>
              <option value="Ci7">Ci7</option>
              <option value="Cortex-A5, Qualcomm MSM7225A">Cortex-A5, Qualcomm MSM7225A</option>
              <option value="Cortex-A5, Qualcomm MSM7225AA">Cortex-A5, Qualcomm MSM7225AA</option>
              <option value="Cortex-A5, Qualcomm MSM7227A Snapdragon">Cortex-A5, Qualcomm MSM7227A Snapdragon</option>
              <option value="Dual-core 1.5 GHz Krait (LTE version)/ Cortex-A9 (Non-LTE)">Dual-core 1.5 GHz Krait (LTE version)/ Cortex-A9 (Non-LTE)</option>
              <option value="Dual-core Cortex A7">Dual-core Cortex A7</option>
              <option value="Dual-core Cortex-A5, Qualcomm MSM8225 Snapdragon">Dual-core Cortex-A5, Qualcomm MSM8225 Snapdragon</option>
              <option value="Dual-core Cortex-A5, Qualcomm MSM8225 Snapdragon S4 Play">Dual-core Cortex-A5, Qualcomm MSM8225 Snapdragon S4 Play</option>
              <option value="Dual-core Cortex-A7, Mediatek MT6572">Dual-core Cortex-A7, Mediatek MT6572</option>
              <option value="Dual-core Cortex-A7, Mediatek MT6572M">Dual-core Cortex-A7, Mediatek MT6572M</option>
              <option value="Dual-core Cortex-A7, Qualcomm MSM8210 Snapdragon 200">Dual-core Cortex-A7, Qualcomm MSM8210 Snapdragon 200</option>
              <option value="Dual-core">Dual-core</option>
              <option value="Dual-core Cortex-A9 TI OMAP 4470">Dual-core Cortex-A9 TI OMAP 4470</option>
              <option value="Dual-core Cortex-A9, Marvell PXA869">Dual-core Cortex-A9, Marvell PXA869</option>
              <option value="Dual-core Cortex-A9, NovaThor U8500">Dual-core Cortex-A9, NovaThor U8500</option>
              <option value="Dual-core Cortex-A9, Pega-Dual +XMM6262">Dual-core Cortex-A9, Pega-Dual +XMM6262</option>
              <option value="Dual-core Exynos 4212">Dual-core Exynos 4212</option>
              <option value="Dual-core Krait 200, Qualcomm MSM8230 Snapdragon 400">Dual-core Krait 200, Qualcomm MSM8230 Snapdragon 400</option>
              <option value="Dual-core Krait 300, Qualcomm MSM8230AB Snapdragon 400">Dual-core Krait 300, Qualcomm MSM8230AB Snapdragon 400</option>
              <option value="Dual-core Krait 300, Qualcomm Snapdragon 400">Dual-core Krait 300, Qualcomm Snapdragon 400</option>
              <option value="Dual-core Krait, Qualcomm MSM8260A Snapdragon">Dual-core Krait, Qualcomm MSM8260A Snapdragon</option>
              <option value="Dual-core Krait, Qualcomm MSM8930 Snapdragon">Dual-core Krait, Qualcomm MSM8930 Snapdragon</option>
              <option value="Dual-core Krait, Qualcomm MSM8960 Snapdragon">Dual-core Krait, Qualcomm MSM8960 Snapdragon</option>
              <option value="Dual-core Krait, Qualcomm MSM8960T Pro Snapdragon">Dual-core Krait, Qualcomm MSM8960T Pro Snapdragon</option>
              <option value="Dual-core Krait, Qualcomm MSM8960T Snapdragon">Dual-core Krait, Qualcomm MSM8960T Snapdragon</option>
              <option value="Dual-core Krait, Qualcomm Snapdragon S4 Plus MSM8227">Dual-core Krait, Qualcomm Snapdragon S4 Plus MSM8227</option>
              <option value="Dual-core Qualcomm MSM8210 Snapdragon 200">Dual-core Qualcomm MSM8210 Snapdragon 200</option>
              <option value="Dual-core Qualcomm Snapdragon 4">Dual-core Qualcomm Snapdragon 4</option>
              <option value="Dual-core, Qualcomm MSM8227">Dual-core, Qualcomm MSM8227</option>
              <option value="Dual-core, Qualcomm MSM8230 Snapdragon">Dual-core, Qualcomm MSM8230 Snapdragon</option>
              <option value="Mediatek MT6582">Mediatek MT6582</option>
              <option value="Mobile Dual-core">Mobile Dual-core</option>
              <option value="Mobile Octa Core">Mobile Octa Core</option>
              <option value="Mobile Octa-core">Mobile Octa-core</option>
              <option value="Mobile Quad-core">Mobile Quad-core</option>
              <option value="QC Xeon E5">QC Xeon E5</option>
              <option value="Quad-core Cortex-A7, BCM23550">Quad-core Cortex-A7, BCM23550</option>
              <option value="Quad-core Krait, Qualcomm MDM9215M / APQ8064">Quad-core Krait, Qualcomm MDM9215M / APQ8064</option>
              <option value="Quad-core Turbo">Quad-core Turbo</option>
              <option value="Qualcomm snapdragon">Qualcomm snapdragon</option>
              <option value="Tavor MG1">Tavor MG1</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Graphic Card <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="g_card">
              <option value="AMD">AMD</option>
              <option value="Intel">Intel</option>
              <option value="NVIDIA">NVIDIA</option>
              <option value="Integrated">Integrated</option>
              <option value="nvdia">nvdia</option>
              <option value="GT 1030">GT 1030</option>
              <option value="n/a">n/a</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Battery Life <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="battery_life">
              <option value="Not Specified">Not Specified</option>
              <option value="21 hour and up">21 hour and up</option>
              <option value="16-20 Hour">16-20 Hour</option>
              <option value="11-15 Hour">11-15 Hour</option>
              <option value="6-10 Hour">6-10 Hour</option>
              <option value="1-5 Hour">1-5 Hour</option>
              <option value="Less than 1 hour">Less than 1 hour</option>
              <option value="Less than 30 minutes">Less than 30 minutes</option>
              <option value="30-45 minutes">30-45 minutes</option>
              <option value="Up to 1120 h (2G) / Up to 1093 h (3G)">Up to 1120 h (2G) / Up to 1093 h (3G)</option>
              <option value="Up to 150 h">Up to 150 h</option>
              <option value="Up to 200 h">Up to 200 h</option>
              <option value="Up to 220 h">Up to 220 h</option>
              <option value="Up to 288 h">Up to 288 h</option>
              <option value="Up to 288 h (2G) / Up to 288 h (3G)">Up to 288 h (2G) / Up to 288 h (3G)</option>
              <option value="Up to 300 h">Up to 300 h</option>
              <option value="Up to 300 h (2G) / Up to 400 h (3G)">Up to 300 h (2G) / Up to 400 h (3G)</option>
              <option value="Up to 312 h">Up to 312 h</option>
              <option value="Up to 320 h">Up to 320 h</option>
              <option value="Up to 320 h (2G) / Up to 320 h (3G)">Up to 320 h (2G) / Up to 320 h (3G)</option>
              <option value="Up to 320 h (2G) / Up to 340 h (3G)">Up to 320 h (2G) / Up to 340 h (3G)</option>
              <option value="Up to 330 h (2G) / Up to 340 h (3G)">Up to 330 h (2G) / Up to 340 h (3G)</option>
              <option value="Up to 336 h">Up to 336 h</option>
              <option value="Up to 350 h (2G) / Up to 360 h (3G)">Up to 350 h (2G) / Up to 360 h (3G)</option>
              <option value="Up to 360 h">Up to 360 h</option>
              <option value="Up to 366 h (2G) / Up to 441 h (3G)">Up to 366 h (2G) / Up to 441 h (3G)</option>
              <option value="Up to 370 h">Up to 370 h</option>
              <option value="Up to 384 h">Up to 384 h</option>
              <option value="Up to 390 h">Up to 390 h</option>
              <option value="Up to 400 h">Up to 400 h</option>
              <option value="Up to 416 h (2G) / Up to 315 h (3G)">Up to 416 h (2G) / Up to 315 h (3G)</option>
              <option value="Up to 420 h">Up to 420 h</option>
              <option value="Up to 422 h">Up to 422 h</option>
              <option value="Up to 430 h">Up to 430 h</option>
              <option value="Up to 432 h">Up to 432 h</option>
              <option value="Up to 440 h">Up to 440 h</option>
              <option value="Up to 470 h (2G) / Up to 545 h (3G)">Up to 470 h (2G) / Up to 545 h (3G)</option>
              <option value="Up to 498 h (2G) / Up to 454 h (3G)">Up to 498 h (2G) / Up to 454 h (3G)</option>
              <option value="Up to 520 h (2G) / Up to 460 h (3G)">Up to 520 h (2G) / Up to 460 h (3G)</option>
              <option value="Up to 528 h">Up to 528 h</option>
              <option value="Up to 530 h (2G) / Up to 530 h (3G)">Up to 530 h (2G) / Up to 530 h (3G)</option>
              <option value="Up to 540 h">Up to 540 h</option>
              <option value="Up to 550 h (2G) / Up to 530 h (3G)">Up to 550 h (2G) / Up to 530 h (3G)</option>
              <option value="Up to 552 h">Up to 552 h</option>
              <option value="Up to 552 h (2G) / Up to 454 h (3G)">Up to 552 h (2G) / Up to 454 h (3G)</option>
              <option value="Up to 570 h">Up to 570 h</option>
              <option value="Up to 576 h">Up to 576 h</option>
              <option value="Up to 588 h (2G) / Up to 605 h (3G)">Up to 588 h (2G) / Up to 605 h (3G)</option>
              <option value="Up to 590 h (2G) / Up to 790 h (3G)">Up to 590 h (2G) / Up to 790 h (3G)</option>
              <option value="Up to 600 h">Up to 600 h</option>
              <option value="Up to 607 h (2G) / Up to 618 h (3G)">Up to 607 h (2G) / Up to 618 h (3G)</option>
              <option value="Up to 635 h (2G) / Up to 734 h (3G)">Up to 635 h (2G) / Up to 734 h (3G)</option>
              <option value="Up to 648 h">Up to 648 h</option>
              <option value="Up to 670 h (2G) / Up to 600 h (3G)">Up to 670 h (2G) / Up to 600 h (3G)</option>
              <option value="Up to 684 h (2G) / Up to 960 h (3G)">Up to 684 h (2G) / Up to 960 h (3G)</option>
              <option value="Up to 690 h (2G) / Up to 740 h (3G)">Up to 690 h (2G) / Up to 740 h (3G)</option>
              <option value="Up to 710 h (2G) / Up to 480 h (3G)">Up to 710 h (2G) / Up to 480 h (3G)</option>
              <option value="Up to 720 h">Up to 720 h</option>
              <option value="Up to 790 h (2G) / Up to 820 h (3G)">Up to 790 h (2G) / Up to 820 h (3G)</option>
              <option value="Up to 792 h">Up to 792 h</option>
              <option value="Up to 8 h">Up to 8 h</option>
              <option value="Up to 840 h">Up to 840 h</option>
              <option value="Up to 880 h (2G) / Up to 850 h (3G)">Up to 880 h (2G) / Up to 850 h (3G)</option>
              <option value="Up to 912 h (2G) / Up to 912 h (3G)">Up to 912 h (2G) / Up to 912 h (3G)</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Processor <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="processpr">
              <option value="Black">Black</option>
              <option value="AMD">AMD</option>
              <option value="Intel">Intel</option>
              <option value="Quad Core">Quad Core</option>
              <option value="Single Core">Single Core</option>
              <option value="Dual Core">Dual Core</option>
              <option value="Intel Core i3">Intel Core i3</option>
              <option value="Intel Core i5">Intel Core i5</option>
              <option value="Intel Core i7">Intel Core i7</option>
              <option value="Apple A8">Apple A8</option>
              <option value="Qualcomm">Qualcomm</option>
              <option value="0">0</option>
              <option value="Intel Xeon">Intel Xeon</option>
              <option value="Intel Pentium">Intel Pentium</option>
              <option value="Intel Celeron">Intel Celeron</option>
              <option value="AMD A4">AMD A4</option>
              <option value="AMD Phenom">AMD Phenom</option>
              <option value="AMD FX">AMD FX</option>
              <option value="AMD Athlon">AMD Athlon</option>
              <option value="AMD A10">AMD A10</option>
              <option value="AMD A8">AMD A8</option>
              <option value="Intel Dual Core">Intel Dual Core</option>
              <option value="AMD A6">AMD A6</option>
              <option value="DDR2">DDR2</option>
              <option value="Single">Single</option>
              <option value="A1">A1</option>
              <option value="DDR4">DDR4</option>
              <option value="NA">NA</option>
              <option value="Transparent">Transparent</option>
              <option value="Deca-core">Deca-core</option>
              <option value="Quad-core">Quad-core</option>
              <option value="Hexa-core">Hexa-core</option>
              <option value="Octa-core">Octa-core</option>
              <option value="N/A">N/A</option>
              <option value="DZ09">DZ09</option>
              <option value="Intel Atom">Intel Atom</option>
              <option value="Atom">Atom</option>
              <option value="Testing">Testing</option>
              <option value="Triple-core">Triple-core</option>
              <option value="Intel Atom Z3740">Intel Atom Z3740</option>
              <option value="Intel Core i5-2410M">Intel Core i5-2410M</option>
              <option value="Intel Pentium Dual Core">Intel Pentium Dual Core</option>
              <option value="600 MHz">600 MHz</option>
              <option value="Intel Core™ i5-3330S">Intel Core™ i5-3330S</option>
              <option value="Intel Core™ i5-3470T">Intel Core™ i5-3470T</option>
              <option value="Intel Core™ i7-3610QM">Intel Core™ i7-3610QM</option>
              <option value="Intel Dual Core -2030 3rd Gen">Intel Dual Core -2030 3rd Gen</option>
              <option value="Intel Dual Core 2.5 GHz">Intel Dual Core 2.5 GHz</option>
              <option value="Intel Dual Core 2.50 GHz">Intel Dual Core 2.50 GHz</option>
              <option value="Intel Dual Core Atom processor Z2760">Intel Dual Core Atom processor Z2760</option>
              <option value="Intel Dual Core E-22 Speed: 3.6 GHz">Intel Dual Core E-22 Speed: 3.6 GHz</option>
              <option value="Intel Dual Core E-2200 Speed: 2.80 GHz">Intel Dual Core E-2200 Speed: 2.80 GHz</option>
              <option value="Intel Dual Core E-2200 Speed: 3.00 GHz">Intel Dual Core E-2200 Speed: 3.00 GHz</option>
              <option value="Intel Dual Core E-2200 Speed: 3.06 GHz">Intel Dual Core E-2200 Speed: 3.06 GHz</option>
              <option value="Intel Dual Core E2">Intel Dual Core E2</option>
              <option value="Intel Dual Core E2 Speed 3. GHz, 2MB Cache">Intel Dual Core E2 Speed 3. GHz, 2MB Cache</option>
              <option value="Intel Dual Core E2000">Intel Dual Core E2000</option>
              <option value="Intel Dual Core E2000 Speed 2.5 GHz, 2MB Cache">Intel Dual Core E2000 Speed 2.5 GHz, 2MB Cache</option>
              <option value="Intel Dual Core E2000 Speed 3.00 GHz, 2MB Cache">Intel Dual Core E2000 Speed 3.00 GHz, 2MB Cache</option>
              <option value="Intel Dual Core i5">Intel Dual Core i5</option>
              <option value="Intel Dual Core Processor Speed: 2.2 GHz">Intel Dual Core Processor Speed: 2.2 GHz</option>
              <option value="Intel Dual Core Processor Speed: 2.20 GHz">Intel Dual Core Processor Speed: 2.20 GHz</option>
              <option value="Intel dual-core 1.6GHz Core i5">Intel dual-core 1.6GHz Core i5</option>
              <option value="Intel Dual-Core Core i5">Intel Dual-Core Core i5</option>
              <option value="Intel Dual-Core i5">Intel Dual-Core i5</option>
              <option value="Intel m3">Intel m3</option>
              <option value="Intel Moorfield Z3530-(Quad Core)">Intel Moorfield Z3530-(Quad Core)</option>
              <option value="Intel MRF Quad Core Z3580">Intel MRF Quad Core Z3580</option>
              <option value="Intel PDC 4th Gen. G3250, 3.20GHz">Intel PDC 4th Gen. G3250, 3.20GHz</option>
              <option value="Intel PDC G4400, 3.30GHz">Intel PDC G4400, 3.30GHz</option>
              <option value="Intel PDC N3700">Intel PDC N3700</option>
              <option value="Intel Pentium  Dual-core">Intel Pentium  Dual-core</option>
              <option value="Intel Pentium Dual Core Processor G3240">Intel Pentium Dual Core Processor G3240</option>
              <option value="Intel Pentium N3530">Intel Pentium N3530</option>
              <option value="Intel Pentium N3710">Intel Pentium N3710</option>
              <option value="Intel Pentium N3825U">Intel Pentium N3825U</option>
              <option value="Intel Pentium Processor">Intel Pentium Processor</option>
              <option value="Intel Pentium processor 2127U">Intel Pentium processor 2127U</option>
              <option value="Intel Pentium Processor N3700">Intel Pentium Processor N3700</option>
              <option value="Intel Pentium Quad Core">Intel Pentium Quad Core</option>
              <option value="Intel Pentium Quad Core N3530">Intel Pentium Quad Core N3530</option>
              <option value="Intel Pentium Quad Core N3540">Intel Pentium Quad Core N3540</option>
              <option value="Intel Pentium Quad Core N3540U">Intel Pentium Quad Core N3540U</option>
              <option value="Intel Pentium Quad Core N3700">Intel Pentium Quad Core N3700</option>
              <option value="Intel Pentium Quad Core N3710">Intel Pentium Quad Core N3710</option>
              <option value="Intel Pentium Quad Core Processor N3540">Intel Pentium Quad Core Processor N3540</option>
              <option value="Intel Pentium Quad Core – N3700">Intel Pentium Quad Core – N3700</option>
              <option value="Intel Pentium Quad Core- N3530 Processor">Intel Pentium Quad Core- N3530 Processor</option>
              <option value="Intel Pentium Quad-Core Processor J2900">Intel Pentium Quad-Core Processor J2900</option>
              <option value="Intel Pentium-3558U">Intel Pentium-3558U</option>
              <option value="Intel PQC N3530">Intel PQC N3530</option>
              <option value="Intel PQC N3540">Intel PQC N3540</option>
              <option value="Intel PQC N3700">Intel PQC N3700</option>
              <option value="Intel PQC N4200">Intel PQC N4200</option>
              <option value="Intel Quad Core">Intel Quad Core</option>
              <option value="Intel Quad Core i5">Intel Quad Core i5</option>
              <option value="Intel Quad Core i7 2720QM">Intel Quad Core i7 2720QM</option>
              <option value="Intel Quad-Core i5">Intel Quad-Core i5</option>
              <option value="Intel Quad-Core i7">Intel Quad-Core i7</option>
              <option value="Intel quad-core, Core i7">Intel quad-core, Core i7</option>
              <option value="Intel Xeon CPU">Intel Xeon CPU</option>
              <option value="Intel Xeon E3">Intel Xeon E3</option>
              <option value="Intel Xeon E3 1220v5">Intel Xeon E3 1220v5</option>
              <option value="Intel Xeon E3-1226v3 CPU">Intel Xeon E3-1226v3 CPU</option>
              <option value="Intel Xeon E3-1226v3 CPU (4 cores, 8threads)">Intel Xeon E3-1226v3 CPU (4 cores, 8threads)</option>
              <option value="Intel Xeon E3-1231v3 CPU">Intel Xeon E3-1231v3 CPU</option>
              <option value="Intel Xeon E3-1241v3 CPU">Intel Xeon E3-1241v3 CPU</option>
              <option value="Intel Xeon E3-1246v3 CPU (4 cores, 8threads)">Intel Xeon E3-1246v3 CPU (4 cores, 8threads)</option>
              <option value="Intel Xeon E5 2620v4">Intel Xeon E5 2620v4</option>
              <option value="Intel Xeon E5-1620v3 CPU">Intel Xeon E5-1620v3 CPU</option>
              <option value="Intel Xeon E5-2670v3 CPU">Intel Xeon E5-2670v3 CPU</option>
              <option value="Intel Z3735D Quad core">Intel Z3735D Quad core</option>
              <option value="Intel Z8500">Intel Z8500</option>
              <option value="Intel ® Core ™ i5">Intel ® Core ™ i5</option>
              <option value="IntelCore-i5 4200U">IntelCore-i5 4200U</option>
              <option value="Intel®  CORE i3 4005U">Intel®  CORE i3 4005U</option>
              <option value="Intel®  CORE I3 4030U">Intel®  CORE I3 4030U</option>
              <option value="Intel®  CORE I3 4160HU">Intel®  CORE I3 4160HU</option>
              <option value="Intel®  CORE I5 4200U">Intel®  CORE I5 4200U</option>
              <option value="Intel®  CORE i5 4210U">Intel®  CORE i5 4210U</option>
              <option value="Intel®  CORE I5 4570HU">Intel®  CORE I5 4570HU</option>
              <option value="Intel®  CORE I5 5005U">Intel®  CORE I5 5005U</option>
              <option value="Intel®  CORE I5 5200U">Intel®  CORE I5 5200U</option>
              <option value="Intel®  Core i7 4510U">Intel®  Core i7 4510U</option>
              <option value="Intel®  CORE I7 4710HQ">Intel®  CORE I7 4710HQ</option>
              <option value="Intel® 4th Generation Pentium ® Core™ i5-4590T">Intel® 4th Generation Pentium ® Core™ i5-4590T</option>
              <option value="Intel® 6th Gen Core™ i3-6006U Processor (3M Cache, 2.00 GHz)">Intel® 6th Gen Core™ i3-6006U Processor (3M Cache, 2.00 GHz)</option>
              <option value="Intel® 6th Gen Core™ i3-6100 Processor">Intel® 6th Gen Core™ i3-6100 Processor</option>
              <option value="Intel® 6th generation Core™ i7- 6500U">Intel® 6th generation Core™ i7- 6500U</option>
              <option value="Intel® 6th Generation Core™i5-6500 3.2 GHz">Intel® 6th Generation Core™i5-6500 3.2 GHz</option>
              <option value="Intel® Atom">Intel® Atom</option>
              <option value="Intel® Atom z8350">Intel® Atom z8350</option>
              <option value="Intel® Atom™ X5-Z8350 (1.44GHZ 1600MHZ 2MB)">Intel® Atom™ X5-Z8350 (1.44GHZ 1600MHZ 2MB)</option>
              <option value="Intel® Celeron N3350">Intel® Celeron N3350</option>
              <option value="Intel® Celeron® Dual-Core N3050 Processor, 2.16 GHz">Intel® Celeron® Dual-Core N3050 Processor, 2.16 GHz</option>
              <option value="Intel® Celeron® N3350 Processor (2M Cache, 1.10 GHz up to 2.4 GHz)">Intel® Celeron® N3350 Processor (2M Cache, 1.10 GHz up to 2.4 GHz)</option>
              <option value="Intel® Core i3">Intel® Core i3</option>
              <option value="Intel® CORE i3 5005U">Intel® CORE i3 5005U</option>
              <option value="Intel® Core i5-4590 4th Gen Processor">Intel® Core i5-4590 4th Gen Processor</option>
              <option value="Intel® Core i5-4590S">Intel® Core i5-4590S</option>
              <option value="Intel® Core i5-5200U">Intel® Core i5-5200U</option>
              <option value="1.2">1.2</option>
              <option value="1.7">1.7</option>
              <option value="6th Gen Intel Core i7-6600U">6th Gen Intel Core i7-6600U</option>
              <option value="Dual-core CPU with SSE3 (Intel Pentium D 3GHz / AMD Athlon 64 X2 4200) or better">Dual-core CPU with SSE3 (Intel Pentium D 3GHz / AMD Athlon 64 X2 4200) or better</option>
              <option value="0.416">0.416</option>
              <option value="1 GHz">1 GHz</option>
              <option value="1 GHz Cortex-A5">1 GHz Cortex-A5</option>
              <option value="1.0GHz Single Core">1.0GHz Single Core</option>
              <option value="1.2 GHz">1.2 GHz</option>
              <option value="1.2 GHz Cortex-A7">1.2 GHz Cortex-A7</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Wireless Type <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="wireless_type">
              <option value="Bluetooth">Bluetooth</option>
              <option value="Wifi">Wifi</option>
              <option value="Cellular (3G/4G)">Cellular (3G/4G)</option>
              <option value="WIFI + Bluetooth">WIFI + Bluetooth</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Display Size <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Number Cpus" name="dis_size">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Number Cpus <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Number Cpus" name="num_cpus">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Operating System <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="operating_system">
              <option value="Windows">Windows</option>
              <option value="Linux">Linux</option>
              <option value="Windows XP Professional">Windows XP Professional</option>
              <option value="Mac OS X">Mac OS X</option>
              <option value="Android">Android</option>
              <option value="iOS">iOS</option>
              <option value="No OS">No OS</option>
              <option value="Other">Other</option>
              <option value="Windows XP">Windows XP</option>
              <option value="Windows 7">Windows 7</option>
              <option value="Windows Mobile 6.5">Windows Mobile 6.5</option>
              <option value="Windows Phone OS">Windows Phone OS</option>
              <option value="Symbian">Symbian</option>
              <option value="Blackberry OS">Blackberry OS</option>
              <option value="Chrome OS">Chrome OS</option>
              <option value="Windows 8">Windows 8</option>
              <option value="Firefox">Firefox</option>
              <option value="Android 4.3 Jelly Bean">Android 4.3 Jelly Bean</option>
              <option value="Android 4.2 Jelly Bean">Android 4.2 Jelly Bean</option>
              <option value="Android 4.1 Jelly Bean">Android 4.1 Jelly Bean</option>
              <option value="Android 4.0 Ice Cream Sandwich">Android 4.0 Ice Cream Sandwich</option>
              <option value="Android 2.3 Gingerbread">Android 2.3 Gingerbread</option>
              <option value="Android 4.4 Kitkat">Android 4.4 Kitkat</option>
              <option value="iOS 7">iOS 7</option>
              <option value="iOS 8">iOS 8</option>
              <option value="Proprietary">Proprietary</option>
              <option value="Windows 8.1">Windows 8.1</option>
              <option value="Maverick">Maverick</option>
              <option value="DOS">DOS</option>
              <option value="X Mavericks">X Mavericks</option>
              <option value="Android 4.3 Jelly">Android 4.3 Jelly</option>
              <option value="Android 2.1 Eclair">Android 2.1 Eclair</option>
              <option value="Android 2.2 Froyo">Android 2.2 Froyo</option>
              <option value="Android 4.0 Ice Cream">Android 4.0 Ice Cream</option>
              <option value="Nokia OS">Nokia OS</option>
              <option value="Blackber">Blackber</option>
              <option value="Windows 7 Professional">Windows 7 Professional</option>
              <option value="Windows 7 Home Premium 64">Windows 7 Home Premium 64</option>
              <option value="Windows 7 Home Premium">Windows 7 Home Premium</option>
              <option value="Windows 7 Home Basic">Windows 7 Home Basic</option>
              <option value="Meego">Meego</option>
              <option value="Windows XP Home">Windows XP Home</option>
              <option value="Ubuntu">Ubuntu</option>
              <option value="Android 2.3">Android 2.3</option>
              <option value="Android 2.3.6 Gingerbread">Android 2.3.6 Gingerbread</option>
              <option value="SGP">SGP</option>
              <option value="Symbia">Symbia</option>
              <option value="Remix OS">Remix OS</option>
              <option value="Windows 10">Windows 10</option>
              <option value=" Android OS, v4.2.2 (Jelly Bean)"> Android OS, v4.2.2 (Jelly Bean)</option>
              <option value=" Android v4.2.2 (Jelly Bean)"> Android v4.2.2 (Jelly Bean)</option>
              <option value=" Android v4.3 (Jelly Bean)"> Android v4.3 (Jelly Bean)</option>
              <option value="Android 1.5 Cupcake">Android 1.5 Cupcake</option>
              <option value="Android 1.6 (Donut)">Android 1.6 (Donut)</option>
              <option value="Android 1.6 Donut">Android 1.6 Donut</option>
              <option value="Android 2.1">Android 2.1</option>
              <option value="Android 2.2">Android 2.2</option>
              <option value="Android 2.3.3 Gingerbread">Android 2.3.3 Gingerbread</option>
              <option value="Android 2.3.4 Gingerbread">Android 2.3.4 Gingerbread</option>
              <option value="Android 2.3.5 Gingerbread">Android 2.3.5 Gingerbread</option>
              <option value="Android 3.0">Android 3.0</option>
              <option value="Android 3.0 Honeycomb">Android 3.0 Honeycomb</option>
              <option value="Android 3.2">Android 3.2</option>
              <option value="Android 3.2 Honeycomb">Android 3.2 Honeycomb</option>
              <option value="Android 4">Android 4</option>
              <option value="Android 4.0">Android 4.0</option>
              <option value="Android 4.0 Ic">Android 4.0 Ic</option>
              <option value="Android 4.0.3">Android 4.0.3</option>
              <option value="Android 4.0.3 Ice Cream Sandwich">Android 4.0.3 Ice Cream Sandwich</option>
              <option value="Android 4.0.4">Android 4.0.4</option>
              <option value="Android 4.0.4 Ice Cream Sandwich">Android 4.0.4 Ice Cream Sandwich</option>
              <option value="Android 4.1">Android 4.1</option>
              <option value="Android 4.1 Jellybean">Android 4.1 Jellybean</option>
              <option value="Android 4.1.1 Jelly Bean">Android 4.1.1 Jelly Bean</option>
              <option value="Android 4.1.1 Jellybean">Android 4.1.1 Jellybean</option>
              <option value="Android 4.1.2 Jelly Bean">Android 4.1.2 Jelly Bean</option>
              <option value="Android 4.1.2 Jellybean">Android 4.1.2 Jellybean</option>
              <option value="Android 4.2 Jellybean">Android 4.2 Jellybean</option>
              <option value="Android 4.2.1 Jelly Bean">Android 4.2.1 Jelly Bean</option>
              <option value="Android 4.2.2">Android 4.2.2</option>
              <option value="Android 4.2.2 Jelly Bean">Android 4.2.2 Jelly Bean</option>
              <option value="Android 4.2.2 Jellybean">Android 4.2.2 Jellybean</option>
              <option value="Android 4.3 Jellybean">Android 4.3 Jellybean</option>
              <option value="Android 4.3.9 Jelly Bean">Android 4.3.9 Jelly Bean</option>
              <option value="Android 4.4 (KitKat)">Android 4.4 (KitKat)</option>
              <option value="Android 4.4.2 Kitkat">Android 4.4.2 Kitkat</option>
              <option value="Android 4.4.3 Kitkat">Android 4.4.3 Kitkat</option>
              <option value="Android 4.4.4 KitKat">Android 4.4.4 KitKat</option>
              <option value="Android KitKat 4.4">Android KitKat 4.4</option>
              <option value="Android OS 4.2.1 (Jelly Bean)">Android OS 4.2.1 (Jelly Bean)</option>
              <option value="Android OS 4.4 Kitkat">Android OS 4.4 Kitkat</option>
              <option value="Android OS v1.6 (Donut)">Android OS v1.6 (Donut)</option>
              <option value="Android OS v4.0">Android OS v4.0</option>
              <option value="Android OS, v2.2 (Froyo)">Android OS, v2.2 (Froyo)</option>
              <option value="Android OS, v2.3 (Gingerbread)">Android OS, v2.3 (Gingerbread)</option>
              <option value="Android OS, v2.3.5 (Gingerbread)">Android OS, v2.3.5 (Gingerbread)</option>
              <option value="Android OS, v2.3.6 (Gingerbread),">Android OS, v2.3.6 (Gingerbread),</option>
              <option value="Android OS, v2.3.7 (Gingerbread)">Android OS, v2.3.7 (Gingerbread)</option>
              <option value="Android OS, v4.0.3 (Ice Cream Sandwich)">Android OS, v4.0.3 (Ice Cream Sandwich)</option>
              <option value="Android OS, v4.0.4 Ice Cream Sandwich">Android OS, v4.0.4 Ice Cream Sandwich</option>
              <option value="Android OS, v4.1 (Jelly Bean)">Android OS, v4.1 (Jelly Bean)</option>
              <option value="Android OS, v4.1.1 (Jelly Bean)">Android OS, v4.1.1 (Jelly Bean)</option>
              <option value="Android OS, v4.1.2 (Jelly Bean)">Android OS, v4.1.2 (Jelly Bean)</option>
              <option value="Android OS, v4.2 (Jelly Bean)">Android OS, v4.2 (Jelly Bean)</option>
              <option value="Android OS, v4.3 (Jelly Bean)">Android OS, v4.3 (Jelly Bean)</option>
              <option value="Android OS, v4.4 (KitKat)">Android OS, v4.4 (KitKat)</option>
              <option value="Android OS, v4.4.2 (KitKat)">Android OS, v4.4.2 (KitKat)</option>
              <option value="Android v4.0.3 (Ice Cream Sandwich)">Android v4.0.3 (Ice Cream Sandwich)</option>
              <option value="Android v4.1.2 (Jelly Bean">Android v4.1.2 (Jelly Bean</option>
              <option value="Android v4.1.2 (Jelly Bean)">Android v4.1.2 (Jelly Bean)</option>
              <option value="Android v4.2">Android v4.2</option>
              <option value="Android v4.4">Android v4.4</option>
              <option value="Asha S40">Asha S40</option>
              <option value="Bada OS 1.2">Bada OS 1.2</option>
              <option value="BlackBerry 10">BlackBerry 10</option>
              <option value="BlackBerry 10 OS">BlackBerry 10 OS</option>
              <option value="BlackBerry 10.2">BlackBerry 10.2</option>
              <option value="BlackBerry 10.2 OS">BlackBerry 10.2 OS</option>
              <option value="BlackBerry 10.2.1">BlackBerry 10.2.1</option>
              <option value="BlackBerry 7">BlackBerry 7</option>
              <option value="BlackBerry 7.0">BlackBerry 7.0</option>
              <option value="BlackBerry 7.1">BlackBerry 7.1</option>
              <option value="BlackBerry OS 5">BlackBerry OS 5</option>
              <option value="BlackBerry OS 7">BlackBerry OS 7</option>
              <option value="BlackBerry OS 7.0">BlackBerry OS 7.0</option>
              <option value="BlackBerry OS 7.1">BlackBerry OS 7.1</option>
              <option value="Blackberry OS 10">Blackberry OS 10</option>
              <option value="Blackberry OS 10.2">Blackberry OS 10.2</option>
              <option value="CE 6.0 Core">CE 6.0 Core</option>
              <option value="Firefox 1.3">Firefox 1.3</option>
              <option value="FreeDOS">FreeDOS</option>
              <option value="Google Android 4.1 (Jelly Bean)">Google Android 4.1 (Jelly Bean)</option>
              <option value="IOS 4">IOS 4</option>
              <option value="Mac OS">Mac OS</option>
              <option value="Mac OS X Mountain Lion">Mac OS X Mountain Lion</option>
              <option value="Mac OS X v10.5.8">Mac OS X v10.5.8</option>
              <option value="Maemo 5">Maemo 5</option>
              <option value="Microsoft Windows CE 6.0 Core Version">Microsoft Windows CE 6.0 Core Version</option>
              <option value="Microsoft Windows Mobile 6.1 Professional">Microsoft Windows Mobile 6.1 Professional</option>
              <option value="Microsoft Windows Mobile 6.5.3 Professional">Microsoft Windows Mobile 6.5.3 Professional</option>
              <option value="Microsoft Windows Phone 7.5 Mango">Microsoft Windows Phone 7.5 Mango</option>
              <option value="Microsoft Windows Phone 8">Microsoft Windows Phone 8</option>
              <option value="Microsoft Windows Phone 8.1">Microsoft Windows Phone 8.1</option>
              <option value="No info">No info</option>
              <option value="Nokia Asha">Nokia Asha</option>
              <option value="Nokia Asha 1.2">Nokia Asha 1.2</option>
              <option value="Nokia Asha Software Platform">Nokia Asha Software Platform</option>
              <option value="Nokia Asha software Platform 1.2">Nokia Asha software Platform 1.2</option>
              <option value="Nokia Asha software platform 1.0">Nokia Asha software platform 1.0</option>
              <option value="Nokia Asha software platform 1.1.1">Nokia Asha software platform 1.1.1</option>
              <option value="Nokia OS Series 30+">Nokia OS Series 30+</option>
              <option value="Nokia X Software Platform">Nokia X Software Platform</option>
              <option value="Nokia X flatform 2.0 (Android 4.3)">Nokia X flatform 2.0 (Android 4.3)</option>
              <option value="OS X">OS X</option>
              <option value="OS X Yosemite">OS X Yosemite</option>
              <option value="RIM OS 7.0">RIM OS 7.0</option>
              <option value="S30">S30</option>
              <option value="S40">S40</option>
              <option value="S40 Asha">S40 Asha</option>
              <option value="S60">S60</option>
              <option value="S60 5th Edition">S60 5th Edition</option>
              <option value="Samsung OS">Samsung OS</option>
              <option value="Samsung Proprietary">Samsung Proprietary</option>
              <option value="Symbian 9.3">Symbian 9.3</option>
              <option value="Symbian Anna">Symbian Anna</option>
              <option value="Symbian Belle">Symbian Belle</option>
              <option value="Symbian OS">Symbian OS</option>
              <option value="Symbian^3">Symbian^3</option>
              <option value="Win 8.1 Bing">Win 8.1 Bing</option>
              <option value="Win7 Pro 64 downgrade W8">Win7 Pro 64 downgrade W8</option>
              <option value="Windows 7 Home Basic 64-bit">Windows 7 Home Basic 64-bit</option>
              <option value="Windows 7 Pro">Windows 7 Pro</option>
              <option value="Windows 7 Pro 32-bit">Windows 7 Pro 32-bit</option>
              <option value="Windows 7 Professional SP1 64-bit">Windows 7 Professional SP1 64-bit</option>
              <option value="Windows 7 Starter">Windows 7 Starter</option>
              <option value="Windows 7.5">Windows 7.5</option>
              <option value="Windows 7.5 Mango">Windows 7.5 Mango</option>
              <option value="Windows 8 (Dock) Android 4.2 Jelly Bean (Tablet)">Windows 8 (Dock) Android 4.2 Jelly Bean (Tablet)</option>
              <option value="Windows 8 64 bit SL">Windows 8 64 bit SL</option>
              <option value="Windows 8 Pro">Windows 8 Pro</option>
              <option value="Windows 8 Pro 64 bit (English Version)">Windows 8 Pro 64 bit (English Version)</option>
              <option value="Windows 8 SL">Windows 8 SL</option>
              <option value="Windows 8 STD">Windows 8 STD</option>
              <option value="Windows 8 Single Language 64 bit (English Version)">Windows 8 Single Language 64 bit (English Version)</option>
              <option value="Windows 8 Single Language 64bit">Windows 8 Single Language 64bit</option>
              <option value="Windows 8, 7, Vista, XP, 2000 32/64 bit">Windows 8, 7, Vista, XP, 2000 32/64 bit</option>
              <option value="Windows 8.1 Pro">Windows 8.1 Pro</option>
              <option value="Windows Mobile 6.1 Pro">Windows Mobile 6.1 Pro</option>
              <option value="Windows Phone 7.5 Mango">Windows Phone 7.5 Mango</option>
              <option value="Windows Phone 8">Windows Phone 8</option>
              <option value="Windows Phone 8.1">Windows Phone 8.1</option>
              <option value="Windows RT">Windows RT</option>
              <option value="android os">android os</option>
              <option value="iOS 3">iOS 3</option>
              <option value="iOS 5">iOS 5</option>
              <option value="iOS 5.1">iOS 5.1</option>
              <option value="iOS 6">iOS 6</option>
              <option value="iOS 7.0.4">iOS 7.0.4</option>
              <option value="iOS 8.0">iOS 8.0</option>
              <option value="v4.2 (jelly bean)">v4.2 (jelly bean)</option>
              <option value="BlackBerry">BlackBerry</option>
              <option value="iOS 9">iOS 9</option>
              <option value="Android 7.0 Nougat">Android 7.0 Nougat</option>
              <option value="Android 6.0 Marshmallow">Android 6.0 Marshmallow</option>
              <option value="Android 5.1 Lollipop">Android 5.1 Lollipop</option>
              <option value="Android 5.0 Lollipop">Android 5.0 Lollipop</option>
              <option value="USB 2.0">USB 2.0</option>
              <option value="Others">Others</option>
              <option value="Chrome">Chrome</option>
              <option value="OS X El Capitan">OS X El Capitan</option>
              <option value="5.1">5.1</option>
              <option value="Android 5.1">Android 5.1</option>
              <option value="N/A">N/A</option>
              <option value="OS">OS</option>
              <option value="Testing">Testing</option>
              <option value="BlackBerry OS 10.2.1">BlackBerry OS 10.2.1</option>
              <option value="WINDOWS VISTA BUSINESS">WINDOWS VISTA BUSINESS</option>
              <option value="Proprietary OS">Proprietary OS</option>
              <option value="iOS 10?">iOS 10?</option>
              <option value="Windows 10 Pro 64">Windows 10 Pro 64</option>
              <option value="Android 7.0">Android 7.0</option>
              <option value="Android 6.0">Android 6.0</option>
              <option value="Android 4.2">Android 4.2</option>
              <option value="Any">Any</option>
              <option value="Endless OS">Endless OS</option>
              <option value="iOS 11">iOS 11</option>
              <option value="Endless">Endless</option>
              <option value="macOS Sierra 10.12.1">macOS Sierra 10.12.1</option>
              <option value="MTK">MTK</option>
              <option value="Windows: Windows 8 / Windows 7 / Windows XP / Windows Vista/Mac OS X v10.6.8 and later">Windows: Windows 8 / Windows 7 / Windows XP / Windows Vista/Mac OS X v10.6.8 and later</option>
              <option value="0.3MP camera">0.3MP camera</option>
              <option value="4.2">4.2</option>
              <option value="4.2.2 Jelly Bean">4.2.2 Jelly Bean</option>
              <option value="4.4 Kitkat OS">4.4 Kitkat OS</option>
              <option value="4.4 Kitkat OS.">4.4 Kitkat OS.</option>
              <option value="4.4.2 (kitkat)">4.4.2 (kitkat)</option>
              <option value="4.4.2 Kitkat">4.4.2 Kitkat</option>
              <option value="Andoid Jellybean 4.2">Andoid Jellybean 4.2</option>
              <option value="Android  4.1 (Jellybean)">Android 4.1 (Jellybean)</option>
              <option value="Android  4.4.2 Kitkat">Android 4.4.2 Kitkat</option>
              <option value="Android  v4.4.2 KitKat">Android v4.4.2 KitKat</option>
              <option value="Android  v4.4.4 KitKat">Android v4.4.4 KitKat</option>
              <option value="Android  v5.0 Lollipop">Android v5.0 Lollipop</option>
              <option value="Android  v5.1 Lollipop">Android v5.1 Lollipop</option>
              <option value="Android &amp; iOS">Android &amp; iOS</option>
              <option value="Android (4.2)">Android (4.2)</option>
              <option value="Android (4.2)&nbsp;">Android (4.2)&nbsp;</option>
              <option value="Android (4.4.3)">Android (4.4.3)</option>
              <option value="Android (4.4.4, 4.4.2, 4.4)">Android (4.4.4, 4.4.2, 4.4)</option>
              <option value="Android 4.1 (Jelly Bean)">Android 4.1 (Jelly Bean)</option>
              <option value="Android 4.1 (Jelly Bean)&nbsp;">Android 4.1 (Jelly Bean)&nbsp;</option>
              <option value="Android 4.1 Jelly Bean&nbsp;">Android 4.1 Jelly Bean&nbsp;</option>
              <option value="Android 4.1+ (Jelly Bean)&nbsp;">Android 4.1+ (Jelly Bean)&nbsp;</option>
              <option value="Android 4.1.1">Android 4.1.1</option>
              <option value="Android 4.1.2 Jelly Bean&nbsp;">Android 4.1.2 Jelly Bean&nbsp;</option>
              <option value="Android 4.1.2, Jelly Bean">Android 4.1.2, Jelly Bean</option>
              <option value="Android 4.2 (Jelly Bean)">Android 4.2 (Jelly Bean)</option>
              <option value="Android 4.2 (Jelly Bean) + Emotion UI 2.0">Android 4.2 (Jelly Bean) + Emotion UI 2.0</option>
              <option value="Android 4.2 (Jelly Bean)&nbsp;">Android 4.2 (Jelly Bean)&nbsp;</option>
              <option value="Android 4.2 and onwards">Android 4.2 and onwards</option>
              <option value="Android 4.2 Jelly Bean&nbsp;">Android 4.2 Jelly Bean&nbsp;</option>
              <option value="Android 4.2, Jelly Bean">Android 4.2, Jelly Bean</option>
              <option value="Android 4.2.1 (Jelly Bean)">Android 4.2.1 (Jelly Bean)</option>
              <option value="Android 4.2.1 Jelly Bean&nbsp;">Android 4.2.1 Jelly Bean&nbsp;</option>
              <option value="Android 4.2.2 (jelly bean)">Android 4.2.2 (jelly bean)</option>
              <option value="Android 4.2.2 Jelly Bean&nbsp;">Android 4.2.2 Jelly Bean&nbsp;</option>
              <option value="Android 4.2.2 Kitkat">Android 4.2.2 Kitkat</option>
              <option value="Android 4.2.2, Jelly Bean">Android 4.2.2, Jelly Bean</option>
              <option value="Android 4.2.2&nbsp;">Android 4.2.2&nbsp;</option>
              <option value="Android 4.2&nbsp;">Android 4.2&nbsp;</option>
              <option value="Android 4.2&nbsp;Jelly Bean">Android 4.2&nbsp;Jelly Bean</option>
              <option value="Android 4.3">Android 4.3</option>
              <option value="Android 4.3 (Jelly Bean)">Android 4.3 (Jelly Bean)</option>
              <option value="Android 4.3 (Jelly Bean) + Emotion UI 1.6">Android 4.3 (Jelly Bean) + Emotion UI 1.6</option>
              <option value="Android 4.3 (Jelly Bean) + Huawei Emotion UI 1.6">Android 4.3 (Jelly Bean) + Huawei Emotion UI 1.6</option>
              <option value="Android 4.3 (Upgradable to Android 4.4)">Android 4.3 (Upgradable to Android 4.4)</option>
              <option value="Android 4.3 and onwards">Android 4.3 and onwards</option>
              <option value="Android 4.3 Jelly Bean (Upgradable to Android 4.4)">Android 4.3 Jelly Bean (Upgradable to Android 4.4)</option>
              <option value="Android 4.3 Jelly Bean&nbsp;">Android 4.3 Jelly Bean&nbsp;</option>
              <option value="Android 4.3 optimized with MIUI version 5">Android 4.3 optimized with MIUI version 5</option>
              <option value="Android 4.3(Jelly Bean) (Upgredable)">Android 4.3(Jelly Bean) (Upgredable)</option>
              <option value="Android 4.3(Jelly Bean) + Emotion UI 1.6">Android 4.3(Jelly Bean) + Emotion UI 1.6</option>
              <option value="Android 4.3+Emotion UI 2.0 Lite">Android 4.3+Emotion UI 2.0 Lite</option>
              <option value="Android 4.3, Jelly Bean">Android 4.3, Jelly Bean</option>
              <option value="Android 4.4">Android 4.4</option>
              <option value="Android 4.4 (Kit Kat)&nbsp;">Android 4.4 (Kit Kat)&nbsp;</option>
              <option value="Android 4.4 (Kit-Kat)&nbsp;">Android 4.4 (Kit-Kat)&nbsp;</option>
              <option value="Android 4.4 (MIUI V5) OS system">Android 4.4 (MIUI V5) OS system</option>
              <option value="Android 4.4 + Windows 8.1">Android 4.4 + Windows 8.1</option>
              <option value="Android 4.4 with HTC Sense HTC BlinkFeed">Android 4.4 with HTC Sense HTC BlinkFeed</option>
              <option value="Android 4.4( KitKat)">Android 4.4( KitKat)</option>
              <option value="Android 4.4(Kitkat)">Android 4.4(Kitkat)</option>
              <option value="Android 4.4, KitKat">Android 4.4, KitKat</option>
              <option value="Android 4.4.2">Android 4.4.2</option>
              <option value="Android 4.4.2 (32bit)">Android 4.4.2 (32bit)</option>
              <option value="Android 4.4.2 (KitKat)">Android 4.4.2 (KitKat)</option>
              <option value="Android 4.4.2 Ice Cream Sandwich">Android 4.4.2 Ice Cream Sandwich</option>
              <option value="Android 4.4.2 Kit-Kat">Android 4.4.2 Kit-Kat</option>
              <option value="Android 4.4.3">Android 4.4.3</option>
              <option value="Android 4.4.3 (kitkat)">Android 4.4.3 (kitkat)</option>
              <option value="Android 4.4.4 Jelly bean">Android 4.4.4 Jelly bean</option>
              <option value="Android 4.4/HUAWEI Emotion UI 3.0">Android 4.4/HUAWEI Emotion UI 3.0</option>
              <option value="Android 4.4‎.‎2 Kitikat">Android 4.4‎.‎2 Kitikat</option>
              <option value="Android 5, Lollipop">Android 5, Lollipop</option>
              <option value="Android 5.0">Android 5.0</option>
              <option value="Android 5.0 (Lollipop)">Android 5.0 (Lollipop)</option>
              <option value="Android 5.0.2 (Lollipop), upgradable to 6.0 (Marshmallow)">Android 5.0.2 (Lollipop), upgradable to 6.0 (Marshmallow)</option>
              <option value="Android 5.1 (Lollipop)">Android 5.1 (Lollipop)</option>
              <option value="Android 5.1 (Lollipop), upgradable to 6.0 (Marshmallow)">Android 5.1 (Lollipop), upgradable to 6.0 (Marshmallow)</option>
              <option value="Android 6.0 (Marshmallow)">Android 6.0 (Marshmallow)</option>
              <option value="Android 6.0 (Marshmallow) or 5.0 (Lollipop)">Android 6.0 (Marshmallow) or 5.0 (Lollipop)</option>
              <option value="Android 6.0 Marshmallow with MIUI V8">Android 6.0 Marshmallow with MIUI V8</option>
              <option value="Android 6.0 Operating">Android 6.0 Operating</option>
              <option value="Android 6.0 OS">Android 6.0 OS</option>
              <option value="Android 6.0.1 (Marshmallow)">Android 6.0.1 (Marshmallow)</option>
              <option value="Android 6.1">Android 6.1</option>
              <option value="Android 64bits">Android 64bits</option>
              <option value="Android 7.0 (Nougat)">Android 7.0 (Nougat)</option>
              <option value="Android 7.0 Nougat with EMUI 5.0">Android 7.0 Nougat with EMUI 5.0</option>
              <option value="Android 7.0 Nougat with XOS">Android 7.0 Nougat with XOS</option>
              <option value="Android 7.0+EMUI5.1">Android 7.0+EMUI5.1</option>
              <option value="Android 7.1 (Nougat)">Android 7.1 (Nougat)</option>
              <option value="Android 7.1 (Nougat) with MIUI V8">Android 7.1 (Nougat) with MIUI V8</option>
              <option value="Android 7.1.1 (Nougat)">Android 7.1.1 (Nougat)</option>
              <option value="Android 7.1.2 (Nougat)">Android 7.1.2 (Nougat)</option>
              <option value="Android 8.0 (Oreo)">Android 8.0 (Oreo)</option>
              <option title="Android 8.0 Oreo with&nbsp;EMUI 8.0">Android 8.0 Oreo with&nbsp;EMUI 8.0</option>
              <option value="Android Jelly Bean 4.1">Android Jelly Bean 4.1</option>
              <option value="Android Jelly Bean 4.2">Android Jelly Bean 4.2</option>
              <option value="Android Jelly Bean 4.2.2">Android Jelly Bean 4.2.2</option>
              <option value="Android Jelly bean 4.2.2&nbsp;">Android Jelly bean 4.2.2&nbsp;</option>
              <option value="Android Jelly bean 4.2.3">Android Jelly bean 4.2.3</option>
              <option value="Android Jelly Bean 4.3">Android Jelly Bean 4.3</option>
              <option value="Android Jelly Bean 4.3&nbsp;">Android Jelly Bean 4.3&nbsp;</option>
              <option value="Android Jellybean 4.2">Android Jellybean 4.2</option>
              <option value="Android Jellybean 4.2.2">Android Jellybean 4.2.2</option>
              <option value="Android Jellybean 4.2.2&nbsp;">Android Jellybean 4.2.2&nbsp;</option>
              <option value="Android JellyBean 4.3">Android JellyBean 4.3</option>
              <option value="Android Kitkat 4.4.2">Android Kitkat 4.4.2</option>
              <option value="Android KitKat 4.4.2 (Upgradable to Lollipop)">Android KitKat 4.4.2 (Upgradable to Lollipop)</option>
              <option value="Android Kitkat 4.4.3">Android Kitkat 4.4.3</option>
              <option value="Android KitKat v4.4">Android KitKat v4.4</option>
              <option value="Android Lolipop">Android Lolipop</option>
              <option value="Android Lolipop 5.1">Android Lolipop 5.1</option>
              <option value="Android Lollipop 5.0">Android Lollipop 5.0</option>
              <option value="Android Lollipop 5.1">Android Lollipop 5.1</option>
              <option value="Android Marshmallow">Android Marshmallow</option>
              <option value="Android Marshmallow 6.0">Android Marshmallow 6.0</option>
              <option value="Android Marshmallow 6.0.1">Android Marshmallow 6.0.1</option>
              <option value="Android Marshmallow v6.0">Android Marshmallow v6.0</option>
              <option value="Android Marshmallow v6.0 (EMUI 4.1)">Android Marshmallow v6.0 (EMUI 4.1)</option>
              <option value="Android Nougat 7.0 &nbsp;">Android Nougat 7.0 &nbsp;</option>
              <option value="Android One">Android One</option>
              <option value="Android Operating System">Android Operating System</option>
              <option value="Android OS (Jelly Bean)">Android OS (Jelly Bean)</option>
              <option value="Android OS 5.0 Lollipop">Android OS 5.0 Lollipop</option>
              <option value="Android OS 5.1.1(Lollipop)">Android OS 5.1.1(Lollipop)</option>
              <option value="Android OS 6.0">Android OS 6.0</option>
              <option value="Android OS KitKat">Android OS KitKat</option>
              <option value="Android OS v4.4.2(KitKat)">Android OS v4.4.2(KitKat)</option>
              <option value="Android OS v5.1 (Lollipop)">Android OS v5.1 (Lollipop)</option>
              <option value="Android OS v6.0.1 Marshmallow">Android OS v6.0.1 Marshmallow</option>
              <option value="Android OS, v2.3 (Gingerbread)&nbsp;">Android OS, v2.3 (Gingerbread)&nbsp;</option>
              <option value="Android OS, v4.0.4 (Ice Cream Sandwich), 4.3 (Jelly Bean)">Android OS, v4.0.4 (Ice Cream Sandwich), 4.3 (Jelly Bean)</option>
              <option value="Android OS, v4.1 (Jelly Bean), upgradable to v4.2 (Jelly Bean)">Android OS, v4.1 (Jelly Bean), upgradable to v4.2 (Jelly Bean)</option>
              <option value="Android OS, v4.1 (Jelly Bean), upgradable to v4.2.2 (Jelly Bean)">Android OS, v4.1 (Jelly Bean), upgradable to v4.2.2 (Jelly Bean)</option>
              <option value="Android OS, v4.1 (Jelly Bean), upgradable to v4.2.2 (Jelly Bean)&nbsp;">Android OS, v4.1 (Jelly Bean), upgradable to v4.2.2 (Jelly Bean)&nbsp;</option>
              <option value="Android OS, v4.1.2  Jelly Bean">Android OS, v4.1.2 Jelly Bean</option>
              <option value="Android OS, v4.1.2 (Jelly Bean), upgradаble to v4.4.2 (KitKat)">Android OS, v4.1.2 (Jelly Bean), upgradаble to v4.4.2 (KitKat)</option>
              <option value="Android OS, v4.2">Android OS, v4.2</option>
              <option value="Android OS, v4.2 (Jelly Bean), upgradable to v4.4 (KitKat)">Android OS, v4.2 (Jelly Bean), upgradable to v4.4 (KitKat)</option>
              <option value="Android OS, v4.2 (Jelly Bean), upgradable to v4.4.2 (KitKat)">Android OS, v4.2 (Jelly Bean), upgradable to v4.4.2 (KitKat)</option>
              <option value="Android OS, v4.2 (Jelly Bean)&nbsp;">Android OS, v4.2 (Jelly Bean)&nbsp;</option>
              <option value="Android OS, v4.2.1 (Jelly Bean)">Android OS, v4.2.1 (Jelly Bean)</option>
              <option value="Android OS, v4.2.1 (Jelly Bean)&nbsp;">Android OS, v4.2.1 (Jelly Bean)&nbsp;</option>
              <option value="Android OS, v4.2.2 (Jelly Bean), planned upgrade to v4.4 (KitKat)">Android OS, v4.2.2 (Jelly Bean), planned upgrade to v4.4 (KitKat)</option>
              <option value="Android OS, v4.2.2 (Jelly Bean), up-gradable to v4.4.2 (KitKat)">Android OS, v4.2.2 (Jelly Bean), up-gradable to v4.4.2 (KitKat)</option>
              <option value="Android OS, v4.2.2 (Jelly Bean), upgradable to v4.4.2 (KitKat)">Android OS, v4.2.2 (Jelly Bean), upgradable to v4.4.2 (KitKat)</option>
              <option value="Android OS, v4.2.2 (Jelly Bean)&nbsp;">Android OS, v4.2.2 (Jelly Bean)&nbsp;</option>
              <option value="Android OS, v4.2.2 Jelly Bean">Android OS, v4.2.2 Jelly Bean</option>
              <option value="Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat)">Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat)</option>
              <option value="Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat), upgradable to v5.0 (Lollipop)">Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat), upgradable to v5.0 (Lollipop)</option>
              <option value="Android OS, v4.3 (Jelly Bean)&nbsp;">Android OS, v4.3 (Jelly Bean)&nbsp;</option>
              <option value="Android OS, v4.3 Jelly Bean">Android OS, v4.3 Jelly Bean</option>
              <option value="Android OS, v4.4">Android OS, v4.4</option>
              <option value="Android OS, v4.4 (Kit Kat)">Android OS, v4.4 (Kit Kat)</option>
              <option value="Android OS, v4.4 (KitKat), upgradable to v4.4.3 (KitKat)">Android OS, v4.4 (KitKat), upgradable to v4.4.3 (KitKat)</option>
              <option value="Android OS, v4.4 (KitKat), upgradable to v4.4.4 (KitKat)">Android OS, v4.4 (KitKat), upgradable to v4.4.4 (KitKat)</option>
              <option value="Android OS, v4.4 (KitKat), upgradable to v5.0.2 (Lollipop)">Android OS, v4.4 (KitKat), upgradable to v5.0.2 (Lollipop)</option>
              <option value="Android OS, v4.4 (KitKat)&nbsp;">Android OS, v4.4 (KitKat)&nbsp;</option>
              <option value="Android OS, v4.4.2 (Kit Kat)">Android OS, v4.4.2 (Kit Kat)</option>
              <option value="Android OS, v4.4.2 (KitKat) (Upgredable)">Android OS, v4.4.2 (KitKat) (Upgredable)</option>
              <option value="Android OS, v4.4.2 (KitKat), upgradable to v5.0.2 (Lollipop)">Android OS, v4.4.2 (KitKat), upgradable to v5.0.2 (Lollipop)</option>
              <option value="Android OS, v4.4.2 (KitKat)&nbsp;">Android OS, v4.4.2 (KitKat)&nbsp;</option>
              <option value="Android OS, v4.4.2 Jelly Bean">Android OS, v4.4.2 Jelly Bean</option>
              <option value="Android OS, v4.4.2 KitKat">Android OS, v4.4.2 KitKat</option>
              <option value="Android OS, v4.4.2 KitKat, upgradable to v5.0 (Lollipop)">Android OS, v4.4.2 KitKat, upgradable to v5.0 (Lollipop)</option>
              <option value="Android OS, v4.4.3 (KitKat)">Android OS, v4.4.3 (KitKat)</option>
              <option value="Android OS, v4.4.4 (KitKat)">Android OS, v4.4.4 (KitKat)</option>
              <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.0 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.0 (Lollipop)</option>
              <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.0.1 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.0.1 (Lollipop)</option>
              <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.0.2 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.0.2 (Lollipop)</option>
              <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.0.2/v5.1.1 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.0.2/v5.1.1 (Lollipop)</option>
              <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.1 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.1 (Lollipop)</option>
              <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.1.1 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.1.1 (Lollipop)</option>
              <option value="Android OS, v4.4.4 (KitKat), v5.0.2 (Lollipop), planned upgrade to v5.1 (Lollipop)">Android OS, v4.4.4 (KitKat), v5.0.2 (Lollipop), planned upgrade to v5.1 (Lollipop)</option>
              <option value="Android OS, v4.4.x (KitKat)">Android OS, v4.4.x (KitKat)</option>
              <option value="Android OS, v5.0 (Lolipop)">Android OS, v5.0 (Lolipop)</option>
              <option value="Android OS, v5.0 (Lollipop)">Android OS, v5.0 (Lollipop)</option>
              <option value="Android OS, v5.0 (Lollipop), planned upgrade to v6.0 (Marshmallow)">Android OS, v5.0 (Lollipop), planned upgrade to v6.0 (Marshmallow)</option>
              <option value="Android OS, v5.0 (Lollipop), upgradable to v5.1.1 (Lollipop)">Android OS, v5.0 (Lollipop), upgradable to v5.1.1 (Lollipop)</option>
              <option value="Android OS, v5.0.1 (Lollipop)">Android OS, v5.0.1 (Lollipop)</option>
              <option value="Android OS, v5.0.1 (Lollipop), upgradable to v5.1.1 (Lollipop)">Android OS, v5.0.1 (Lollipop), upgradable to v5.1.1 (Lollipop)</option>
              <option value="Android OS, v5.0.2 (Lollipop)">Android OS, v5.0.2 (Lollipop)</option>
              <option value="Android OS, v5.1 (Lollipop)">Android OS, v5.1 (Lollipop)</option>
              <option value="Android OS, v5.1 Lollipop">Android OS, v5.1 Lollipop</option>
              <option value="Android OS, v5.1.1 (Lollipop)">Android OS, v5.1.1 (Lollipop)</option>
              <option value="Android OS, v6.0 (Marshmallow)">Android OS, v6.0 (Marshmallow)</option>
              <option value="Android OS, v6.0 Marshmallow">Android OS, v6.0 Marshmallow</option>
              <option value="Android OS- v4.2 (Jelly Bean)">Android OS- v4.2 (Jelly Bean)</option>
              <option value="Android Smart">Android Smart</option>
              <option value="Android TM 6.0 Marshmallow">Android TM 6.0 Marshmallow</option>
              <option value="Android v4.1.2 Jelly Bean">Android v4.1.2 Jelly Bean</option>
              <option value="Android v4.2 Jelly Bean">Android v4.2 Jelly Bean</option>
              <option value="Android v4.2(JellyBean)">Android v4.2(JellyBean)</option>
              <option value="Android v4.4 (Kitkat)">Android v4.4 (Kitkat)</option>
              <option value="Android V4.4.2">Android V4.4.2</option>
              <option value="Android v4.4.2 (Jelly Bean)">Android v4.4.2 (Jelly Bean)</option>
              <option value="Android v4.4.2 (KitKat)">Android v4.4.2 (KitKat)</option>
              <option value="Android v4.4.2 (KitKat) Upgradable to Android Lollipop">Android v4.4.2 (KitKat) Upgradable to Android Lollipop</option>
              <option value="Android v4.4.2 KitKat">Android v4.4.2 KitKat</option>
              <option value="Android v4.4.4 KitKat">Android v4.4.4 KitKat</option>
              <option value="Android v5.0 Lollipop">Android v5.0 Lollipop</option>
              <option value="Android v5.0.1 Lollipop">Android v5.0.1 Lollipop</option>
              <option value="Android v5.0.2 Lollipop">Android v5.0.2 Lollipop</option>
              <option value="Android v5.1 (Lollipop)">Android v5.1 (Lollipop)</option>
              <option value="Android v5.1 Lollipop">Android v5.1 Lollipop</option>
              <option value="Android v5.1.1 (Color OS)">Android v5.1.1 (Color OS)</option>
              <option value="Android v5.1.1 (Lollipop)">Android v5.1.1 (Lollipop)</option>
              <option value="Android v5.1.1 Lollipop">Android v5.1.1 Lollipop</option>
              <option value="Android v6.0">Android v6.0</option>
              <option value="Android v6.0 (Marshmallow)">Android v6.0 (Marshmallow)</option>
              <option value="Android v6.0.1 (Marshmallow)">Android v6.0.1 (Marshmallow)</option>
              <option value="Android Wear">Android Wear</option>
              <option value="Android Wear OS">Android Wear OS</option>
              <option value="Android with HTC Sense">Android with HTC Sense</option>
              <option value="Android, 4.2 (Jelly Bean)">Android, 4.2 (Jelly Bean)</option>
              <option value="Android, iOS">Android, iOS</option>
              <option value="Android, v4.2.2 (Jelly Bean)">Android, v4.2.2 (Jelly Bean)</option>
              <option value="Android,IOS">Android,IOS</option>
              <option value="Android- 4.1.2 , Jelly Bean">Android- 4.1.2 , Jelly Bean</option>
              <option value="Android- 4.2">Android- 4.2</option>
              <option value="Android- 4.2.2 , Jelly Bean">Android- 4.2.2 , Jelly Bean</option>
              <option value="Android-4.2 Jelly Bean">Android-4.2 Jelly Bean</option>
              <option value="Android-4.4 Kitkat">Android-4.4 Kitkat</option>
              <option value="Android-4.4 Kitkat&nbsp;">Android-4.4 Kitkat&nbsp;</option>
              <option value="Android-v4.4 Kitkat">Android-v4.4 Kitkat</option>
              <option value="Android4.0">Android4.0</option>
              <option value="Android4.4">Android4.4</option>
              <option value="Android7.0 + EMUI5.1">Android7.0 + EMUI5.1</option>
              <option value="Android7.0+EMUI5.1">Android7.0+EMUI5.1</option>
              <option value="AndroidTM 4.2(Jelly Bean)">AndroidTM 4.2(Jelly Bean)</option>
              <option value="AndroidTM 4.2.2">AndroidTM 4.2.2</option>
              <option value="AndroidTM 4.4">AndroidTM 4.4</option>
              <option value="AndroidTM 6.0 Marshmallow">AndroidTM 6.0 Marshmallow</option>
              <option value="AndroidTM 6.0+EMUI 4.1">AndroidTM 6.0+EMUI 4.1</option>
              <option value="AndroidTM Marshmallow">AndroidTM Marshmallow</option>
              <option value="AndroidTM&nbsp;4.2(Jelly Bean)">AndroidTM&nbsp;4.2(Jelly Bean)</option>
              <option value="AndroidTM&nbsp;4.2.2">AndroidTM&nbsp;4.2.2</option>
              <option value="Android&nbsp;4.4( KitKat)">Android&nbsp;4.4( KitKat)</option>
              <option value="Android&nbsp;4.4, Kit-Kat">Android&nbsp;4.4, Kit-Kat</option>
              <option value="Android&nbsp;5.0 (Lollipop)">Android&nbsp;5.0 (Lollipop)</option>
              <option value="Android&nbsp;5.0(Lollipop)">Android&nbsp;5.0(Lollipop)</option>
              <option value="Android™ 4.2.2 (Jelly Bean)">Android™ 4.2.2 (Jelly Bean)</option>
              <option value="Android™ 4.3">Android™ 4.3</option>
              <option value="Android™ 4.4.2 KitKat / Huawei Emotion UI 3.0">Android™ 4.4.2 KitKat / Huawei Emotion UI 3.0</option>
              <option value="Android™ 5.0, Lollipop">Android™ 5.0, Lollipop</option>
              <option value="Android™ M">Android™ M</option>
              <option value="Bar GSM900/DCS1800MHz">Bar GSM900/DCS1800MHz</option>
              <option value="BlackBerry 10 OS, upgradable to v10.1">BlackBerry 10 OS, upgradable to v10.1</option>
              <option value="BlackBerry OS 10.2, upgradable to v10.3.1">BlackBerry OS 10.2, upgradable to v10.3.1</option>
              <option value="BlackBerry OS 10.2.1, upgradable to v10.3.1">BlackBerry OS 10.2.1, upgradable to v10.3.1</option>
              <option value="BlackBerry OS 10.3, upgradable to v10.3.1">BlackBerry OS 10.3, upgradable to v10.3.1</option>
              <option value="BlackBerry OS 10.3.1">BlackBerry OS 10.3.1</option>
              <option value="Bluetooth Version 3.0">Bluetooth Version 3.0</option>
              <option value="China Operating System">China Operating System</option>
              <option value="ColorOS 3.2, based on Android 7.1">ColorOS 3.2, based on Android 7.1</option>
              <option value="Cyanogen 11S based on Android 4.4">Cyanogen 11S based on Android 4.4</option>
              <option value="Desktop PC, IPHONE / IPAD, TV">Desktop PC, IPHONE / IPAD, TV</option>
              <option value="Feature Phone">Feature Phone</option>
              <option value="Firefox v1.3">Firefox v1.3</option>
              <option value="Free Dos">Free Dos</option>
              <option value="Free DOS / Ubuntu Linux 14.04 SP1">Free DOS / Ubuntu Linux 14.04 SP1</option>
              <option value="Free DOS 2.0">Free DOS 2.0</option>
              <option value="Free Dose">Free Dose</option>
              <option value="Free-DOS">Free-DOS</option>
              <option value="FreeDOS 2.0">FreeDOS 2.0</option>
              <option value="Genuine Windows 10">Genuine Windows 10</option>
              <option value="Genuine windows 7 Pro">Genuine windows 7 Pro</option>
              <option value="Genuine Windows 7 Professional">Genuine Windows 7 Professional</option>
              <option value="Genuine Windows 8">Genuine Windows 8</option>
              <option value="Genuine Windows 8.1">Genuine Windows 8.1</option>
              <option value="Genuine Windows 8.1 (64-bit)">Genuine Windows 8.1 (64-bit)</option>
              <option value="Genuine windows 8.1 64Bit">Genuine windows 8.1 64Bit</option>
              <option value="Genuine Windows 8.1 Professional-64bit">Genuine Windows 8.1 Professional-64bit</option>
              <option value="Genuine Windows 8.1, 64 Bit">Genuine Windows 8.1, 64 Bit</option>
              <option value="Google Android 4.2.2 &nbsp;">Google Android 4.2.2 &nbsp;</option>
              <option value="Google Android 4.4 (Kitkat)">Google Android 4.4 (Kitkat)</option>
              <option value="Google Android™ 5.0 (Lollipop)">Google Android™ 5.0 (Lollipop)</option>
              <option value="HDMI, USB x 2.0">HDMI, USB x 2.0</option>
              <option value="Hydrogen OS based on Android 5.1 (Lollipop)">Hydrogen OS based on Android 5.1 (Lollipop)</option>
              <option value="iMac">iMac</option>
              <option value="iOS 5, upgradable to iOS 7.1.2, upgradable to iOS 8&nbsp;">iOS 5, upgradable to iOS 7.1.2, upgradable to iOS 8&nbsp;</option>
              <option value="iOS 6, upgradable to iOS 6.1.4, iOS 7.0.3&nbsp;">iOS 6, upgradable to iOS 6.1.4, iOS 7.0.3&nbsp;</option>
              <option value="iOS 6, upgradable to iOS 7.1.1, planned upgrade to iOS 8">iOS 6, upgradable to iOS 7.1.1, planned upgrade to iOS 8</option>
              <option value="iOS 7.0">iOS 7.0</option>
              <option value="IOS 7.0&nbsp;">IOS 7.0&nbsp;</option>
              <option value="IOS 7.1">IOS 7.1</option>
              <option value="IOS 7.2">IOS 7.2</option>
              <option value="IOS 7.3">IOS 7.3</option>
              <option value="IOS 7.7">IOS 7.7</option>
              <option value="IOS 7.8">IOS 7.8</option>
              <option value="iOS 8, upgradable to iOS 11.1">iOS 8, upgradable to iOS 11.1</option>
              <option value="iOS 8.1">iOS 8.1</option>
              <option value="iOS 8.1, upgradable to iOS 8.3">iOS 8.1, upgradable to iOS 8.3</option>
              <option value="iOS 9, upgradable to iOS 11.2">iOS 9, upgradable to iOS 11.2</option>
              <option value="IOS and Android">IOS and Android</option>
              <option value="iOS, Android">iOS, Android</option>
              <option value="iOS10">iOS10</option>
              <option value="iOS&nbsp;4">iOS&nbsp;4</option>
              <option value="iPhone OS 4, upgradable to iOS 5.1">iPhone OS 4, upgradable to iOS 5.1</option>
              <option value="Jelly Bean (Android 4.2.2)">Jelly Bean (Android 4.2.2)</option>
              <option value="Jelly Bean v2.3.5">Jelly Bean v2.3.5</option>
              <option value="Kitkat 4.4.2">Kitkat 4.4.2</option>
              <option value="KitKat v4.4">KitKat v4.4</option>
              <option value="KitKat v4.4.2">KitKat v4.4.2</option>
              <option value="KitKat v4.4.4">KitKat v4.4.4</option>
              <option value="Linpus Linux">Linpus Linux</option>
              <option value="Linpus™ Linux®">Linpus™ Linux®</option>
              <option value="Linux OS">Linux OS</option>
              <option value="Lollipop v5.0">Lollipop v5.0</option>
              <option value="Lollipop v5.0.1">Lollipop v5.0.1</option>
              <option value="Lollipop v5.1">Lollipop v5.1</option>
              <option value="Lollipop v5.1.1">Lollipop v5.1.1</option>
              <option value="Mac">Mac</option>
              <option value="Mac OS 10.5.8 sau o versiune ulterioara  Mac OS 10.6+">Mac OS 10.5.8 sau o versiune ulterioara Mac OS 10.6+</option>
              <option value="Mac OS 9">Mac OS 9</option>
              <option value="Mac OS Sierra">Mac OS Sierra</option>
              <option value="Mac OS Sierra 10.12">Mac OS Sierra 10.12</option>
              <option value="Mac OS X 10.10 or 10.11">Mac OS X 10.10 or 10.11</option>
              <option value="Mac OS X 10.10 Yosemite">Mac OS X 10.10 Yosemite</option>
              <option value="Mac OS X 10.11 El Capitan">Mac OS X 10.11 El Capitan</option>
              <option value="Mac OS X El Capitan">Mac OS X El Capitan</option>
              <option value="Mac OS X Mountain Lion 10.8">Mac OS X Mountain Lion 10.8</option>
              <option value="Mac OS X Mountain Lion 10.8 &amp; windows supported">Mac OS X Mountain Lion 10.8 &amp; windows supported</option>
              <option value="Mac OS X Mountain Lion v10.8 &amp; Windows supported">Mac OS X Mountain Lion v10.8 &amp; Windows supported</option>
              <option value="Mac OS X Mountain Lion v10.8 &amp;amp">Mac OS X Mountain Lion v10.8 &amp;amp</option>
              <option value="Mac OS X Mountain Lion10.8">Mac OS X Mountain Lion10.8</option>
              <option value="Mac OS X Yosemite">Mac OS X Yosemite</option>
              <option value="Mac OSX Lion &amp;amp; Windows Both supported">Mac OSX Lion &amp;amp; Windows Both supported</option>
              <option value="Mac OSX Mountain Lion 10.8">Mac OSX Mountain Lion 10.8</option>
              <option value="Mac OSX Yosemite  10.10">Mac OSX Yosemite 10.10</option>
              <option value="Mac OSX Yosemite 10.10">Mac OSX Yosemite 10.10</option>
              <option value="macOS">macOS</option>
              <option value="macOS High Sierra">macOS High Sierra</option>
              <option value="MacOS Sierra">MacOS Sierra</option>
              <option value="Marshmallow 6.0">Marshmallow 6.0</option>
              <option value="Marshmallow v6.0">Marshmallow v6.0</option>
              <option value="Marshmallow v6.0.1">Marshmallow v6.0.1</option>
              <option value="MeeGo OS">MeeGo OS</option>
              <option value="MeeGo OS, v1.2 Harmattan">MeeGo OS, v1.2 Harmattan</option>
              <option value="Microsoft Surface Pro 10.6 Windows 8 Tablet">Microsoft Surface Pro 10.6 Windows 8 Tablet</option>
              <option value="Microsoft Windows 10 Home(Genuine)">Microsoft Windows 10 Home(Genuine)</option>
              <option value="Microsoft Windows 10(Genuine)">Microsoft Windows 10(Genuine)</option>
              <option value="Microsoft Windows 7 Microsoft Windows 8 Microsoft Windows 8.1 Microsoft Windows 10 Mac OS 9.0 or lat">Microsoft Windows 7 Microsoft Windows 8 Microsoft Windows 8.1 Microsoft Windows 10 Mac OS 9.0 or lat</option>
              <option value="Microsoft Windows 7 Professional 64-bit">Microsoft Windows 7 Professional 64-bit</option>
              <option value="Microsoft Windows 8 / 7 / Vista / XP / 2000 / ME / 98">Microsoft Windows 8 / 7 / Vista / XP / 2000 / ME / 98</option>
              <option value="Microsoft Windows 8.1 64-bit">Microsoft Windows 8.1 64-bit</option>
              <option value="Microsoft Windows 8.1 with Bing">Microsoft Windows 8.1 with Bing</option>
              <option value="Microsoft Windows Phone 7.5 Mango, upgradable to v7.8">Microsoft Windows Phone 7.5 Mango, upgradable to v7.8</option>
              <option value="Microsoft Windows Phone 8, upgradeable to v8.1">Microsoft Windows Phone 8, upgradeable to v8.1</option>
              <option value="Microsoft Windows Phone 8, upgradeable to v8.1, planned upgrade to Windows 10">Microsoft Windows Phone 8, upgradeable to v8.1, planned upgrade to Windows 10</option>
              <option value="Microsoft Windows Phone 8, upgradeable to v8.1, planned upgrade to Windows 14">Microsoft Windows Phone 8, upgradeable to v8.1, planned upgrade to Windows 14</option>
              <option value="Microsoft Windows Phone 8, upgradeable to v8.2">Microsoft Windows Phone 8, upgradeable to v8.2</option>
              <option value="Microsoft Windows Phone 8, upgradeable to v8.5">Microsoft Windows Phone 8, upgradeable to v8.5</option>
              <option value="Microsoft Windows Phone 8, upgradeable to WP8, upgradeable to v8.1">Microsoft Windows Phone 8, upgradeable to WP8, upgradeable to v8.1</option>
              <option value="Microsoft Windows Phone 8.1, planned upgrade to Windows 10">Microsoft Windows Phone 8.1, planned upgrade to Windows 10</option>
              <option value="Microsoft Windows XP, Vista, 7, 8 Mac OS X 10.8.2">Microsoft Windows XP, Vista, 7, 8 Mac OS X 10.8.2</option>
              <option value="Microsoft Windows XP,Vista, 7, 8.1, 8">Microsoft Windows XP,Vista, 7, 8.1, 8</option>
              <option value="Microsoft Windows® 7 /8 / Vista / XP / 2000 / ME / 98">Microsoft Windows® 7 /8 / Vista / XP / 2000 / ME / 98</option>
              <option value="MIUI 6 based on Android L">MIUI 6 based on Android L</option>
              <option value="MIUI 7.0 (based on Android 6.0 Marshmallow)">MIUI 7.0 (based on Android 6.0 Marshmallow)</option>
              <option value="MIUI V5">MIUI V5</option>
              <option value="MIUI V6 based on Android 4.4.4 KitKat">MIUI V6 based on Android 4.4.4 KitKat</option>
              <option value="Nokia Asha platform 1.1.1">Nokia Asha platform 1.1.1</option>
              <option value="Nokia Asha software platform 1.0, upgradable to v1.4">Nokia Asha software platform 1.0, upgradable to v1.4</option>
              <option value="Nokia Asha software platform 1.1.1, upgradable to v1.4">Nokia Asha software platform 1.1.1, upgradable to v1.4</option>
              <option value="Nokia Asha software platform 1.2, upgradable to v1.4">Nokia Asha software platform 1.2, upgradable to v1.4</option>
              <option value="Nougat v7.0">Nougat v7.0</option>
              <option value="Nucleas">Nucleas</option>
              <option value="OS 4.4.2">OS 4.4.2</option>
              <option value="OS 6.1">OS 6.1</option>
              <option value="OS 7.1">OS 7.1</option>
              <option value="OS iOS 11, upgradable to iOS 11.0.2">OS iOS 11, upgradable to iOS 11.0.2</option>
              <option value="OS X Mavericks">OS X Mavericks</option>
              <option value="OS: Android 4.4 Kitkat">OS: Android 4.4 Kitkat</option>
              <option value="Oxygen OS">Oxygen OS</option>
              <option value="OxygenOS based on Android 5.1.1">OxygenOS based on Android 5.1.1</option>
              <option value="OxygenOS based on Android 7.1.1 Nougat">OxygenOS based on Android 7.1.1 Nougat</option>
              <option value="PlayMemories Home">PlayMemories Home</option>
              <option value="PlayStation 4 system software">PlayStation 4 system software</option>
              <option value="preinstalled macOS">preinstalled macOS</option>
              <option value="Preloaded Windows 10 Home">Preloaded Windows 10 Home</option>
              <option value="Preloaded Windows10 Home 64">Preloaded Windows10 Home 64</option>
              <option value="Real JAVA">Real JAVA</option>
              <option value="Router OS">Router OS</option>
              <option value="RouterOS v6 (64bit)">RouterOS v6 (64bit)</option>
              <option value="Series 40">Series 40</option>
              <option value="Symbian Anna OS, upgradeable to Nokia Belle OS">Symbian Anna OS, upgradeable to Nokia Belle OS</option>
              <option value="Symbian OS 9.2, Series 60 v3.1 UI">Symbian OS 9.2, Series 60 v3.1 UI</option>
              <option value="Symbian^3 OS, upgradable to Nokia Belle OS">Symbian^3 OS, upgradable to Nokia Belle OS</option>
              <option value="Tizen">Tizen</option>
              <option value="Tizen OS">Tizen OS</option>
              <option value="Ubuntu Linux 12.04 / Windows">Ubuntu Linux 12.04 / Windows</option>
              <option value="Ubuntu Linux 12.04 /FreeDOS">Ubuntu Linux 12.04 /FreeDOS</option>
              <option value="webOS">webOS</option>
              <option value="webOS 2.0">webOS 2.0</option>
              <option value="Win 10">Win 10</option>
              <option value="Win 10 Home Edition">Win 10 Home Edition</option>
              <option value="Win 10 Pro">Win 10 Pro</option>
              <option value="Win 8 64 Bit">Win 8 64 Bit</option>
              <option value="Win 8 Pro 64 bit">Win 8 Pro 64 bit</option>
              <option value="Win 8.1">Win 8.1</option>
              <option value="WIN 8.1 PRO">WIN 8.1 PRO</option>
              <option value="Win-10">Win-10</option>
              <option value="Win-10 Home">Win-10 Home</option>
              <option value="Win10">Win10</option>
              <option value="Win10 Home">Win10 Home</option>
              <option value="Win10 Home Geniune Version">Win10 Home Geniune Version</option>
              <option value="Win8.1">Win8.1</option>
              <option value="Win8.1 Home Geniune Version">Win8.1 Home Geniune Version</option>
              <option value="Win9X/ ME/ XP/ VISTA/ W7">Win9X/ ME/ XP/ VISTA/ W7</option>
              <option value="Windos 10">Windos 10</option>
              <option value="Window 10">Window 10</option>
              <option value="Windows + Android">Windows + Android</option>
              <option value="Windows + Mac">Windows + Mac</option>
              <option value="Windows / Mac / Linux">Windows / Mac / Linux</option>
              <option value="Windows 10 Home">Windows 10 Home</option>
              <option value="Windows 10 Home 64-bit English">Windows 10 Home 64-bit English</option>
              <option value="Windows 10 Home Edition">Windows 10 Home Edition</option>
              <option value="Windows 10 Home Licensed Version">Windows 10 Home Licensed Version</option>
              <option value="Windows 10 Licensed">Windows 10 Licensed</option>
              <option value="Windows 10 Pro">Windows 10 Pro</option>
              <option value="Windows 10 PRO - 64 Bit">Windows 10 PRO - 64 Bit</option>
              <option value="Windows 10.1">Windows 10.1</option>
              <option value="Windows 2000 / XP / Vista / 7 / 2003 Server / 2008 Server, Mac OS">Windows 2000 / XP / Vista / 7 / 2003 Server / 2008 Server, Mac OS</option>
              <option value="Windows 2000 / XP / Vista / Win7 / 2008 Server / Various Linux OS">Windows 2000 / XP / Vista / Win7 / 2008 Server / Various Linux OS</option>
              <option value="Windows 2000/ME/XP/Vista/7">Windows 2000/ME/XP/Vista/7</option>
              <option value="Windows 7, ME, XP, 2000, Vista, Mac OS 8.6 and Linux">Windows 7, ME, XP, 2000, Vista, Mac OS 8.6 and Linux</option>
              <option value="Windows 7, ME, XP, 2000, Vista, Mac OS 8.6 and Linux 2.4.0">Windows 7, ME, XP, 2000, Vista, Mac OS 8.6 and Linux 2.4.0</option>
              <option value="Windows 7/ Vista/ XP/ Me/ 2000, Mac OS, Linux">Windows 7/ Vista/ XP/ Me/ 2000, Mac OS, Linux</option>
              <option value="Windows 7/10">Windows 7/10</option>
              <option value="Windows 7/ME/XP/ 2000/Vista">Windows 7/ME/XP/ 2000/Vista</option>
              <option value="Windows 8   Windows 7   Windows 7">Windows 8 Windows 7 Windows 7</option>
              <option value="Windows 8 (64-bit)">Windows 8 (64-bit)</option>
              <option value="Windows 8 64 bits">Windows 8 64 bits</option>
              <option value="Windows 8 64-Bit">Windows 8 64-Bit</option>
              <option value="Windows 8 Pro 64-bit Edition">Windows 8 Pro 64-bit Edition</option>
              <option value="Windows 8 Professional 64-bit">Windows 8 Professional 64-bit</option>
              <option value="Windows 8, 64 Bit">Windows 8, 64 Bit</option>
              <option value="Windows 8, Windows 7, Vista , Windows XP">Windows 8, Windows 7, Vista , Windows XP</option>
              <option value="Windows 8, Windows 7, Windows Vista, Windows XP">Windows 8, Windows 7, Windows Vista, Windows XP</option>
              <option value="Windows 8, Windows Vista, Windows XP">Windows 8, Windows Vista, Windows XP</option>
              <option value="Windows 8.1 (64bit)">Windows 8.1 (64bit)</option>
              <option value="Windows 8.1 (64Bit) English">Windows 8.1 (64Bit) English</option>
              <option value="Windows 8.1 (Home &amp; Student Edition)">Windows 8.1 (Home &amp; Student Edition)</option>
              <option value="Windows 8.1 64 bit">Windows 8.1 64 bit</option>
              <option value="Windows 8.1 64-bit">Windows 8.1 64-bit</option>
              <option value="Windows 8.1 BING">Windows 8.1 BING</option>
              <option value="Windows 8.1 downgradable to Windows 7 pro (64bit)">Windows 8.1 downgradable to Windows 7 pro (64bit)</option>
              <option value="Windows 8.1 License">Windows 8.1 License</option>
              <option value="Windows 8.1 Pro 64 bit">Windows 8.1 Pro 64 bit</option>
              <option value="Windows 8.1 Pro.(64 bits)">Windows 8.1 Pro.(64 bits)</option>
              <option value="Windows 8.1 Single Language">Windows 8.1 Single Language</option>
              <option value="Windows 8.1 Ultrabook">Windows 8.1 Ultrabook</option>
              <option value="Windows 8.1 with Bing">Windows 8.1 with Bing</option>
              <option value="Windows 8.1 with Bing OS">Windows 8.1 with Bing OS</option>
              <option value="Windows 8.1&nbsp;">Windows 8.1&nbsp;</option>
              <option value="Windows 8/7/XP/Vista">Windows 8/7/XP/Vista</option>
              <option value="Windows 8/7/XP/Vista, Mac OS, Linux">Windows 8/7/XP/Vista, Mac OS, Linux</option>
              <option value="Windows 8&nbsp;">Windows 8&nbsp;</option>
              <option value="windows 98 and avobe">windows 98 and avobe</option>
              <option value="Windows 98, 2000, ME, NT, Vista OS , Win xp">Windows 98, 2000, ME, NT, Vista OS , Win xp</option>
              <option value="Windows 98se, 2000, ME, XP, Vista &amp; Win7,Win8 / Win10">Windows 98se, 2000, ME, XP, Vista &amp; Win7,Win8 / Win10</option>
              <option value="Windows OS">Windows OS</option>
              <option value="Windows Vista, Windows 7">Windows Vista, Windows 7</option>
              <option value="Windows Vista, Windows&nbsp;7, and Windows 8">Windows Vista, Windows&nbsp;7, and Windows 8</option>
              <option value="Windows XP and Above, Mac OS: 10.5.8">Windows XP and Above, Mac OS: 10.5.8</option>
              <option value="Windows XP, Vista, 7">Windows XP, Vista, 7</option>
              <option value="Windows XP/Vista/7/8/8.1">Windows XP/Vista/7/8/8.1</option>
              <option value="Windows, Linux">Windows, Linux</option>
              <option value="Windows, MAC">Windows, MAC</option>
              <option value="Windows, MAC and Linux">Windows, MAC and Linux</option>
              <option value="Windows, MAC, Android">Windows, MAC, Android</option>
              <option value="Windows, MacOS, Chrome OS, Linux">Windows, MacOS, Chrome OS, Linux</option>
              <option value="Windows-10">Windows-10</option>
              <option value="Windows-10 Compatible">Windows-10 Compatible</option>
              <option value="Windows/95/98/ME/2000/XP Vista/Win7(NOT compatible with Win10)">Windows/95/98/ME/2000/XP Vista/Win7(NOT compatible with Win10)</option>
              <option value="Windows7/Vista/XP">Windows7/Vista/XP</option>
              <option value="Windows7/Vista/XP/Me/2000/98">Windows7/Vista/XP/Me/2000/98</option>
              <option value="Windows: 98/98SE/ME/2000/XP/Vista">Windows: 98/98SE/ME/2000/XP/Vista</option>
              <option value="Windows: XP, XP Professional (64-bit), Vista, 7, 8, Mac OS X v10.5.8">Windows: XP, XP Professional (64-bit), Vista, 7, 8, Mac OS X v10.5.8</option>
              <option value="Windows® 7, Windows Server® 2008, Windows Vista®, Windows XP/2000, Linux">Windows® 7, Windows Server® 2008, Windows Vista®, Windows XP/2000, Linux</option>
              <option value="Windows® 8">Windows® 8</option>
              <option value="Windows® 8 86x64">Windows® 8 86x64</option>
              <option value="Windows® 8.1">Windows® 8.1</option>
              <option value="Windows® 8.1 , Windows® 8 , Windows® 7">Windows® 8.1 , Windows® 8 , Windows® 7</option>
              <option value="Winwows 10">Winwows 10</option>
              <option value="Works with Win98se, ME, XP, Vista &amp; Win7,Win8">Works with Win98se, ME, XP, Vista &amp; Win7,Win8</option>
              <option value="Works with Win98se, ME, XP, Vista &amp; Win7,Win8, Win10">Works with Win98se, ME, XP, Vista &amp; Win7,Win8, Win10</option>
              <option value="X Yosemite">X Yosemite</option>
              <option value="X Yosemite &amp; Windows Supported">X Yosemite &amp; Windows Supported</option>
              <option value="XP/ 7/ 8/ 8.1/ 10">XP/ 7/ 8/ 8.1/ 10</option>
              <option value="&nbsp;Android">&nbsp;Android</option>
              <option value="&nbsp;Android 5.1">&nbsp;Android 5.1</option>
              <option value="&nbsp;Android OS, v4.2.2 (Jelly Bean)">&nbsp;Android OS, v4.2.2 (Jelly Bean)</option>
              <option value="&nbsp;Android OS, v4.4.2 (KitKat)">&nbsp;Android OS, v4.4.2 (KitKat)</option>
              <option value="Android (Jelly Bean)">Android (Jelly Bean)</option>
              <option value="Android 2.3 (Gingerbread)">Android 2.3 (Gingerbread)</option>
              <option value="Android 2.3 (Gingerbread) upgradable to 4.1.2 (Jelly Bean)">Android 2.3 (Gingerbread) upgradable to 4.1.2 (Jelly Bean)</option>
              <option value="Android 4,2">Android 4,2</option>
              <option value="Android 4.0 (Ice Cream Sandwich)">Android 4.0 (Ice Cream Sandwich)</option>
              <option value="Android 4.0.3 (Ice Cream Sandwich)">Android 4.0.3 (Ice Cream Sandwich)</option>
              <option value="Android 4.0.4 (Ice Cream Sandwich) 4.3 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) 4.3 (Jelly Bean)</option>
              <option value="Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.1.1 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.1.1 (Jelly Bean)</option>
              <option value="Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.1.2 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.1.2 (Jelly Bean)</option>
              <option value="Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.3 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.3 (Jelly Bean)</option>
              <option value="Android 4.0.4 (Ice Cream Sandwich) upgradаble to 4.3 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) upgradаble to 4.3 (Jelly Bean)</option>
              <option value="Android 4.1 (Jelly Bean) upgradable to 4.2.2 (Jelly Bean)">Android 4.1 (Jelly Bean) upgradable to 4.2.2 (Jelly Bean)</option>
              <option value="Android 4.1 (Jelly Bean) upgradаble to 4.3 (Jelly Bean)">Android 4.1 (Jelly Bean) upgradаble to 4.3 (Jelly Bean)</option>
              <option value="Android 4.1.2 (Jelly Bean)">Android 4.1.2 (Jelly Bean)</option>
              <option value="Android 4.1.2 (Jelly Bean) upgradable to 4.4 (KitKat)">Android 4.1.2 (Jelly Bean) upgradable to 4.4 (KitKat)</option>
              <option value="Android 4.1.2 (Jelly Bean) upgradаble to 4.4.2 (KitKat)">Android 4.1.2 (Jelly Bean) upgradаble to 4.4.2 (KitKat)</option>
              <option value="Android 4.2 (Jelly Bean) upgradable to 4.4.2 (KitKat)">Android 4.2 (Jelly Bean) upgradable to 4.4.2 (KitKat)</option>
              <option value="Android 4.2 (Jelly Bean) upgradable to 4.4.4 (KitKat)">Android 4.2 (Jelly Bean) upgradable to 4.4.4 (KitKat)</option>
              <option value="Android 4.2 (Jellybean)">Android 4.2 (Jellybean)</option>
              <option value="Android 4.2.2 (Jelly Bean)">Android 4.2.2 (Jelly Bean)</option>
              <option value="Android 4.2.2 (Jelly Bean) planned upgrade to 4.4 (KitKat)">Android 4.2.2 (Jelly Bean) planned upgrade to 4.4 (KitKat)</option>
              <option value="Android 4.2.2 (Jelly Bean) upgradable to 4.3 (Jelly Bean)">Android 4.2.2 (Jelly Bean) upgradable to 4.3 (Jelly Bean)</option>
              <option value="Android 4.2.2 (Jelly Bean) upgradable to 4.4.2 (KitKat)">Android 4.2.2 (Jelly Bean) upgradable to 4.4.2 (KitKat)</option>
              <option value="Android 4.3 (Jelly Bean) planned upgrade to 4.4.2 (KitKat)">Android 4.3 (Jelly Bean) planned upgrade to 4.4.2 (KitKat)</option>
              <option value="Android 4.3 (Jelly Bean) upgradable to 4.4.2 (KitKat)">Android 4.3 (Jelly Bean) upgradable to 4.4.2 (KitKat)</option>
              <option value="Android 4.3 (Jelly Bean) upgradable to 4.4.4 (KitKat)">Android 4.3 (Jelly Bean) upgradable to 4.4.4 (KitKat)</option>
              <option value="Android 4.4 (Kit Kat)">Android 4.4 (Kit Kat)</option>
              <option value="Android 4.4 KitKat">Android 4.4 KitKat</option>
              <option value="Android 6.0.1 Marshmallow">Android 6.0.1 Marshmallow</option>
              <option value="Android OS v4.4.2 (KitKat)">Android OS v4.4.2 (KitKat)</option>
              <option value="Android OS v4.4.2 (KitKat) upgradable to v4.4.3 (KitKat) planned upgrade to v5.0 (Lollipop)">Android OS v4.4.2 (KitKat) upgradable to v4.4.3 (KitKat) planned upgrade to v5.0 (Lollipop)</option>
              <option value="Android OS, v4.2.2 (Jelly Bean)">Android OS, v4.2.2 (Jelly Bean)</option>
              <option value="BlackBerry 10 OS upgradable to 10.2.1">BlackBerry 10 OS upgradable to 10.2.1</option>
              <option value="BlackBerry 10 upgradable to 10.1">BlackBerry 10 upgradable to 10.1</option>
              <option value="BlackBerry 10 upgradable to 10.2.1">BlackBerry 10 upgradable to 10.2.1</option>
              <option value="BlackBerry 10.2 upgradable to 10.2.1">BlackBerry 10.2 upgradable to 10.2.1</option>
              <option value="Helio X20 64-bit Deca-core">Helio X20 64-bit Deca-core</option>
              <option value="Mac OS X Lion">Mac OS X Lion</option>
              <option value="Mac OS X Mavericks&nbsp;">Mac OS X Mavericks&nbsp;</option>
              <option value="Microsoft Windows Phone 8 upgradeable to 8.1">Microsoft Windows Phone 8 upgradeable to 8.1</option>
              <option value="Nokia Asha software platform 1.1.1 upgradable to 1.4">Nokia Asha software platform 1.1.1 upgradable to 1.4</option>
              <option value="Nokia Asha software platform 1.2">Nokia Asha software platform 1.2</option>
              <option value="Nokia X 1.0 (based on Android 4.1.2 Jelly Bean)">Nokia X 1.0 (based on Android 4.1.2 Jelly Bean)</option>
              <option value="Nokia X 2.0 (based on Android 4.3 Jelly Bean)">Nokia X 2.0 (based on Android 4.3 Jelly Bean)</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Model <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="modal">

            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Barcode Ean <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Barcode Ean" name="barcode">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Input Output ports <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="">
              <option value="USB 2.0">USB 2.0</option>
              <option value="HDMI">HDMI</option>
              <option value="VGA">VGA</option>
              <option value="USB 3.0">USB 3.0</option>
              <option value="LAN">LAN</option>
              <option value="Audio ports">Audio ports</option>
              <option value="SD Cards slot">SD Cards slot</option>
              <option value="AC port">AC port</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Cl Cable Length <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Cl Cable Length" name="ci_cable_length">
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">AC Adapter <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="ac_adapter">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Graphics memory <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="g_memory">
              <option value="2GB">2GB</option>
              <option value="4GB">4GB</option>
              <option value="1GB &amp; Under">1GB &amp; Under</option>
              <option value="8GB &amp; Up">8GB &amp; Up</option>
              <option value="6GB">6GB</option>
              <option value="6 GB">6 GB</option>
              <option value="n/a">n/a</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">System Memory <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="system_memory">
              <option value="16GB">16GB</option>
              <option value="2GB">2GB</option>
              <option value="8GB">8GB</option>
              <option value="4GB">4GB</option>
              <option value="3GB">3GB</option>
              <option value="1GB & Under">1GB &amp; Under</option>
              <option value="16GB & Up">16GB &amp; Up</option>
              <option value="6GB">6GB</option>
              <option value="512MB">512MB</option>
              <option value="5GB">5GB</option>
              <option value="12GB">12GB</option>
              <option value="10GB">10GB</option>
              <option value="11GB">11GB</option>
              <option value="7GB">7GB</option>
              <option value="9GB">9GB</option>
              <option value="13GB">13GB</option>
              <option value="14GB">14GB</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    {{--  --}}
    <div class="col-md-12 col-lg-12 colors" style="display: none;" id="3">
      <div class="card">
        <div class="card-body">
          3
        </div>
      </div>
    </div>
    {{--  --}}
    <div class="col-md-12 col-lg-12 colors" style="display: none;" id="4">
      <div class="card">
        <div class="card-body">
          4
        </div>
      </div>
    </div>
    {{--  --}}
    <div class="col-md-12 col-lg-12 colors" style="display: ;" id="5">
      <div class="card">
        <div class="card-header d-block">
          <h3 class="card-title">Product Details</h3>
        </div>
        <div class="card-body row">
          <div class="col-md-12 col-lg-6">
            <label class="form-label">Protection <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="protection">
              <option value="Not Specified">Not Specified</option>
              <option value="Plastic">Plastic</option>
              <option value="Corning Gorilla Glass 1">Corning Gorilla Glass 1</option>
              <option value="Corning Gorilla Glass 2">Corning Gorilla Glass 2</option>
              <option value="Corning Gorilla Glass 3">Corning Gorilla Glass 3</option>
              <option value="Corning Gorilla Glass 4">Corning Gorilla Glass 4</option>
              <option value="Corning Gorilla Glass 5">Corning Gorilla Glass 5</option>
              <option value="Corning Gorilla Glass 6">Corning Gorilla Glass 6</option>
              <option value="Scratch Resistant Glass">Scratch Resistant Glass</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6">
            <label class="form-label">Model Year <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="model_year">
              <option value="Not Specified">Not Specified</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2020</option>
              <option value="2022">2020</option>
              <option value="2023">2020</option>
              <option value="2024">2020</option>
              <option value="2025">2020</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Brand <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="brand">
              @foreach( $brand as $key => $val )
              <option value="{{ $val->name }}">{{ $val->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Number of Cameras <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="no_camera">
              <option value="Not Specified">Not Specified</option>
              <option value="6" >6</option>
              <option value="5" >5</option>
              <option value="7" >7</option>
              <option value="9" >9</option>
              <option value="8" >8</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
              <option value="4" >4</option>
              <option value="1" >1</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Battery Capacity <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="battert_capacity">
              <option value="Under 1000 mAh">Under 1000 mAh</option>
              <option value="1000 - 1999 mAh" >1000 - 1999 mAh</option>
              <option value="2000 - 2999 mAh" >2000 - 2999 mAh</option>
              <option value="3000 - 3999 mAh" >3000 - 3999 mAh</option>
              <option value="4000 - 4999 mAh" >4000 - 4999 mAh</option>
              <option value="5000 mAh &amp; Above" >5000 mAh &amp; Above</option>
              <option value="Not Specified" >Not Specified</option>
              <option value="1000 mAh to 5000 mAh" >1000 mAh to 5000 mAh</option>
              <option value="5001 mAh to 10000 mAh" >5001 mAh to 10000 mAh</option>
              <option value="30001 mAh to 50000 mAh" >30001 mAh to 50000 mAh</option>
              <option value="50001 mAh and up" >50001 mAh and up</option>
              <option value="20001 mAh to 30000 mAh" >20001 mAh to 30000 mAh</option>
              <option value="10001 mAh to 20000 mAh" >10001 mAh to 20000 mAh</option>
              <option value="10000mah" >10000mah</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-5">
            {{-- <label class="form-label">Phone Features <span class="text-danger">*</span></label> --}}
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-team">Phone Features</a>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">camera (Pixel ppi) <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="camera_pixel">
              <option value="300-400 PPI">300-400 PPI</option>
              <option value="400-500 PPI">400-500 PPI</option>
              <option value="200-300 PPI">200-300 PPI</option>
              <option value="Above 500 PPI">Above 500 PPI</option>
              <option value="Below 200 PPI">Below 200 PPI</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Display size mobile <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="dis_size">
              <option value="Less than 3.5 Inch">Less than 3.5 Inch</option>
              <option value="3.6 - 4 Inch">3.6 - 4 Inch</option>
              <option value="4.1 - 4.5 Inch">4.1 - 4.5 Inch</option>
              <option value="4.6 - 5 Inch">4.6 - 5 Inch</option>
              <option value="5.1 - 5.5 Inch">5.1 - 5.5 Inch</option>
              <option value="5.6 - 6 Inch">5.6 - 6 Inch</option>
              <option value="6 Inches &amp; Above">6 Inches &amp; Above</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Sim Type <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="sim_type">
              <option value="Less than 3.5 Inch">Standard</option>
              <option value="3.6 - 4 Inch">Micro</option>
              <option value="4.1 - 4.5 Inch">Nano</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Camera Front (Megapixels) <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="cam_front_pixel">
              <option value="2-3MP" tabindex="-1">2-3MP</option>
              <option value="8 MP">8 MP</option>
              <option value="No Camera">No Camera</option>
              <option value="Not Specified">Not Specified</option>
              <option value="5-6 MP">5-6 MP</option>
              <option value="7 MP and up">7 MP and up</option>
              <option value="0-1 MP">0-1 MP</option>
              <option value="3-4 MP">3-4 MP</option>
              <option value="1-2 MP">1-2 MP</option>
              <option value="20 MP">20 MP</option>
              <option value="16 MP">16 MP</option>
              <option value="24 MP">24 MP</option>
              <option value="13MP">13MP</option>
              <option value="25 MP">25 MP</option>
              <option value="1 MP">1 MP</option>
              <option value="2 MP">2 MP</option>
              <option value="3 MP">3 MP</option>
              <option value="4 MP">4 MP</option>
              <option value="5 MP">5 MP</option>
              <option value="6 MP">6 MP</option>
              <option value="7 MP">7 MP</option>
              <option value="9 MP">9 MP</option>
              <option value="10 MP">10 MP</option>
              <option value="11 MP">11 MP</option>
              <option value="12 MP">12 MP</option>
              <option value="13 MP">13 MP</option>
              <option value="14 MP">14 MP</option>
              <option value="15 MP">15 MP</option>
              <option value="17 MP">17 MP</option>
              <option value="18 MP">18 MP</option>
              <option value="19 MP">19 MP</option>
              <option value="21 MP">21 MP</option>
              <option value="22 MP">22 MP</option>
              <option value="23 MP">23 MP</option>
              <option value="26 MP">26 MP</option>
              <option value="27 MP">27 MP</option>
              <option value="28 MP">28 MP</option>
              <option value="29 MP">29 MP</option>
              <option value="30 MP">30 MP</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Ram Memory <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="ram">
              <option value="Other">Other</option>
              <option value="3GB">3GB</option>
              <option value="2GB">2GB</option>
              <option value="1GB">1GB</option>
              <option value="512MB &amp; Under">512MB &amp; Under</option>
              <option value="8GB">8GB</option>
              <option value="16GB">16GB</option>
              <option value="6GB">6GB</option>
              <option value="4GB">4GB</option>
              <option value="1.5GB">1.5GB</option>
              <option value="512 MB">512 MB</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Body Type <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="body_type">
              <option value="Not Specified">Not Specified</option>
              <option value="Ceramic">Ceramic</option>
              <option value="Glass">Glass</option>
              <option value="Metal">Metal</option>
              <option value="Plastic">Plastic</option>
              <option value="Pick Up">Pick Up</option>
              <option value="SUV">SUV</option>
              <option value="Sedan">Sedan</option>
              <option value="Hatchback">Hatchback</option>
              <option value="Commercial">Commercial</option>
              <option value="Van">Van</option>
              <option value="Convertable">Convertable</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">E-Warranty <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="e_warranty">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-12 col-lg-6 mt-3">
            <label class="form-label">Camera back <span class="text-danger">*</span></label>
            <select class="form-control js-example-basic-single" name="camra_back">
              <option value="21MP and up">21MP and up</option>
              <option title="16-20MP">16-20MP</option>
              <option title="11-15MP">11-15MP</option>
              <option title="6 to 10MP">6 to 10MP</option>
              <option title="1 to 5MP">1 to 5MP</option>
              <option title="No Camera">No Camera</option>
              <option title="8 MP">8 MP</option>
              <option title="20 MP">20 MP</option>
              <option title="16 MP">16 MP</option>
              <option title="24 MP">24 MP</option>
              <option title="25 MP">25 MP</option>
              <option title="1 MP">1 MP</option>
              <option title="2 MP">2 MP</option>
              <option title="3 MP">3 MP</option>
              <option title="4 MP">4 MP</option>
              <option title="5 MP">5 MP</option>
              <option title="6 MP">6 MP</option>
              <option title="7 MP">7 MP</option>
              <option title="9 MP">9 MP</option>
              <option title="10 MP">10 MP</option>
              <option title="11 MP">11 MP</option>
              <option title="12 MP">12 MP</option>
              <option title="13 MP">13 MP</option>
              <option title="14 MP">14 MP</option>
              <option title="15 MP">15 MP</option>
              <option title="17 MP">17 MP</option>
              <option title="18 MP">18 MP</option>
              <option title="19 MP">19 MP</option>
              <option title="21 MP">21 MP</option>
              <option title="22 MP">22 MP</option>
              <option title="23 MP">23 MP</option>
              <option title="26 MP">26 MP</option>
              <option title="27 MP">27 MP</option>
              <option title="28 MP">28 MP</option>
              <option title="29 MP">29 MP</option>
              <option title="30 MP">30 MP</span>
              </select>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
              <label class="form-label">number_of_cores <span class="text-danger">*</span></label>
              <select class="form-control js-example-basic-single" name="number_of_cores">
                <option value="Not Specified">Not Specified</option>
                <option value="Quad Core">Quad Core</option>
                <option value="Single Core">Single Core</option>
                <option value="Dual Core">Dual Core</option>
                <option value="Octa Core">Octa Core</option>
                <option value="Hexa Core">Hexa Core</option>
              </select>
            </div>
            <div class="col-md-12 col-lg-6 mt-5">
              <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-team1">Network Connections</a>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
              <label class="form-label">Operating System <span class="text-danger">*</span></label>
              <select class="form-control js-example-basic-single" name="operating_system">
                <option value="Windows">Windows</option>
                <option value="Linux">Linux</option>
                <option value="Windows XP Professional">Windows XP Professional</option>
                <option value="Mac OS X">Mac OS X</option>
                <option value="Android">Android</option>
                <option value="iOS">iOS</option>
                <option value="No OS">No OS</option>
                <option value="Other">Other</option>
                <option value="Windows XP">Windows XP</option>
                <option value="Windows 7">Windows 7</option>
                <option value="Windows Mobile 6.5">Windows Mobile 6.5</option>
                <option value="Windows Phone OS">Windows Phone OS</option>
                <option value="Symbian">Symbian</option>
                <option value="Blackberry OS">Blackberry OS</option>
                <option value="Chrome OS">Chrome OS</option>
                <option value="Windows 8">Windows 8</option>
                <option value="Firefox">Firefox</option>
                <option value="Android 4.3 Jelly Bean">Android 4.3 Jelly Bean</option>
                <option value="Android 4.2 Jelly Bean">Android 4.2 Jelly Bean</option>
                <option value="Android 4.1 Jelly Bean">Android 4.1 Jelly Bean</option>
                <option value="Android 4.0 Ice Cream Sandwich">Android 4.0 Ice Cream Sandwich</option>
                <option value="Android 2.3 Gingerbread">Android 2.3 Gingerbread</option>
                <option value="Android 4.4 Kitkat">Android 4.4 Kitkat</option>
                <option value="iOS 7">iOS 7</option>
                <option value="iOS 8">iOS 8</option>
                <option value="Proprietary">Proprietary</option>
                <option value="Windows 8.1">Windows 8.1</option>
                <option value="Maverick">Maverick</option>
                <option value="DOS">DOS</option>
                <option value="X Mavericks">X Mavericks</option>
                <option value="Android 4.3 Jelly">Android 4.3 Jelly</option>
                <option value="Android 2.1 Eclair">Android 2.1 Eclair</option>
                <option value="Android 2.2 Froyo">Android 2.2 Froyo</option>
                <option value="Android 4.0 Ice Cream">Android 4.0 Ice Cream</option>
                <option value="Nokia OS">Nokia OS</option>
                <option value="Blackber">Blackber</option>
                <option value="Windows 7 Professional">Windows 7 Professional</option>
                <option value="Windows 7 Home Premium 64">Windows 7 Home Premium 64</option>
                <option value="Windows 7 Home Premium">Windows 7 Home Premium</option>
                <option value="Windows 7 Home Basic">Windows 7 Home Basic</option>
                <option value="Meego">Meego</option>
                <option value="Windows XP Home">Windows XP Home</option>
                <option value="Ubuntu">Ubuntu</option>
                <option value="Android 2.3">Android 2.3</option>
                <option value="Android 2.3.6 Gingerbread">Android 2.3.6 Gingerbread</option>
                <option value="SGP">SGP</option>
                <option value="Symbia">Symbia</option>
                <option value="Remix OS">Remix OS</option>
                <option value="Windows 10">Windows 10</option>
                <option value=" Android OS, v4.2.2 (Jelly Bean)"> Android OS, v4.2.2 (Jelly Bean)</option>
                <option value=" Android v4.2.2 (Jelly Bean)"> Android v4.2.2 (Jelly Bean)</option>
                <option value=" Android v4.3 (Jelly Bean)"> Android v4.3 (Jelly Bean)</option>
                <option value="Android 1.5 Cupcake">Android 1.5 Cupcake</option>
                <option value="Android 1.6 (Donut)">Android 1.6 (Donut)</option>
                <option value="Android 1.6 Donut">Android 1.6 Donut</option>
                <option value="Android 2.1">Android 2.1</option>
                <option value="Android 2.2">Android 2.2</option>
                <option value="Android 2.3.3 Gingerbread">Android 2.3.3 Gingerbread</option>
                <option value="Android 2.3.4 Gingerbread">Android 2.3.4 Gingerbread</option>
                <option value="Android 2.3.5 Gingerbread">Android 2.3.5 Gingerbread</option>
                <option value="Android 3.0">Android 3.0</option>
                <option value="Android 3.0 Honeycomb">Android 3.0 Honeycomb</option>
                <option value="Android 3.2">Android 3.2</option>
                <option value="Android 3.2 Honeycomb">Android 3.2 Honeycomb</option>
                <option value="Android 4">Android 4</option>
                <option value="Android 4.0">Android 4.0</option>
                <option value="Android 4.0 Ic">Android 4.0 Ic</option>
                <option value="Android 4.0.3">Android 4.0.3</option>
                <option value="Android 4.0.3 Ice Cream Sandwich">Android 4.0.3 Ice Cream Sandwich</option>
                <option value="Android 4.0.4">Android 4.0.4</option>
                <option value="Android 4.0.4 Ice Cream Sandwich">Android 4.0.4 Ice Cream Sandwich</option>
                <option value="Android 4.1">Android 4.1</option>
                <option value="Android 4.1 Jellybean">Android 4.1 Jellybean</option>
                <option value="Android 4.1.1 Jelly Bean">Android 4.1.1 Jelly Bean</option>
                <option value="Android 4.1.1 Jellybean">Android 4.1.1 Jellybean</option>
                <option value="Android 4.1.2 Jelly Bean">Android 4.1.2 Jelly Bean</option>
                <option value="Android 4.1.2 Jellybean">Android 4.1.2 Jellybean</option>
                <option value="Android 4.2 Jellybean">Android 4.2 Jellybean</option>
                <option value="Android 4.2.1 Jelly Bean">Android 4.2.1 Jelly Bean</option>
                <option value="Android 4.2.2">Android 4.2.2</option>
                <option value="Android 4.2.2 Jelly Bean">Android 4.2.2 Jelly Bean</option>
                <option value="Android 4.2.2 Jellybean">Android 4.2.2 Jellybean</option>
                <option value="Android 4.3 Jellybean">Android 4.3 Jellybean</option>
                <option value="Android 4.3.9 Jelly Bean">Android 4.3.9 Jelly Bean</option>
                <option value="Android 4.4 (KitKat)">Android 4.4 (KitKat)</option>
                <option value="Android 4.4.2 Kitkat">Android 4.4.2 Kitkat</option>
                <option value="Android 4.4.3 Kitkat">Android 4.4.3 Kitkat</option>
                <option value="Android 4.4.4 KitKat">Android 4.4.4 KitKat</option>
                <option value="Android KitKat 4.4">Android KitKat 4.4</option>
                <option value="Android OS 4.2.1 (Jelly Bean)">Android OS 4.2.1 (Jelly Bean)</option>
                <option value="Android OS 4.4 Kitkat">Android OS 4.4 Kitkat</option>
                <option value="Android OS v1.6 (Donut)">Android OS v1.6 (Donut)</option>
                <option value="Android OS v4.0">Android OS v4.0</option>
                <option value="Android OS, v2.2 (Froyo)">Android OS, v2.2 (Froyo)</option>
                <option value="Android OS, v2.3 (Gingerbread)">Android OS, v2.3 (Gingerbread)</option>
                <option value="Android OS, v2.3.5 (Gingerbread)">Android OS, v2.3.5 (Gingerbread)</option>
                <option value="Android OS, v2.3.6 (Gingerbread),">Android OS, v2.3.6 (Gingerbread),</option>
                <option value="Android OS, v2.3.7 (Gingerbread)">Android OS, v2.3.7 (Gingerbread)</option>
                <option value="Android OS, v4.0.3 (Ice Cream Sandwich)">Android OS, v4.0.3 (Ice Cream Sandwich)</option>
                <option value="Android OS, v4.0.4 Ice Cream Sandwich">Android OS, v4.0.4 Ice Cream Sandwich</option>
                <option value="Android OS, v4.1 (Jelly Bean)">Android OS, v4.1 (Jelly Bean)</option>
                <option value="Android OS, v4.1.1 (Jelly Bean)">Android OS, v4.1.1 (Jelly Bean)</option>
                <option value="Android OS, v4.1.2 (Jelly Bean)">Android OS, v4.1.2 (Jelly Bean)</option>
                <option value="Android OS, v4.2 (Jelly Bean)">Android OS, v4.2 (Jelly Bean)</option>
                <option value="Android OS, v4.3 (Jelly Bean)">Android OS, v4.3 (Jelly Bean)</option>
                <option value="Android OS, v4.4 (KitKat)">Android OS, v4.4 (KitKat)</option>
                <option value="Android OS, v4.4.2 (KitKat)">Android OS, v4.4.2 (KitKat)</option>
                <option value="Android v4.0.3 (Ice Cream Sandwich)">Android v4.0.3 (Ice Cream Sandwich)</option>
                <option value="Android v4.1.2 (Jelly Bean">Android v4.1.2 (Jelly Bean</option>
                <option value="Android v4.1.2 (Jelly Bean)">Android v4.1.2 (Jelly Bean)</option>
                <option value="Android v4.2">Android v4.2</option>
                <option value="Android v4.4">Android v4.4</option>
                <option value="Asha S40">Asha S40</option>
                <option value="Bada OS 1.2">Bada OS 1.2</option>
                <option value="BlackBerry 10">BlackBerry 10</option>
                <option value="BlackBerry 10 OS">BlackBerry 10 OS</option>
                <option value="BlackBerry 10.2">BlackBerry 10.2</option>
                <option value="BlackBerry 10.2 OS">BlackBerry 10.2 OS</option>
                <option value="BlackBerry 10.2.1">BlackBerry 10.2.1</option>
                <option value="BlackBerry 7">BlackBerry 7</option>
                <option value="BlackBerry 7.0">BlackBerry 7.0</option>
                <option value="BlackBerry 7.1">BlackBerry 7.1</option>
                <option value="BlackBerry OS 5">BlackBerry OS 5</option>
                <option value="BlackBerry OS 7">BlackBerry OS 7</option>
                <option value="BlackBerry OS 7.0">BlackBerry OS 7.0</option>
                <option value="BlackBerry OS 7.1">BlackBerry OS 7.1</option>
                <option value="Blackberry OS 10">Blackberry OS 10</option>
                <option value="Blackberry OS 10.2">Blackberry OS 10.2</option>
                <option value="CE 6.0 Core">CE 6.0 Core</option>
                <option value="Firefox 1.3">Firefox 1.3</option>
                <option value="FreeDOS">FreeDOS</option>
                <option value="Google Android 4.1 (Jelly Bean)">Google Android 4.1 (Jelly Bean)</option>
                <option value="IOS 4">IOS 4</option>
                <option value="Mac OS">Mac OS</option>
                <option value="Mac OS X Mountain Lion">Mac OS X Mountain Lion</option>
                <option value="Mac OS X v10.5.8">Mac OS X v10.5.8</option>
                <option value="Maemo 5">Maemo 5</option>
                <option value="Microsoft Windows CE 6.0 Core Version">Microsoft Windows CE 6.0 Core Version</option>
                <option value="Microsoft Windows Mobile 6.1 Professional">Microsoft Windows Mobile 6.1 Professional</option>
                <option value="Microsoft Windows Mobile 6.5.3 Professional">Microsoft Windows Mobile 6.5.3 Professional</option>
                <option value="Microsoft Windows Phone 7.5 Mango">Microsoft Windows Phone 7.5 Mango</option>
                <option value="Microsoft Windows Phone 8">Microsoft Windows Phone 8</option>
                <option value="Microsoft Windows Phone 8.1">Microsoft Windows Phone 8.1</option>
                <option value="No info">No info</option>
                <option value="Nokia Asha">Nokia Asha</option>
                <option value="Nokia Asha 1.2">Nokia Asha 1.2</option>
                <option value="Nokia Asha Software Platform">Nokia Asha Software Platform</option>
                <option value="Nokia Asha software Platform 1.2">Nokia Asha software Platform 1.2</option>
                <option value="Nokia Asha software platform 1.0">Nokia Asha software platform 1.0</option>
                <option value="Nokia Asha software platform 1.1.1">Nokia Asha software platform 1.1.1</option>
                <option value="Nokia OS Series 30+">Nokia OS Series 30+</option>
                <option value="Nokia X Software Platform">Nokia X Software Platform</option>
                <option value="Nokia X flatform 2.0 (Android 4.3)">Nokia X flatform 2.0 (Android 4.3)</option>
                <option value="OS X">OS X</option>
                <option value="OS X Yosemite">OS X Yosemite</option>
                <option value="RIM OS 7.0">RIM OS 7.0</option>
                <option value="S30">S30</option>
                <option value="S40">S40</option>
                <option value="S40 Asha">S40 Asha</option>
                <option value="S60">S60</option>
                <option value="S60 5th Edition">S60 5th Edition</option>
                <option value="Samsung OS">Samsung OS</option>
                <option value="Samsung Proprietary">Samsung Proprietary</option>
                <option value="Symbian 9.3">Symbian 9.3</option>
                <option value="Symbian Anna">Symbian Anna</option>
                <option value="Symbian Belle">Symbian Belle</option>
                <option value="Symbian OS">Symbian OS</option>
                <option value="Symbian^3">Symbian^3</option>
                <option value="Win 8.1 Bing">Win 8.1 Bing</option>
                <option value="Win7 Pro 64 downgrade W8">Win7 Pro 64 downgrade W8</option>
                <option value="Windows 7 Home Basic 64-bit">Windows 7 Home Basic 64-bit</option>
                <option value="Windows 7 Pro">Windows 7 Pro</option>
                <option value="Windows 7 Pro 32-bit">Windows 7 Pro 32-bit</option>
                <option value="Windows 7 Professional SP1 64-bit">Windows 7 Professional SP1 64-bit</option>
                <option value="Windows 7 Starter">Windows 7 Starter</option>
                <option value="Windows 7.5">Windows 7.5</option>
                <option value="Windows 7.5 Mango">Windows 7.5 Mango</option>
                <option value="Windows 8 (Dock) Android 4.2 Jelly Bean (Tablet)">Windows 8 (Dock) Android 4.2 Jelly Bean (Tablet)</option>
                <option value="Windows 8 64 bit SL">Windows 8 64 bit SL</option>
                <option value="Windows 8 Pro">Windows 8 Pro</option>
                <option value="Windows 8 Pro 64 bit (English Version)">Windows 8 Pro 64 bit (English Version)</option>
                <option value="Windows 8 SL">Windows 8 SL</option>
                <option value="Windows 8 STD">Windows 8 STD</option>
                <option value="Windows 8 Single Language 64 bit (English Version)">Windows 8 Single Language 64 bit (English Version)</option>
                <option value="Windows 8 Single Language 64bit">Windows 8 Single Language 64bit</option>
                <option value="Windows 8, 7, Vista, XP, 2000 32/64 bit">Windows 8, 7, Vista, XP, 2000 32/64 bit</option>
                <option value="Windows 8.1 Pro">Windows 8.1 Pro</option>
                <option value="Windows Mobile 6.1 Pro">Windows Mobile 6.1 Pro</option>
                <option value="Windows Phone 7.5 Mango">Windows Phone 7.5 Mango</option>
                <option value="Windows Phone 8">Windows Phone 8</option>
                <option value="Windows Phone 8.1">Windows Phone 8.1</option>
                <option value="Windows RT">Windows RT</option>
                <option value="android os">android os</option>
                <option value="iOS 3">iOS 3</option>
                <option value="iOS 5">iOS 5</option>
                <option value="iOS 5.1">iOS 5.1</option>
                <option value="iOS 6">iOS 6</option>
                <option value="iOS 7.0.4">iOS 7.0.4</option>
                <option value="iOS 8.0">iOS 8.0</option>
                <option value="v4.2 (jelly bean)">v4.2 (jelly bean)</option>
                <option value="BlackBerry">BlackBerry</option>
                <option value="iOS 9">iOS 9</option>
                <option value="Android 7.0 Nougat">Android 7.0 Nougat</option>
                <option value="Android 6.0 Marshmallow">Android 6.0 Marshmallow</option>
                <option value="Android 5.1 Lollipop">Android 5.1 Lollipop</option>
                <option value="Android 5.0 Lollipop">Android 5.0 Lollipop</option>
                <option value="USB 2.0">USB 2.0</option>
                <option value="Others">Others</option>
                <option value="Chrome">Chrome</option>
                <option value="OS X El Capitan">OS X El Capitan</option>
                <option value="5.1">5.1</option>
                <option value="Android 5.1">Android 5.1</option>
                <option value="N/A">N/A</option>
                <option value="OS">OS</option>
                <option value="Testing">Testing</option>
                <option value="BlackBerry OS 10.2.1">BlackBerry OS 10.2.1</option>
                <option value="WINDOWS VISTA BUSINESS">WINDOWS VISTA BUSINESS</option>
                <option value="Proprietary OS">Proprietary OS</option>
                <option value="iOS 10?">iOS 10?</option>
                <option value="Windows 10 Pro 64">Windows 10 Pro 64</option>
                <option value="Android 7.0">Android 7.0</option>
                <option value="Android 6.0">Android 6.0</option>
                <option value="Android 4.2">Android 4.2</option>
                <option value="Any">Any</option>
                <option value="Endless OS">Endless OS</option>
                <option value="iOS 11">iOS 11</option>
                <option value="Endless">Endless</option>
                <option value="Android 8.0 Oreo">Android 8.0 Oreo</option>
                <option value="macOS Sierra 10.12.1">macOS Sierra 10.12.1</option>
                <option value="MTK">MTK</option>
                <option value="Windows: Windows 8 / Windows 7 / Windows XP / Windows Vista/Mac OS X v10.6.8 and later">Windows: Windows 8 / Windows 7 / Windows XP / Windows Vista/Mac OS X v10.6.8 and later</option>
                <option value="0.3MP camera">0.3MP camera</option>
                <option value="4.2">4.2</option>
                <option value="4.2.2 Jelly Bean">4.2.2 Jelly Bean</option>
                <option value="4.4 Kitkat OS">4.4 Kitkat OS</option>
                <option value="4.4 Kitkat OS.">4.4 Kitkat OS.</option>
                <option value="4.4.2 (kitkat)">4.4.2 (kitkat)</option>
                <option value="4.4.2 Kitkat">4.4.2 Kitkat</option>
                <option value="Andoid Jellybean 4.2">Andoid Jellybean 4.2</option>
                <option value="Android  4.1 (Jellybean)">Android 4.1 (Jellybean)</option>
                <option value="Android  4.4.2 Kitkat">Android 4.4.2 Kitkat</option>
                <option value="Android  v4.4.2 KitKat">Android v4.4.2 KitKat</option>
                <option value="Android  v4.4.4 KitKat">Android v4.4.4 KitKat</option>
                <option value="Android  v5.0 Lollipop">Android v5.0 Lollipop</option>
                <option value="Android  v5.1 Lollipop">Android v5.1 Lollipop</option>
                <option value="Android &amp; iOS">Android &amp; iOS</option>
                <option value="Android (4.2)">Android (4.2)</option>
                <option value="Android (4.2)&nbsp;">Android (4.2)&nbsp;</option>
                <option value="Android (4.4.3)">Android (4.4.3)</option>
                <option value="Android (4.4.4, 4.4.2, 4.4)">Android (4.4.4, 4.4.2, 4.4)</option>
                <option value="Android 4.1 (Jelly Bean)">Android 4.1 (Jelly Bean)</option>
                <option value="Android 4.1 (Jelly Bean)&nbsp;">Android 4.1 (Jelly Bean)&nbsp;</option>
                <option value="Android 4.1 Jelly Bean&nbsp;">Android 4.1 Jelly Bean&nbsp;</option>
                <option value="Android 4.1+ (Jelly Bean)&nbsp;">Android 4.1+ (Jelly Bean)&nbsp;</option>
                <option value="Android 4.1.1">Android 4.1.1</option>
                <option value="Android 4.1.2 Jelly Bean&nbsp;">Android 4.1.2 Jelly Bean&nbsp;</option>
                <option value="Android 4.1.2, Jelly Bean">Android 4.1.2, Jelly Bean</option>
                <option value="Android 4.2 (Jelly Bean)">Android 4.2 (Jelly Bean)</option>
                <option value="Android 4.2 (Jelly Bean) + Emotion UI 2.0">Android 4.2 (Jelly Bean) + Emotion UI 2.0</option>
                <option value="Android 4.2 (Jelly Bean)&nbsp;">Android 4.2 (Jelly Bean)&nbsp;</option>
                <option value="Android 4.2 and onwards">Android 4.2 and onwards</option>
                <option value="Android 4.2 Jelly Bean&nbsp;">Android 4.2 Jelly Bean&nbsp;</option>
                <option value="Android 4.2, Jelly Bean">Android 4.2, Jelly Bean</option>
                <option value="Android 4.2.1 (Jelly Bean)">Android 4.2.1 (Jelly Bean)</option>
                <option value="Android 4.2.1 Jelly Bean&nbsp;">Android 4.2.1 Jelly Bean&nbsp;</option>
                <option value="Android 4.2.2 (jelly bean)">Android 4.2.2 (jelly bean)</option>
                <option value="Android 4.2.2 Jelly Bean&nbsp;">Android 4.2.2 Jelly Bean&nbsp;</option>
                <option value="Android 4.2.2 Kitkat">Android 4.2.2 Kitkat</option>
                <option value="Android 4.2.2, Jelly Bean">Android 4.2.2, Jelly Bean</option>
                <option value="Android 4.2.2&nbsp;">Android 4.2.2&nbsp;</option>
                <option value="Android 4.2&nbsp;">Android 4.2&nbsp;</option>
                <option value="Android 4.2&nbsp;Jelly Bean">Android 4.2&nbsp;Jelly Bean</option>
                <option value="Android 4.3">Android 4.3</option>
                <option value="Android 4.3 (Jelly Bean)">Android 4.3 (Jelly Bean)</option>
                <option value="Android 4.3 (Jelly Bean) + Emotion UI 1.6">Android 4.3 (Jelly Bean) + Emotion UI 1.6</option>
                <option value="Android 4.3 (Jelly Bean) + Huawei Emotion UI 1.6">Android 4.3 (Jelly Bean) + Huawei Emotion UI 1.6</option>
                <option value="Android 4.3 (Upgradable to Android 4.4)">Android 4.3 (Upgradable to Android 4.4)</option>
                <option value="Android 4.3 and onwards">Android 4.3 and onwards</option>
                <option value="Android 4.3 Jelly Bean (Upgradable to Android 4.4)">Android 4.3 Jelly Bean (Upgradable to Android 4.4)</option>
                <option value="Android 4.3 Jelly Bean&nbsp;">Android 4.3 Jelly Bean&nbsp;</option>
                <option value="Android 4.3 optimized with MIUI version 5">Android 4.3 optimized with MIUI version 5</option>
                <option value="Android 4.3(Jelly Bean) (Upgredable)">Android 4.3(Jelly Bean) (Upgredable)</option>
                <option value="Android 4.3(Jelly Bean) + Emotion UI 1.6">Android 4.3(Jelly Bean) + Emotion UI 1.6</option>
                <option value="Android 4.3+Emotion UI 2.0 Lite">Android 4.3+Emotion UI 2.0 Lite</option>
                <option value="Android 4.3, Jelly Bean">Android 4.3, Jelly Bean</option>
                <option value="Android 4.4">Android 4.4</option>
                <option value="Android 4.4 (Kit Kat)&nbsp;">Android 4.4 (Kit Kat)&nbsp;</option>
                <option value="Android 4.4 (Kit-Kat)&nbsp;">Android 4.4 (Kit-Kat)&nbsp;</option>
                <option value="Android 4.4 (MIUI V5) OS system">Android 4.4 (MIUI V5) OS system</option>
                <option value="Android 4.4 + Windows 8.1">Android 4.4 + Windows 8.1</option>
                <option value="Android 4.4 with HTC Sense HTC BlinkFeed">Android 4.4 with HTC Sense HTC BlinkFeed</option>
                <option value="Android 4.4( KitKat)">Android 4.4( KitKat)</option>
                <option value="Android 4.4(Kitkat)">Android 4.4(Kitkat)</option>
                <option value="Android 4.4, KitKat">Android 4.4, KitKat</option>
                <option value="Android 4.4.2">Android 4.4.2</option>
                <option value="Android 4.4.2 (32bit)">Android 4.4.2 (32bit)</option>
                <option value="Android 4.4.2 (KitKat)">Android 4.4.2 (KitKat)</option>
                <option value="Android 4.4.2 Ice Cream Sandwich">Android 4.4.2 Ice Cream Sandwich</option>
                <option value="Android 4.4.2 Kit-Kat">Android 4.4.2 Kit-Kat</option>
                <option value="Android 4.4.3">Android 4.4.3</option>
                <option value="Android 4.4.3 (kitkat)">Android 4.4.3 (kitkat)</option>
                <option value="Android 4.4.4 Jelly bean">Android 4.4.4 Jelly bean</option>
                <option value="Android 4.4/HUAWEI Emotion UI 3.0">Android 4.4/HUAWEI Emotion UI 3.0</option>
                <option value="Android 4.4‎.‎2 Kitikat">Android 4.4‎.‎2 Kitikat</option>
                <option value="Android 5, Lollipop">Android 5, Lollipop</option>
                <option value="Android 5.0">Android 5.0</option>
                <option value="Android 5.0 (Lollipop)">Android 5.0 (Lollipop)</option>
                <option value="Android 5.0.2 (Lollipop), upgradable to 6.0 (Marshmallow)">Android 5.0.2 (Lollipop), upgradable to 6.0 (Marshmallow)</option>
                <option value="Android 5.1 (Lollipop)">Android 5.1 (Lollipop)</option>
                <option value="Android 5.1 (Lollipop), upgradable to 6.0 (Marshmallow)">Android 5.1 (Lollipop), upgradable to 6.0 (Marshmallow)</option>
                <option value="Android 6.0 (Marshmallow)">Android 6.0 (Marshmallow)</option>
                <option value="Android 6.0 (Marshmallow) or 5.0 (Lollipop)">Android 6.0 (Marshmallow) or 5.0 (Lollipop)</option>
                <option value="Android 6.0 Marshmallow with MIUI V8">Android 6.0 Marshmallow with MIUI V8</option>
                <option value="Android 6.0 Operating">Android 6.0 Operating</option>
                <option value="Android 6.0 OS">Android 6.0 OS</option>
                <option value="Android 6.0.1 (Marshmallow)">Android 6.0.1 (Marshmallow)</option>
                <option value="Android 6.1">Android 6.1</option>
                <option value="Android 64bits">Android 64bits</option>
                <option value="Android 7.0 (Nougat)">Android 7.0 (Nougat)</option>
                <option value="Android 7.0 Nougat with EMUI 5.0">Android 7.0 Nougat with EMUI 5.0</option>
                <option value="Android 7.0 Nougat with XOS">Android 7.0 Nougat with XOS</option>
                <option value="Android 7.0+EMUI5.1">Android 7.0+EMUI5.1</option>
                <option value="Android 7.1 (Nougat)">Android 7.1 (Nougat)</option>
                <option value="Android 7.1 (Nougat) with MIUI V8">Android 7.1 (Nougat) with MIUI V8</option>
                <option value="Android 7.1.1 (Nougat)">Android 7.1.1 (Nougat)</option>
                <option value="Android 7.1.2 (Nougat)">Android 7.1.2 (Nougat)</option>
                <option value="Android 8.0 (Oreo)">Android 8.0 (Oreo)</option>
                <option value="Android 8.0 Oreo with&nbsp;EMUI 8.0">Android 8.0 Oreo with&nbsp;EMUI 8.0</option>
                <option value="Android Jelly Bean 4.1">Android Jelly Bean 4.1</option>
                <option value="Android Jelly Bean 4.2">Android Jelly Bean 4.2</option>
                <option value="Android Jelly Bean 4.2.2">Android Jelly Bean 4.2.2</option>
                <option value="Android Jelly bean 4.2.2&nbsp;">Android Jelly bean 4.2.2&nbsp;</option>
                <option value="Android Jelly bean 4.2.3">Android Jelly bean 4.2.3</option>
                <option value="Android Jelly Bean 4.3">Android Jelly Bean 4.3</option>
                <option value="Android Jelly Bean 4.3&nbsp;">Android Jelly Bean 4.3&nbsp;</option>
                <option value="Android Jellybean 4.2">Android Jellybean 4.2</option>
                <option value="Android Jellybean 4.2.2">Android Jellybean 4.2.2</option>
                <option value="Android Jellybean 4.2.2&nbsp;">Android Jellybean 4.2.2&nbsp;</option>
                <option value="Android JellyBean 4.3">Android JellyBean 4.3</option>
                <option value="Android Kitkat 4.4.2">Android Kitkat 4.4.2</option>
                <option value="Android KitKat 4.4.2 (Upgradable to Lollipop)">Android KitKat 4.4.2 (Upgradable to Lollipop)</option>
                <option value="Android Kitkat 4.4.3">Android Kitkat 4.4.3</option>
                <option value="Android KitKat v4.4">Android KitKat v4.4</option>
                <option value="Android Lolipop">Android Lolipop</option>
                <option value="Android Lolipop 5.1">Android Lolipop 5.1</option>
                <option value="Android Lollipop 5.0">Android Lollipop 5.0</option>
                <option value="Android Lollipop 5.1">Android Lollipop 5.1</option>
                <option value="Android Marshmallow">Android Marshmallow</option>
                <option value="Android Marshmallow 6.0">Android Marshmallow 6.0</option>
                <option value="Android Marshmallow 6.0.1">Android Marshmallow 6.0.1</option>
                <option value="Android Marshmallow v6.0">Android Marshmallow v6.0</option>
                <option value="Android Marshmallow v6.0 (EMUI 4.1)">Android Marshmallow v6.0 (EMUI 4.1)</option>
                <option value="Android Nougat 7.0 &nbsp;">Android Nougat 7.0 &nbsp;</option>
                <option value="Android One">Android One</option>
                <option value="Android Operating System">Android Operating System</option>
                <option value="Android OS (Jelly Bean)">Android OS (Jelly Bean)</option>
                <option value="Android OS 5.0 Lollipop">Android OS 5.0 Lollipop</option>
                <option value="Android OS 5.1.1(Lollipop)">Android OS 5.1.1(Lollipop)</option>
                <option value="Android OS 6.0">Android OS 6.0</option>
                <option value="Android OS KitKat">Android OS KitKat</option>
                <option value="Android OS v4.4.2(KitKat)">Android OS v4.4.2(KitKat)</option>
                <option value="Android OS v5.1 (Lollipop)">Android OS v5.1 (Lollipop)</option>
                <option value="Android OS v6.0.1 Marshmallow">Android OS v6.0.1 Marshmallow</option>
                <option value="Android OS, v2.3 (Gingerbread)&nbsp;">Android OS, v2.3 (Gingerbread)&nbsp;</option>
                <option value="Android OS, v4.0.4 (Ice Cream Sandwich), 4.3 (Jelly Bean)">Android OS, v4.0.4 (Ice Cream Sandwich), 4.3 (Jelly Bean)</option>
                <option value="Android OS, v4.1 (Jelly Bean), upgradable to v4.2 (Jelly Bean)">Android OS, v4.1 (Jelly Bean), upgradable to v4.2 (Jelly Bean)</option>
                <option value="Android OS, v4.1 (Jelly Bean), upgradable to v4.2.2 (Jelly Bean)">Android OS, v4.1 (Jelly Bean), upgradable to v4.2.2 (Jelly Bean)</option>
                <option value="Android OS, v4.1 (Jelly Bean), upgradable to v4.2.2 (Jelly Bean)&nbsp;">Android OS, v4.1 (Jelly Bean), upgradable to v4.2.2 (Jelly Bean)&nbsp;</option>
                <option value="Android OS, v4.1.2  Jelly Bean">Android OS, v4.1.2 Jelly Bean</option>
                <option value="Android OS, v4.1.2 (Jelly Bean), upgradаble to v4.4.2 (KitKat)">Android OS, v4.1.2 (Jelly Bean), upgradаble to v4.4.2 (KitKat)</option>
                <option value="Android OS, v4.2">Android OS, v4.2</option>
                <option value="Android OS, v4.2 (Jelly Bean), upgradable to v4.4 (KitKat)">Android OS, v4.2 (Jelly Bean), upgradable to v4.4 (KitKat)</option>
                <option value="Android OS, v4.2 (Jelly Bean), upgradable to v4.4.2 (KitKat)">Android OS, v4.2 (Jelly Bean), upgradable to v4.4.2 (KitKat)</option>
                <option value="Android OS, v4.2 (Jelly Bean)&nbsp;">Android OS, v4.2 (Jelly Bean)&nbsp;</option>
                <option value="Android OS, v4.2.1 (Jelly Bean)">Android OS, v4.2.1 (Jelly Bean)</option>
                <option value="Android OS, v4.2.1 (Jelly Bean)&nbsp;">Android OS, v4.2.1 (Jelly Bean)&nbsp;</option>
                <option value="Android OS, v4.2.2 (Jelly Bean), planned upgrade to v4.4 (KitKat)">Android OS, v4.2.2 (Jelly Bean), planned upgrade to v4.4 (KitKat)</option>
                <option value="Android OS, v4.2.2 (Jelly Bean), up-gradable to v4.4.2 (KitKat)">Android OS, v4.2.2 (Jelly Bean), up-gradable to v4.4.2 (KitKat)</option>
                <option value="Android OS, v4.2.2 (Jelly Bean), upgradable to v4.4.2 (KitKat)">Android OS, v4.2.2 (Jelly Bean), upgradable to v4.4.2 (KitKat)</option>
                <option value="Android OS, v4.2.2 (Jelly Bean)&nbsp;">Android OS, v4.2.2 (Jelly Bean)&nbsp;</option>
                <option value="Android OS, v4.2.2 Jelly Bean">Android OS, v4.2.2 Jelly Bean</option>
                <option value="Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat)">Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat)</option>
                <option value="Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat), upgradable to v5.0 (Lollipop)">Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat), upgradable to v5.0 (Lollipop)</option>
                <option value="Android OS, v4.3 (Jelly Bean)&nbsp;">Android OS, v4.3 (Jelly Bean)&nbsp;</option>
                <option value="Android OS, v4.3 Jelly Bean">Android OS, v4.3 Jelly Bean</option>
                <option value="Android OS, v4.4">Android OS, v4.4</option>
                <option value="Android OS, v4.4 (Kit Kat)">Android OS, v4.4 (Kit Kat)</option>
                <option value="Android OS, v4.4 (KitKat), upgradable to v4.4.3 (KitKat)">Android OS, v4.4 (KitKat), upgradable to v4.4.3 (KitKat)</option>
                <option value="Android OS, v4.4 (KitKat), upgradable to v4.4.4 (KitKat)">Android OS, v4.4 (KitKat), upgradable to v4.4.4 (KitKat)</option>
                <option value="Android OS, v4.4 (KitKat), upgradable to v5.0.2 (Lollipop)">Android OS, v4.4 (KitKat), upgradable to v5.0.2 (Lollipop)</option>
                <option value="Android OS, v4.4 (KitKat)&nbsp;">Android OS, v4.4 (KitKat)&nbsp;</option>
                <option value="Android OS, v4.4.2 (Kit Kat)">Android OS, v4.4.2 (Kit Kat)</option>
                <option value="Android OS, v4.4.2 (KitKat) (Upgredable)">Android OS, v4.4.2 (KitKat) (Upgredable)</option>
                <option value="Android OS, v4.4.2 (KitKat), upgradable to v5.0.2 (Lollipop)">Android OS, v4.4.2 (KitKat), upgradable to v5.0.2 (Lollipop)</option>
                <option value="Android OS, v4.4.2 (KitKat)&nbsp;">Android OS, v4.4.2 (KitKat)&nbsp;</option>
                <option value="Android OS, v4.4.2 Jelly Bean">Android OS, v4.4.2 Jelly Bean</option>
                <option value="Android OS, v4.4.2 KitKat">Android OS, v4.4.2 KitKat</option>
                <option value="Android OS, v4.4.2 KitKat, upgradable to v5.0 (Lollipop)">Android OS, v4.4.2 KitKat, upgradable to v5.0 (Lollipop)</option>
                <option value="Android OS, v4.4.3 (KitKat)">Android OS, v4.4.3 (KitKat)</option>
                <option value="Android OS, v4.4.4 (KitKat)">Android OS, v4.4.4 (KitKat)</option>
                <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.0 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.0 (Lollipop)</option>
                <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.0.1 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.0.1 (Lollipop)</option>
                <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.0.2 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.0.2 (Lollipop)</option>
                <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.0.2/v5.1.1 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.0.2/v5.1.1 (Lollipop)</option>
                <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.1 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.1 (Lollipop)</option>
                <option value="Android OS, v4.4.4 (KitKat), upgradable to v5.1.1 (Lollipop)">Android OS, v4.4.4 (KitKat), upgradable to v5.1.1 (Lollipop)</option>
                <option value="Android OS, v4.4.4 (KitKat), v5.0.2 (Lollipop), planned upgrade to v5.1 (Lollipop)">Android OS, v4.4.4 (KitKat), v5.0.2 (Lollipop), planned upgrade to v5.1 (Lollipop)</option>
                <option value="Android OS, v4.4.x (KitKat)">Android OS, v4.4.x (KitKat)</option>
                <option value="Android OS, v5.0 (Lolipop)">Android OS, v5.0 (Lolipop)</option>
                <option value="Android OS, v5.0 (Lollipop)">Android OS, v5.0 (Lollipop)</option>
                <option value="Android OS, v5.0 (Lollipop), planned upgrade to v6.0 (Marshmallow)">Android OS, v5.0 (Lollipop), planned upgrade to v6.0 (Marshmallow)</option>
                <option value="Android OS, v5.0 (Lollipop), upgradable to v5.1.1 (Lollipop)">Android OS, v5.0 (Lollipop), upgradable to v5.1.1 (Lollipop)</option>
                <option value="Android OS, v5.0.1 (Lollipop)">Android OS, v5.0.1 (Lollipop)</option>
                <option value="Android OS, v5.0.1 (Lollipop), upgradable to v5.1.1 (Lollipop)">Android OS, v5.0.1 (Lollipop), upgradable to v5.1.1 (Lollipop)</option>
                <option value="Android OS, v5.0.2 (Lollipop)">Android OS, v5.0.2 (Lollipop)</option>
                <option value="Android OS, v5.1 (Lollipop)">Android OS, v5.1 (Lollipop)</option>
                <option value="Android OS, v5.1 Lollipop">Android OS, v5.1 Lollipop</option>
                <option value="Android OS, v5.1.1 (Lollipop)">Android OS, v5.1.1 (Lollipop)</option>
                <option value="Android OS, v6.0 (Marshmallow)">Android OS, v6.0 (Marshmallow)</option>
                <option value="Android OS, v6.0 Marshmallow">Android OS, v6.0 Marshmallow</option>
                <option value="Android OS- v4.2 (Jelly Bean)">Android OS- v4.2 (Jelly Bean)</option>
                <option value="Android Smart">Android Smart</option>
                <option value="Android TM 6.0 Marshmallow">Android TM 6.0 Marshmallow</option>
                <option value="Android v4.1.2 Jelly Bean">Android v4.1.2 Jelly Bean</option>
                <option value="Android v4.2 Jelly Bean">Android v4.2 Jelly Bean</option>
                <option value="Android v4.2(JellyBean)">Android v4.2(JellyBean)</option>
                <option value="Android v4.4 (Kitkat)">Android v4.4 (Kitkat)</option>
                <option value="Android V4.4.2">Android V4.4.2</option>
                <option value="Android v4.4.2 (Jelly Bean)">Android v4.4.2 (Jelly Bean)</option>
                <option value="Android v4.4.2 (KitKat)">Android v4.4.2 (KitKat)</option>
                <option value="Android v4.4.2 (KitKat) Upgradable to Android Lollipop">Android v4.4.2 (KitKat) Upgradable to Android Lollipop</option>
                <option value="Android v4.4.2 KitKat">Android v4.4.2 KitKat</option>
                <option value="Android v4.4.4 KitKat">Android v4.4.4 KitKat</option>
                <option value="Android v5.0 Lollipop">Android v5.0 Lollipop</option>
                <option value="Android v5.0.1 Lollipop">Android v5.0.1 Lollipop</option>
                <option value="Android v5.0.2 Lollipop">Android v5.0.2 Lollipop</option>
                <option value="Android v5.1 (Lollipop)">Android v5.1 (Lollipop)</option>
                <option value="Android v5.1 Lollipop">Android v5.1 Lollipop</option>
                <option value="Android v5.1.1 (Color OS)">Android v5.1.1 (Color OS)</option>
                <option value="Android v5.1.1 (Lollipop)">Android v5.1.1 (Lollipop)</option>
                <option value="Android v5.1.1 Lollipop">Android v5.1.1 Lollipop</option>
                <option value="Android v6.0">Android v6.0</option>
                <option value="Android v6.0 (Marshmallow)">Android v6.0 (Marshmallow)</option>
                <option value="Android v6.0.1 (Marshmallow)">Android v6.0.1 (Marshmallow)</option>
                <option value="Android Wear">Android Wear</option>
                <option value="Android Wear OS">Android Wear OS</option>
                <option value="Android with HTC Sense">Android with HTC Sense</option>
                <option value="Android, 4.2 (Jelly Bean)">Android, 4.2 (Jelly Bean)</option>
                <option value="Android, iOS">Android, iOS</option>
                <option value="Android, v4.2.2 (Jelly Bean)">Android, v4.2.2 (Jelly Bean)</option>
                <option value="Android,IOS">Android,IOS</option>
                <option value="Android- 4.1.2 , Jelly Bean">Android- 4.1.2 , Jelly Bean</option>
                <option value="Android- 4.2">Android- 4.2</option>
                <option value="Android- 4.2.2 , Jelly Bean">Android- 4.2.2 , Jelly Bean</option>
                <option value="Android-4.2 Jelly Bean">Android-4.2 Jelly Bean</option>
                <option value="Android-4.4 Kitkat">Android-4.4 Kitkat</option>
                <option value="Android-4.4 Kitkat&nbsp;">Android-4.4 Kitkat&nbsp;</option>
                <option value="Android-v4.4 Kitkat">Android-v4.4 Kitkat</option>
                <option value="Android4.0">Android4.0</option>
                <option value="Android4.4">Android4.4</option>
                <option value="Android7.0 + EMUI5.1">Android7.0 + EMUI5.1</option>
                <option value="Android7.0+EMUI5.1">Android7.0+EMUI5.1</option>
                <option value="AndroidTM 4.2(Jelly Bean)">AndroidTM 4.2(Jelly Bean)</option>
                <option value="AndroidTM 4.2.2">AndroidTM 4.2.2</option>
                <option value="AndroidTM 4.4">AndroidTM 4.4</option>
                <option value="AndroidTM 6.0 Marshmallow">AndroidTM 6.0 Marshmallow</option>
                <option value="AndroidTM 6.0+EMUI 4.1">AndroidTM 6.0+EMUI 4.1</option>
                <option value="AndroidTM Marshmallow">AndroidTM Marshmallow</option>
                <option value="AndroidTM&nbsp;4.2(Jelly Bean)">AndroidTM&nbsp;4.2(Jelly Bean)</option>
                <option value="AndroidTM&nbsp;4.2.2">AndroidTM&nbsp;4.2.2</option>
                <option value="Android&nbsp;4.4( KitKat)">Android&nbsp;4.4( KitKat)</option>
                <option value="Android&nbsp;4.4, Kit-Kat">Android&nbsp;4.4, Kit-Kat</option>
                <option value="Android&nbsp;5.0 (Lollipop)">Android&nbsp;5.0 (Lollipop)</option>
                <option value="Android&nbsp;5.0(Lollipop)">Android&nbsp;5.0(Lollipop)</option>
                <option value="Android™ 4.2.2 (Jelly Bean)">Android™ 4.2.2 (Jelly Bean)</option>
                <option value="Android™ 4.3">Android™ 4.3</option>
                <option value="Android™ 4.4.2 KitKat / Huawei Emotion UI 3.0">Android™ 4.4.2 KitKat / Huawei Emotion UI 3.0</option>
                <option value="Android™ 5.0, Lollipop">Android™ 5.0, Lollipop</option>
                <option value="Android™ M">Android™ M</option>
                <option value="Bar GSM900/DCS1800MHz">Bar GSM900/DCS1800MHz</option>
                <option value="BlackBerry 10 OS, upgradable to v10.1">BlackBerry 10 OS, upgradable to v10.1</option>
                <option value="BlackBerry OS 10.2, upgradable to v10.3.1">BlackBerry OS 10.2, upgradable to v10.3.1</option>
                <option value="BlackBerry OS 10.2.1, upgradable to v10.3.1">BlackBerry OS 10.2.1, upgradable to v10.3.1</option>
                <option value="BlackBerry OS 10.3, upgradable to v10.3.1">BlackBerry OS 10.3, upgradable to v10.3.1</option>
                <option value="BlackBerry OS 10.3.1">BlackBerry OS 10.3.1</option>
                <option value="Bluetooth Version 3.0">Bluetooth Version 3.0</option>
                <option value="China Operating System">China Operating System</option>
                <option value="ColorOS 3.2, based on Android 7.1">ColorOS 3.2, based on Android 7.1</option>
                <option value="Cyanogen 11S based on Android 4.4">Cyanogen 11S based on Android 4.4</option>
                <option value="Desktop PC, IPHONE / IPAD, TV">Desktop PC, IPHONE / IPAD, TV</option>
                <option value="Feature Phone">Feature Phone</option>
                <option value="Firefox v1.3">Firefox v1.3</option>
                <option value="Free Dos">Free Dos</option>
                <option value="Free DOS / Ubuntu Linux 14.04 SP1">Free DOS / Ubuntu Linux 14.04 SP1</option>
                <option value="Free DOS 2.0">Free DOS 2.0</option>
                <option value="Free Dose">Free Dose</option>
                <option value="Free-DOS">Free-DOS</option>
                <option value="FreeDOS 2.0">FreeDOS 2.0</option>
                <option value="Genuine Windows 10">Genuine Windows 10</option>
                <option value="Genuine windows 7 Pro">Genuine windows 7 Pro</option>
                <option value="Genuine Windows 7 Professional">Genuine Windows 7 Professional</option>
                <option value="Genuine Windows 8">Genuine Windows 8</option>
                <option value="Genuine Windows 8.1">Genuine Windows 8.1</option>
                <option value="Genuine Windows 8.1 (64-bit)">Genuine Windows 8.1 (64-bit)</option>
                <option value="Genuine windows 8.1 64Bit">Genuine windows 8.1 64Bit</option>
                <option value="Genuine Windows 8.1 Professional-64bit">Genuine Windows 8.1 Professional-64bit</option>
                <option value="Genuine Windows 8.1, 64 Bit">Genuine Windows 8.1, 64 Bit</option>
                <option value="Google Android 4.2.2 &nbsp;">Google Android 4.2.2 &nbsp;</option>
                <option value="Google Android 4.4 (Kitkat)">Google Android 4.4 (Kitkat)</option>
                <option value="Google Android™ 5.0 (Lollipop)">Google Android™ 5.0 (Lollipop)</option>
                <option value="HDMI, USB x 2.0">HDMI, USB x 2.0</option>
                <option value="Hydrogen OS based on Android 5.1 (Lollipop)">Hydrogen OS based on Android 5.1 (Lollipop)</option>
                <option value="iMac">iMac</option>
                <option value="iOS 5, upgradable to iOS 7.1.2, upgradable to iOS 8&nbsp;">iOS 5, upgradable to iOS 7.1.2, upgradable to iOS 8&nbsp;</option>
                <option value="iOS 6, upgradable to iOS 6.1.4, iOS 7.0.3&nbsp;">iOS 6, upgradable to iOS 6.1.4, iOS 7.0.3&nbsp;</option>
                <option value="iOS 6, upgradable to iOS 7.1.1, planned upgrade to iOS 8">iOS 6, upgradable to iOS 7.1.1, planned upgrade to iOS 8</option>
                <option value="iOS 7.0">iOS 7.0</option>
                <option value="IOS 7.0&nbsp;">IOS 7.0&nbsp;</option>
                <option value="IOS 7.1">IOS 7.1</option>
                <option value="IOS 7.2">IOS 7.2</option>
                <option value="IOS 7.3">IOS 7.3</option>
                <option value="IOS 7.7">IOS 7.7</option>
                <option value="IOS 7.8">IOS 7.8</option>
                <option value="iOS 8, upgradable to iOS 11.1">iOS 8, upgradable to iOS 11.1</option>
                <option value="iOS 8.1">iOS 8.1</option>
                <option value="iOS 8.1, upgradable to iOS 8.3">iOS 8.1, upgradable to iOS 8.3</option>
                <option value="iOS 9, upgradable to iOS 11.2">iOS 9, upgradable to iOS 11.2</option>
                <option value="IOS and Android">IOS and Android</option>
                <option value="iOS, Android">iOS, Android</option>
                <option value="iOS10">iOS10</option>
                <option value="iOS&nbsp;4">iOS&nbsp;4</option>
                <option value="iPhone OS 4, upgradable to iOS 5.1">iPhone OS 4, upgradable to iOS 5.1</option>
                <option value="Jelly Bean (Android 4.2.2)">Jelly Bean (Android 4.2.2)</option>
                <option value="Jelly Bean v2.3.5">Jelly Bean v2.3.5</option>
                <option value="Kitkat 4.4.2">Kitkat 4.4.2</option>
                <option value="KitKat v4.4">KitKat v4.4</option>
                <option value="KitKat v4.4.2">KitKat v4.4.2</option>
                <option value="KitKat v4.4.4">KitKat v4.4.4</option>
                <option value="Linpus Linux">Linpus Linux</option>
                <option value="Linpus™ Linux®">Linpus™ Linux®</option>
                <option value="Linux OS">Linux OS</option>
                <option value="Lollipop v5.0">Lollipop v5.0</option>
                <option value="Lollipop v5.0.1">Lollipop v5.0.1</option>
                <option value="Lollipop v5.1">Lollipop v5.1</option>
                <option value="Lollipop v5.1.1">Lollipop v5.1.1</option>
                <option value="Mac">Mac</option>
                <option value="Mac OS 10.5.8 sau o versiune ulterioara  Mac OS 10.6+">Mac OS 10.5.8 sau o versiune ulterioara Mac OS 10.6+</option>
                <option value="Mac OS 9">Mac OS 9</option>
                <option value="Mac OS Sierra">Mac OS Sierra</option>
                <option value="Mac OS Sierra 10.12">Mac OS Sierra 10.12</option>
                <option value="Mac OS X 10.10 or 10.11">Mac OS X 10.10 or 10.11</option>
                <option value="Mac OS X 10.10 Yosemite">Mac OS X 10.10 Yosemite</option>
                <option value="Mac OS X 10.11 El Capitan">Mac OS X 10.11 El Capitan</option>
                <option value="Mac OS X El Capitan">Mac OS X El Capitan</option>
                <option value="Mac OS X Mountain Lion 10.8">Mac OS X Mountain Lion 10.8</option>
                <option value="Mac OS X Mountain Lion 10.8 &amp; windows supported">Mac OS X Mountain Lion 10.8 &amp; windows supported</option>
                <option value="Mac OS X Mountain Lion v10.8 &amp; Windows supported">Mac OS X Mountain Lion v10.8 &amp; Windows supported</option>
                <option value="Mac OS X Mountain Lion v10.8 &amp;amp">Mac OS X Mountain Lion v10.8 &amp;amp</option>
                <option value="Mac OS X Mountain Lion10.8">Mac OS X Mountain Lion10.8</option>
                <option value="Mac OS X Yosemite">Mac OS X Yosemite</option>
                <option value="Mac OSX Lion &amp;amp; Windows Both supported">Mac OSX Lion &amp;amp; Windows Both supported</option>
                <option value="Mac OSX Mountain Lion 10.8">Mac OSX Mountain Lion 10.8</option>
                <option value="Mac OSX Yosemite  10.10">Mac OSX Yosemite 10.10</option>
                <option value="Mac OSX Yosemite 10.10">Mac OSX Yosemite 10.10</option>
                <option value="macOS">macOS</option>
                <option value="macOS High Sierra">macOS High Sierra</option>
                <option value="MacOS Sierra">MacOS Sierra</option>
                <option value="Marshmallow 6.0">Marshmallow 6.0</option>
                <option value="Marshmallow v6.0">Marshmallow v6.0</option>
                <option value="Marshmallow v6.0.1">Marshmallow v6.0.1</option>
                <option value="MeeGo OS">MeeGo OS</option>
                <option value="MeeGo OS, v1.2 Harmattan">MeeGo OS, v1.2 Harmattan</option>
                <option value="Microsoft Surface Pro 10.6 Windows 8 Tablet">Microsoft Surface Pro 10.6 Windows 8 Tablet</option>
                <option value="Microsoft Windows 10 Home(Genuine)">Microsoft Windows 10 Home(Genuine)</option>
                <option value="Microsoft Windows 10(Genuine)">Microsoft Windows 10(Genuine)</option>
                <option value="Microsoft Windows 7 Microsoft Windows 8 Microsoft Windows 8.1 Microsoft Windows 10 Mac OS 9.0 or lat">Microsoft Windows 7 Microsoft Windows 8 Microsoft Windows 8.1 Microsoft Windows 10 Mac OS 9.0 or lat</option>
                <option value="Microsoft Windows 7 Professional 64-bit">Microsoft Windows 7 Professional 64-bit</option>
                <option value="Microsoft Windows 8 / 7 / Vista / XP / 2000 / ME / 98">Microsoft Windows 8 / 7 / Vista / XP / 2000 / ME / 98</option>
                <option value="Microsoft Windows 8.1 64-bit">Microsoft Windows 8.1 64-bit</option>
                <option value="Microsoft Windows 8.1 with Bing">Microsoft Windows 8.1 with Bing</option>
                <option value="Microsoft Windows Phone 7.5 Mango, upgradable to v7.8">Microsoft Windows Phone 7.5 Mango, upgradable to v7.8</option>
                <option value="Microsoft Windows Phone 8, upgradeable to v8.1">Microsoft Windows Phone 8, upgradeable to v8.1</option>
                <option value="Microsoft Windows Phone 8, upgradeable to v8.1, planned upgrade to Windows 10">Microsoft Windows Phone 8, upgradeable to v8.1, planned upgrade to Windows 10</option>
                <option value="Microsoft Windows Phone 8, upgradeable to v8.1, planned upgrade to Windows 14">Microsoft Windows Phone 8, upgradeable to v8.1, planned upgrade to Windows 14</option>
                <option value="Microsoft Windows Phone 8, upgradeable to v8.2">Microsoft Windows Phone 8, upgradeable to v8.2</option>
                <option value="Microsoft Windows Phone 8, upgradeable to v8.5">Microsoft Windows Phone 8, upgradeable to v8.5</option>
                <option value="Microsoft Windows Phone 8, upgradeable to WP8, upgradeable to v8.1">Microsoft Windows Phone 8, upgradeable to WP8, upgradeable to v8.1</option>
                <option value="Microsoft Windows Phone 8.1, planned upgrade to Windows 10">Microsoft Windows Phone 8.1, planned upgrade to Windows 10</option>
                <option value="Microsoft Windows XP, Vista, 7, 8 Mac OS X 10.8.2">Microsoft Windows XP, Vista, 7, 8 Mac OS X 10.8.2</option>
                <option value="Microsoft Windows XP,Vista, 7, 8.1, 8">Microsoft Windows XP,Vista, 7, 8.1, 8</option>
                <option value="Microsoft Windows® 7 /8 / Vista / XP / 2000 / ME / 98">Microsoft Windows® 7 /8 / Vista / XP / 2000 / ME / 98</option>
                <option value="MIUI 6 based on Android L">MIUI 6 based on Android L</option>
                <option value="MIUI 7.0 (based on Android 6.0 Marshmallow)">MIUI 7.0 (based on Android 6.0 Marshmallow)</option>
                <option value="MIUI V5">MIUI V5</option>
                <option value="MIUI V6 based on Android 4.4.4 KitKat">MIUI V6 based on Android 4.4.4 KitKat</option>
                <option value="Nokia Asha platform 1.1.1">Nokia Asha platform 1.1.1</option>
                <option value="Nokia Asha software platform 1.0, upgradable to v1.4">Nokia Asha software platform 1.0, upgradable to v1.4</option>
                <option value="Nokia Asha software platform 1.1.1, upgradable to v1.4">Nokia Asha software platform 1.1.1, upgradable to v1.4</option>
                <option value="Nokia Asha software platform 1.2, upgradable to v1.4">Nokia Asha software platform 1.2, upgradable to v1.4</option>
                <option value="Nougat v7.0">Nougat v7.0</option>
                <option value="Nucleas">Nucleas</option>
                <option value="OS 4.4.2">OS 4.4.2</option>
                <option value="OS 6.1">OS 6.1</option>
                <option value="OS 7.1">OS 7.1</option>
                <option value="OS iOS 11, upgradable to iOS 11.0.2">OS iOS 11, upgradable to iOS 11.0.2</option>
                <option value="OS X Mavericks">OS X Mavericks</option>
                <option value="OS: Android 4.4 Kitkat">OS: Android 4.4 Kitkat</option>
                <option value="Oxygen OS">Oxygen OS</option>
                <option value="OxygenOS based on Android 5.1.1">OxygenOS based on Android 5.1.1</option>
                <option value="OxygenOS based on Android 7.1.1 Nougat">OxygenOS based on Android 7.1.1 Nougat</option>
                <option value="PlayMemories Home">PlayMemories Home</option>
                <option value="PlayStation 4 system software">PlayStation 4 system software</option>
                <option value="preinstalled macOS">preinstalled macOS</option>
                <option value="Preloaded Windows 10 Home">Preloaded Windows 10 Home</option>
                <option value="Preloaded Windows10 Home 64">Preloaded Windows10 Home 64</option>
                <option value="Real JAVA">Real JAVA</option>
                <option value="Router OS">Router OS</option>
                <option value="RouterOS v6 (64bit)">RouterOS v6 (64bit)</option>
                <option value="Series 40">Series 40</option>
                <option value="Symbian Anna OS, upgradeable to Nokia Belle OS">Symbian Anna OS, upgradeable to Nokia Belle OS</option>
                <option value="Symbian OS 9.2, Series 60 v3.1 UI">Symbian OS 9.2, Series 60 v3.1 UI</option>
                <option value="Symbian^3 OS, upgradable to Nokia Belle OS">Symbian^3 OS, upgradable to Nokia Belle OS</option>
                <option value="Tizen">Tizen</option>
                <option value="Tizen OS">Tizen OS</option>
                <option value="Ubuntu Linux 12.04 / Windows">Ubuntu Linux 12.04 / Windows</option>
                <option value="Ubuntu Linux 12.04 /FreeDOS">Ubuntu Linux 12.04 /FreeDOS</option>
                <option value="webOS">webOS</option>
                <option value="webOS 2.0">webOS 2.0</option>
                <option value="Win 10">Win 10</option>
                <option value="Win 10 Home Edition">Win 10 Home Edition</option>
                <option value="Win 10 Pro">Win 10 Pro</option>
                <option value="Win 8 64 Bit">Win 8 64 Bit</option>
                <option value="Win 8 Pro 64 bit">Win 8 Pro 64 bit</option>
                <option value="Win 8.1">Win 8.1</option>
                <option value="WIN 8.1 PRO">WIN 8.1 PRO</option>
                <option value="Win-10">Win-10</option>
                <option value="Win-10 Home">Win-10 Home</option>
                <option value="Win10">Win10</option>
                <option value="Win10 Home">Win10 Home</option>
                <option value="Win10 Home Geniune Version">Win10 Home Geniune Version</option>
                <option value="Win8.1">Win8.1</option>
                <option value="Win8.1 Home Geniune Version">Win8.1 Home Geniune Version</option>
                <option value="Win9X/ ME/ XP/ VISTA/ W7">Win9X/ ME/ XP/ VISTA/ W7</option>
                <option value="Windos 10">Windos 10</option>
                <option value="Window 10">Window 10</option>
                <option value="Windows + Android">Windows + Android</option>
                <option value="Windows + Mac">Windows + Mac</option>
                <option value="Windows / Mac / Linux">Windows / Mac / Linux</option>
                <option value="Windows 10 Home">Windows 10 Home</option>
                <option value="Windows 10 Home 64-bit English">Windows 10 Home 64-bit English</option>
                <option value="Windows 10 Home Edition">Windows 10 Home Edition</option>
                <option value="Windows 10 Home Licensed Version">Windows 10 Home Licensed Version</option>
                <option value="Windows 10 Licensed">Windows 10 Licensed</option>
                <option value="Windows 10 Pro">Windows 10 Pro</option>
                <option value="Windows 10 PRO - 64 Bit">Windows 10 PRO - 64 Bit</option>
                <option value="Windows 10.1">Windows 10.1</option>
                <option value="Windows 2000 / XP / Vista / 7 / 2003 Server / 2008 Server, Mac OS">Windows 2000 / XP / Vista / 7 / 2003 Server / 2008 Server, Mac OS</option>
                <option value="Windows 2000 / XP / Vista / Win7 / 2008 Server / Various Linux OS">Windows 2000 / XP / Vista / Win7 / 2008 Server / Various Linux OS</option>
                <option value="Windows 2000/ME/XP/Vista/7">Windows 2000/ME/XP/Vista/7</option>
                <option value="Windows 7, ME, XP, 2000, Vista, Mac OS 8.6 and Linux">Windows 7, ME, XP, 2000, Vista, Mac OS 8.6 and Linux</option>
                <option value="Windows 7, ME, XP, 2000, Vista, Mac OS 8.6 and Linux 2.4.0">Windows 7, ME, XP, 2000, Vista, Mac OS 8.6 and Linux 2.4.0</option>
                <option value="Windows 7/ Vista/ XP/ Me/ 2000, Mac OS, Linux">Windows 7/ Vista/ XP/ Me/ 2000, Mac OS, Linux</option>
                <option value="Windows 7/10">Windows 7/10</option>
                <option value="Windows 7/ME/XP/ 2000/Vista">Windows 7/ME/XP/ 2000/Vista</option>
                <option value="Windows 8   Windows 7   Windows 7">Windows 8 Windows 7 Windows 7</option>
                <option value="Windows 8 (64-bit)">Windows 8 (64-bit)</option>
                <option value="Windows 8 64 bits">Windows 8 64 bits</option>
                <option value="Windows 8 64-Bit">Windows 8 64-Bit</option>
                <option value="Windows 8 Pro 64-bit Edition">Windows 8 Pro 64-bit Edition</option>
                <option value="Windows 8 Professional 64-bit">Windows 8 Professional 64-bit</option>
                <option value="Windows 8, 64 Bit">Windows 8, 64 Bit</option>
                <option value="Windows 8, Windows 7, Vista , Windows XP">Windows 8, Windows 7, Vista , Windows XP</option>
                <option value="Windows 8, Windows 7, Windows Vista, Windows XP">Windows 8, Windows 7, Windows Vista, Windows XP</option>
                <option value="Windows 8, Windows Vista, Windows XP">Windows 8, Windows Vista, Windows XP</option>
                <option value="Windows 8.1 (64bit)">Windows 8.1 (64bit)</option>
                <option value="Windows 8.1 (64Bit) English">Windows 8.1 (64Bit) English</option>
                <option value="Windows 8.1 (Home &amp; Student Edition)">Windows 8.1 (Home &amp; Student Edition)</option>
                <option value="Windows 8.1 64 bit">Windows 8.1 64 bit</option>
                <option value="Windows 8.1 64-bit">Windows 8.1 64-bit</option>
                <option value="Windows 8.1 BING">Windows 8.1 BING</option>
                <option value="Windows 8.1 downgradable to Windows 7 pro (64bit)">Windows 8.1 downgradable to Windows 7 pro (64bit)</option>
                <option value="Windows 8.1 License">Windows 8.1 License</option>
                <option value="Windows 8.1 Pro 64 bit">Windows 8.1 Pro 64 bit</option>
                <option value="Windows 8.1 Pro.(64 bits)">Windows 8.1 Pro.(64 bits)</option>
                <option value="Windows 8.1 Single Language">Windows 8.1 Single Language</option>
                <option value="Windows 8.1 Ultrabook">Windows 8.1 Ultrabook</option>
                <option value="Windows 8.1 with Bing">Windows 8.1 with Bing</option>
                <option value="Windows 8.1 with Bing OS">Windows 8.1 with Bing OS</option>
                <option value="Windows 8.1&nbsp;">Windows 8.1&nbsp;</option>
                <option value="Windows 8/7/XP/Vista">Windows 8/7/XP/Vista</option>
                <option value="Windows 8/7/XP/Vista, Mac OS, Linux">Windows 8/7/XP/Vista, Mac OS, Linux</option>
                <option value="Windows 8&nbsp;">Windows 8&nbsp;</option>
                <option value="windows 98 and avobe">windows 98 and avobe</option>
                <option value="Windows 98, 2000, ME, NT, Vista OS , Win xp">Windows 98, 2000, ME, NT, Vista OS , Win xp</option>
                <option value="Windows 98se, 2000, ME, XP, Vista &amp; Win7,Win8 / Win10">Windows 98se, 2000, ME, XP, Vista &amp; Win7,Win8 / Win10</option>
                <option value="Windows OS">Windows OS</option>
                <option value="Windows Vista, Windows 7">Windows Vista, Windows 7</option>
                <option value="Windows Vista, Windows&nbsp;7, and Windows 8">Windows Vista, Windows&nbsp;7, and Windows 8</option>
                <option value="Windows XP and Above, Mac OS: 10.5.8">Windows XP and Above, Mac OS: 10.5.8</option>
                <option value="Windows XP, Vista, 7">Windows XP, Vista, 7</option>
                <option value="Windows XP/Vista/7/8/8.1">Windows XP/Vista/7/8/8.1</option>
                <option value="Windows, Linux">Windows, Linux</option>
                <option value="Windows, MAC">Windows, MAC</option>
                <option value="Windows, MAC and Linux">Windows, MAC and Linux</option>
                <option value="Windows, MAC, Android">Windows, MAC, Android</option>
                <option value="Windows, MacOS, Chrome OS, Linux">Windows, MacOS, Chrome OS, Linux</option>
                <option value="Windows-10">Windows-10</option>
                <option value="Windows-10 Compatible">Windows-10 Compatible</option>
                <option value="Windows/95/98/ME/2000/XP Vista/Win7(NOT compatible with Win10)">Windows/95/98/ME/2000/XP Vista/Win7(NOT compatible with Win10)</option>
                <option value="Windows7/Vista/XP">Windows7/Vista/XP</option>
                <option value="Windows7/Vista/XP/Me/2000/98">Windows7/Vista/XP/Me/2000/98</option>
                <option value="Windows: 98/98SE/ME/2000/XP/Vista">Windows: 98/98SE/ME/2000/XP/Vista</option>
                <option value="Windows: XP, XP Professional (64-bit), Vista, 7, 8, Mac OS X v10.5.8">Windows: XP, XP Professional (64-bit), Vista, 7, 8, Mac OS X v10.5.8</option>
                <option value="Windows® 7, Windows Server® 2008, Windows Vista®, Windows XP/2000, Linux">Windows® 7, Windows Server® 2008, Windows Vista®, Windows XP/2000, Linux</option>
                <option value="Windows® 8">Windows® 8</option>
                <option value="Windows® 8 86x64">Windows® 8 86x64</option>
                <option value="Windows® 8.1">Windows® 8.1</option>
                <option value="Windows® 8.1 , Windows® 8 , Windows® 7">Windows® 8.1 , Windows® 8 , Windows® 7</option>
                <option value="Winwows 10">Winwows 10</option>
                <option value="Works with Win98se, ME, XP, Vista &amp; Win7,Win8">Works with Win98se, ME, XP, Vista &amp; Win7,Win8</option>
                <option value="Works with Win98se, ME, XP, Vista &amp; Win7,Win8, Win10">Works with Win98se, ME, XP, Vista &amp; Win7,Win8, Win10</option>
                <option value="X Yosemite">X Yosemite</option>
                <option value="X Yosemite &amp; Windows Supported">X Yosemite &amp; Windows Supported</option>
                <option value="XP/ 7/ 8/ 8.1/ 10">XP/ 7/ 8/ 8.1/ 10</option>
                <option value="&nbsp;Android">&nbsp;Android</option>
                <option value="&nbsp;Android 5.1">&nbsp;Android 5.1</option>
                <option value="&nbsp;Android OS, v4.2.2 (Jelly Bean)">&nbsp;Android OS, v4.2.2 (Jelly Bean)</option>
                <option value="&nbsp;Android OS, v4.4.2 (KitKat)">&nbsp;Android OS, v4.4.2 (KitKat)</option>
                <option value="Android (Jelly Bean)">Android (Jelly Bean)</option>
                <option value="Android 2.3 (Gingerbread)">Android 2.3 (Gingerbread)</option>
                <option value="Android 2.3 (Gingerbread) upgradable to 4.1.2 (Jelly Bean)">Android 2.3 (Gingerbread) upgradable to 4.1.2 (Jelly Bean)</option>
                <option value="Android 4,2">Android 4,2</option>
                <option value="Android 4.0 (Ice Cream Sandwich)">Android 4.0 (Ice Cream Sandwich)</option>
                <option value="Android 4.0.3 (Ice Cream Sandwich)">Android 4.0.3 (Ice Cream Sandwich)</option>
                <option value="Android 4.0.4 (Ice Cream Sandwich) 4.3 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) 4.3 (Jelly Bean)</option>
                <option value="Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.1.1 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.1.1 (Jelly Bean)</option>
                <option value="Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.1.2 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.1.2 (Jelly Bean)</option>
                <option value="Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.3 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) upgradable to 4.3 (Jelly Bean)</option>
                <option value="Android 4.0.4 (Ice Cream Sandwich) upgradаble to 4.3 (Jelly Bean)">Android 4.0.4 (Ice Cream Sandwich) upgradаble to 4.3 (Jelly Bean)</option>
                <option value="Android 4.1 (Jelly Bean) upgradable to 4.2.2 (Jelly Bean)">Android 4.1 (Jelly Bean) upgradable to 4.2.2 (Jelly Bean)</option>
                <option value="Android 4.1 (Jelly Bean) upgradаble to 4.3 (Jelly Bean)">Android 4.1 (Jelly Bean) upgradаble to 4.3 (Jelly Bean)</option>
                <option value="Android 4.1.2 (Jelly Bean)">Android 4.1.2 (Jelly Bean)</option>
                <option value="Android 4.1.2 (Jelly Bean) upgradable to 4.4 (KitKat)">Android 4.1.2 (Jelly Bean) upgradable to 4.4 (KitKat)</option>
                <option value="Android 4.1.2 (Jelly Bean) upgradаble to 4.4.2 (KitKat)">Android 4.1.2 (Jelly Bean) upgradаble to 4.4.2 (KitKat)</option>
                <option value="Android 4.2 (Jelly Bean) upgradable to 4.4.2 (KitKat)">Android 4.2 (Jelly Bean) upgradable to 4.4.2 (KitKat)</option>
                <option value="Android 4.2 (Jelly Bean) upgradable to 4.4.4 (KitKat)">Android 4.2 (Jelly Bean) upgradable to 4.4.4 (KitKat)</option>
                <option value="Android 4.2 (Jellybean)">Android 4.2 (Jellybean)</option>
                <option value="Android 4.2.2 (Jelly Bean)">Android 4.2.2 (Jelly Bean)</option>
                <option value="Android 4.2.2 (Jelly Bean) planned upgrade to 4.4 (KitKat)">Android 4.2.2 (Jelly Bean) planned upgrade to 4.4 (KitKat)</option>
                <option value="Android 4.2.2 (Jelly Bean) upgradable to 4.3 (Jelly Bean)">Android 4.2.2 (Jelly Bean) upgradable to 4.3 (Jelly Bean)</option>
                <option value="Android 4.2.2 (Jelly Bean) upgradable to 4.4.2 (KitKat)">Android 4.2.2 (Jelly Bean) upgradable to 4.4.2 (KitKat)</option>
                <option value="Android 4.3 (Jelly Bean) planned upgrade to 4.4.2 (KitKat)">Android 4.3 (Jelly Bean) planned upgrade to 4.4.2 (KitKat)</option>
                <option value="Android 4.3 (Jelly Bean) upgradable to 4.4.2 (KitKat)">Android 4.3 (Jelly Bean) upgradable to 4.4.2 (KitKat)</option>
                <option value="Android 4.3 (Jelly Bean) upgradable to 4.4.4 (KitKat)">Android 4.3 (Jelly Bean) upgradable to 4.4.4 (KitKat)</option>
                <option value="Android 4.4 (Kit Kat)">Android 4.4 (Kit Kat)</option>
                <option value="Android 4.4 KitKat">Android 4.4 KitKat</option>
                <option value="Android 6.0.1 Marshmallow">Android 6.0.1 Marshmallow</option>
                <option value="Android OS v4.4.2 (KitKat)">Android OS v4.4.2 (KitKat)</option>
                <option value="Android OS v4.4.2 (KitKat) upgradable to v4.4.3 (KitKat) planned upgrade to v5.0 (Lollipop)">Android OS v4.4.2 (KitKat) upgradable to v4.4.3 (KitKat) planned upgrade to v5.0 (Lollipop)</option>
                <option value="Android OS, v4.2.2 (Jelly Bean)">Android OS, v4.2.2 (Jelly Bean)</option>
                <option value="BlackBerry 10 OS upgradable to 10.2.1">BlackBerry 10 OS upgradable to 10.2.1</option>
                <option value="BlackBerry 10 upgradable to 10.1">BlackBerry 10 upgradable to 10.1</option>
                <option value="BlackBerry 10 upgradable to 10.2.1">BlackBerry 10 upgradable to 10.2.1</option>
                <option value="BlackBerry 10.2 upgradable to 10.2.1">BlackBerry 10.2 upgradable to 10.2.1</option>
                <option value="Helio X20 64-bit Deca-core">Helio X20 64-bit Deca-core</option>
                <option value="Mac OS X Lion">Mac OS X Lion</option>
                <option value="Mac OS X Mavericks&nbsp;">Mac OS X Mavericks&nbsp;</option>
                <option value="Microsoft Windows Phone 8 upgradeable to 8.1">Microsoft Windows Phone 8 upgradeable to 8.1</option>
                <option value="Nokia Asha software platform 1.1.1 upgradable to 1.4">Nokia Asha software platform 1.1.1 upgradable to 1.4</option>
                <option value="Nokia Asha software platform 1.2">Nokia Asha software platform 1.2</option>
                <option value="Nokia X 1.0 (based on Android 4.1.2 Jelly Bean)">Nokia X 1.0 (based on Android 4.1.2 Jelly Bean)</option>
                <option value="Nokia X 2.0 (based on Android 4.3 Jelly Bean)">Nokia X 2.0 (based on Android 4.3 Jelly Bean)</option>
                <option value="Android 9.0 Pie">Android 9.0 Pie</option>
                <option value="Android 8.1 Oreo">Android 8.1 Oreo</option>
                <option value="Android 7.1.2 Nougat">Android 7.1.2 Nougat</option>
                <option value="Android 7.1.1 Nougat">Android 7.1.1 Nougat</option>
                <option value="Android 7.1 Nougat">Android 7.1 Nougat</option>
                <option value="Android 2.0 Éclair">Android 2.0 Éclair</option>
                <option value="Android 2.0.1 Éclair">Android 2.0.1 Éclair</option>
                <option value="Android 2.2.1 Froyo">Android 2.2.1 Froyo</option>
                <option value="Android 2.2.2 Froyo">Android 2.2.2 Froyo</option>
                <option value="Android 2.2.3 Froyo">Android 2.2.3 Froyo</option>
                <option value="Android 2.3.1 Gingerbread">Android 2.3.1 Gingerbread</option>
                <option value="Android 2.3.2 Gingerbread">Android 2.3.2 Gingerbread</option>
                <option value="Android 2.3.7 Gingerbread">Android 2.3.7 Gingerbread</option>
                <option value="Android 3.1 Honeycomb">Android 3.1 Honeycomb</option>
                <option value="Android 3.2.1 Honeycomb">Android 3.2.1 Honeycomb</option>
                <option value="Android 3.2.2 Honeycomb">Android 3.2.2 Honeycomb</option>
                <option value="Android 3.2.3 Honeycomb">Android 3.2.3 Honeycomb</option>
                <option value="Android 3.2.4 Honeycomb">Android 3.2.4 Honeycomb</option>
                <option value="Android 3.2.5 Honeycomb">Android 3.2.5 Honeycomb</option>
                <option value="Android 3.2.6 Honeycomb">Android 3.2.6 Honeycomb</option>
                <option value="Android 4.0.1 Ice Cream Sandwich">Android 4.0.1 Ice Cream Sandwich</option>
                <option value="Android 4.0.2 Ice Cream Sandwich">Android 4.0.2 Ice Cream Sandwich</option>
                <option value="Android 4.2.1 Jellybean">Android 4.2.1 Jellybean</option>
                <option value="Android 4.3.1 Jellybean">Android 4.3.1 Jellybean</option>
                <option value="Android 4.4.1 KitKat">Android 4.4.1 KitKat</option>
                <option value="Android 4.4W KitKat with Wearable Extensions">Android 4.4W KitKat with Wearable Extensions</option>
                <option value="Android 4.4W.1 KitKat with Wearable Extensions">Android 4.4W.1 KitKat with Wearable Extensions</option>
                <option value="Android 4.4W.2 KitKat with Wearable Extensions">Android 4.4W.2 KitKat with Wearable Extensions</option>
                <option value="Android 5.0.1 Lollipop">Android 5.0.1 Lollipop</option>
                <option value="Android 5.0.2 Lollipop">Android 5.0.2 Lollipop</option>
                <option value="Android 5.1.1 Lollipop">Android 5.1.1 Lollipop</option>
              </select>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
              <label class="form-label">Screen Type <span class="text-danger">*</span></label>
              <select class="form-control js-example-basic-single" name="screen_type">
                <option value="AMOLED">AMOLED</option>
                <option value="IPS LCD">IPS LCD</option>
                <option value="TFT LCD">TFT LCD</option>
                <option value="LCD">LCD</option>
                <option value="OLED">OLED</option>
                <option value="Super AMOLED">Super AMOLED</option>
                <option value="VGA">VGA</option>
                <option value="QVGA">QVGA</option>
                <option value="Capacitive LCD">Capacitive LCD</option>
                <option value="Optic AMOLED">Optic AMOLED</option>
              </select>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
              <label class="form-label">Processor Type <span class="text-danger">*</span></label>
              <select class="form-control js-example-basic-single" name="processor_type">
                <option value="Other">Other</option>
                <option value="Single-core">Single-core</option>
                <option value="Dual-core">Dual-core</option>
                <option value="Tri Core">Tri Core</option>
                <option value="Quad-core">Quad-core</option>
                <option value="Octa-core">Octa-core</option>
                <option value="Hexa-core">Hexa-core</option>
                <option value="Deca-core">Deca-core</option>
                <option value="Not Specified">Not Specified</option>
                <option value="AMD">AMD</option>
                <option value="Intel">Intel</option>
                <option value="Intel Core i3">Intel Core i3</option>
                <option value="Intel Core 2 Duo">Intel Core 2 Duo</option>
                <option value="Intel Core i5">Intel Core i5</option>
                <option value="Intel Core i7">Intel Core i7</option>
                <option value="Apple A4">Apple A4</option>
                <option value="Apple A7">Apple A7</option>
                <option value="Apple A8">Apple A8</option>
                <option value="NVIDIA">NVIDIA</option>
                <option value="ARM">ARM</option>
                <option value="Apple A6X">Apple A6X</option>
                <option value="Apple A5">Apple A5</option>
                <option value="Boxchip">Boxchip</option>
                <option value="Mediatek">Mediatek</option>
                <option value="Intel Xeon">Intel Xeon</option>
                <option value="Intel Pentium">Intel Pentium</option>
                <option value="Intel Celeron">Intel Celeron</option>
                <option value="AMD Phenom">AMD Phenom</option>
                <option value="AMD Athlon">AMD Athlon</option>
                <option value="AMD A10">AMD A10</option>
                <option value="AMD A8">AMD A8</option>
                <option value="AMD A6">AMD A6</option>
                <option value="Xeon">Xeon</option>
                <option value="Allwinner">Allwinner</option>
                <option value="Intel Atom">Intel Atom</option>
                <option value="AMD Phenom II">AMD Phenom II</option>
                <option value="AMD E-Series">AMD E-Series</option>
                <option value="AMD Turion">AMD Turion</option>
                <option value="AMD A-Series">AMD A-Series</option>
                <option value="AMD Athlon II">AMD Athlon II</option>
                <option value="Intel Core 2">Intel Core 2</option>
                <option value="Triple-core">Triple-core</option>
                <option value="Intel Core i7-7500U">Intel Core i7-7500U</option>
                <option value="QC">QC</option>
                <option value="Intel Core i5-3317U">Intel Core i5-3317U</option>
                <option value="Intel Atom Z3740">Intel Atom Z3740</option>
                <option value="Intel Core M-5Y10">Intel Core M-5Y10</option>
                <option value="Intel Core i5-4300M">Intel Core i5-4300M</option>
                <option value="Intel Core i5-3210M">Intel Core i5-3210M</option>
                <option value="Intel Core 2 Duo T5450">Intel Core 2 Duo T5450</option>
                <option value="Intel Core i3-2350M">Intel Core i3-2350M</option>
                <option value="Intel Pentium 2117U">Intel Pentium 2117U</option>
                <option value="Intel Core i5-2467M">Intel Core i5-2467M</option>
                <option value="Intel Core Duo P8800">Intel Core Duo P8800</option>
                <option value="Intel Core 2 Duo SU7300">Intel Core 2 Duo SU7300</option>
                <option value="Intel Core i5-2410M">Intel Core i5-2410M</option>
                <option value="A11 Bionic">A11 Bionic</option>
                <option value="Intel Dual Core">Intel Dual Core</option>
                <option value="Octa-core Mediatek MT6592">Octa-core Mediatek MT6592</option>
                <option value="Quad-core Cortex-A7">Quad-core Cortex-A7</option>
                <option value="Cortex-A5">Cortex-A5</option>
                <option value="Intel Core-i3">Intel Core-i3</option>
                <option value="Intel Core-i5">Intel Core-i5</option>
                <option value="64-bit Octa-Core 1.3 GHz Cortex A53">64-bit Octa-Core 1.3 GHz Cortex A53</option>
                <option value="64-bit Snapdragon 8916 1.2 GHz Cortex-A53">64-bit Snapdragon 8916 1.2 GHz Cortex-A53</option>
                <option value="6C Xeon E5">6C Xeon E5</option>
                <option value="ARM Mali T880">ARM Mali T880</option>
                <option value="Blank">Blank</option>
                <option value="Celeron Dual Core">Celeron Dual Core</option>
                <option value="Ci5">Ci5</option>
                <option value="Ci7">Ci7</option>
                <option value="Cortex-A5, Qualcomm MSM7225A">Cortex-A5, Qualcomm MSM7225A</option>
                <option value="Cortex-A5, Qualcomm MSM7225AA">Cortex-A5, Qualcomm MSM7225AA</option>
                <option value="Cortex-A5, Qualcomm MSM7227A Snapdragon">Cortex-A5, Qualcomm MSM7227A Snapdragon</option>
                <option value="Dual-core 1.5 GHz Krait (LTE version)/ Cortex-A9 (Non-LTE)">Dual-core 1.5 GHz Krait (LTE version)/ Cortex-A9 (Non-LTE)</option>
                <option value="Dual-core Cortex A7">Dual-core Cortex A7</option>
                <option value="Dual-core Cortex-A5, Qualcomm MSM8225 Snapdragon">Dual-core Cortex-A5, Qualcomm MSM8225 Snapdragon</option>
                <option value="Dual-core Cortex-A5, Qualcomm MSM8225 Snapdragon S4 Play">Dual-core Cortex-A5, Qualcomm MSM8225 Snapdragon S4 Play</option>
                <option value="Dual-core Cortex-A7, Mediatek MT6572">Dual-core Cortex-A7, Mediatek MT6572</option>
                <option value="Dual-core Cortex-A7, Mediatek MT6572M">Dual-core Cortex-A7, Mediatek MT6572M</option>
                <option value="Dual-core Cortex-A7, Qualcomm MSM8210 Snapdragon 200">Dual-core Cortex-A7, Qualcomm MSM8210 Snapdragon 200</option>
                <option value="Dual-core Cortex-A9 TI OMAP 4470">Dual-core Cortex-A9 TI OMAP 4470</option>
                <option value="Dual-core Cortex-A9, Marvell PXA869">Dual-core Cortex-A9, Marvell PXA869</option>
                <option value="Dual-core Cortex-A9, NovaThor U8500">Dual-core Cortex-A9, NovaThor U8500</option>
                <option value="Dual-core Cortex-A9, Pega-Dual +XMM6262">Dual-core Cortex-A9, Pega-Dual +XMM6262</option>
                <option value="Dual-core Exynos 4212">Dual-core Exynos 4212</option>
                <option value="Dual-core Krait 200, Qualcomm MSM8230 Snapdragon 400">Dual-core Krait 200, Qualcomm MSM8230 Snapdragon 400</option>
                <option value="Dual-core Krait 300, Qualcomm MSM8230AB Snapdragon 400">Dual-core Krait 300, Qualcomm MSM8230AB Snapdragon 400</option>
                <option value="Dual-core Krait 300, Qualcomm Snapdragon 400">Dual-core Krait 300, Qualcomm Snapdragon 400</option>
                <option value="Dual-core Krait, Qualcomm MSM8260A Snapdragon">Dual-core Krait, Qualcomm MSM8260A Snapdragon</option>
                <option value="Dual-core Krait, Qualcomm MSM8930 Snapdragon">Dual-core Krait, Qualcomm MSM8930 Snapdragon</option>
                <option value="Dual-core Krait, Qualcomm MSM8960 Snapdragon">Dual-core Krait, Qualcomm MSM8960 Snapdragon</option>
                <option value="Dual-core Krait, Qualcomm MSM8960T Pro Snapdragon">Dual-core Krait, Qualcomm MSM8960T Pro Snapdragon</option>
                <option value="Dual-core Krait, Qualcomm MSM8960T Snapdragon">Dual-core Krait, Qualcomm MSM8960T Snapdragon</option>
                <option value="Dual-core Krait, Qualcomm Snapdragon S4 Plus MSM8227">Dual-core Krait, Qualcomm Snapdragon S4 Plus MSM8227</option>
                <option value="Dual-core Qualcomm MSM8210 Snapdragon 200">Dual-core Qualcomm MSM8210 Snapdragon 200</option>
                <option value="Dual-core Qualcomm Snapdragon 4">Dual-core Qualcomm Snapdragon 4</option>
                <option value="Dual-core, Qualcomm MSM8227">Dual-core, Qualcomm MSM8227</option>
                <option value="Dual-core, Qualcomm MSM8230 Snapdragon">Dual-core, Qualcomm MSM8230 Snapdragon</option>
                <option value="Mediatek MT6582">Mediatek MT6582</option>
                <option value="Mobile Dual-core">Mobile Dual-core</option>
                <option value="Mobile Octa Core">Mobile Octa Core</option>
                <option value="Mobile Octa-core">Mobile Octa-core</option>
                <option value="Mobile Quad-core">Mobile Quad-core</option>
                <option value="QC Xeon E5">QC Xeon E5</option>
                <option value="Quad-core 1.3 GHz Cortex A7 &amp; dual-core 1.7 GHz Cortex A15">Quad-core 1.3 GHz Cortex A7 &amp; dual-core 1.7 GHz Cortex A15</option>
                <option value="Quad-core 1.3 GHz Cortex A7 &amp; Dual-core 1.7 GHz Cortex A15, Exynos 5260">Quad-core 1.3 GHz Cortex A7 &amp; Dual-core 1.7 GHz Cortex A15, Exynos 5260</option>
                <option value="Quad-core 1.9 GHz Cortex-A15 &amp; Quad-core 1.3 GHz Cortex-A7, Exynos 5 Octa 5420 (N9000)">Quad-core 1.9 GHz Cortex-A15 &amp; Quad-core 1.3 GHz Cortex-A7, Exynos 5 Octa 5420 (N9000)</option>
                <option value="Quad-core 2.3 GHz (US/EMEA)/ 2.5 GHz (Asia China) Krait 400">Quad-core 2.3 GHz (US/EMEA)/ 2.5 GHz (Asia China) Krait 400</option>
                <option value="Quad-core Cortex 1.3 GHz A7 &amp; Dual-core 1.7 GHz Cortex A15, Exynos 5260">Quad-core Cortex 1.3 GHz A7 &amp; Dual-core 1.7 GHz Cortex A15, Exynos 5260</option>
                <option value="Quad-core Cortex-A7, BCM23550">Quad-core Cortex-A7, BCM23550</option>
                <option value="Quad-core Cortex-A7, Mediatek MT6582">Quad-core Cortex-A7, Mediatek MT6582</option>
                <option value="Quad-core Cortex-A7, Mediatek MT6589">Quad-core Cortex-A7, Mediatek MT6589</option>
                <option value="Quad-core Cortex-A7, Mediatek MT8125">Quad-core Cortex-A7, Mediatek MT8125</option>
                <option value="Quad-core Cortex-A7, Qualcomm MSM8212 Snapdragon 200">Quad-core Cortex-A7, Qualcomm MSM8212 Snapdragon 200</option>
                <option value="Quad-core Cortex-A7, Qualcomm MSM8226 Snapdragon 400">Quad-core Cortex-A7, Qualcomm MSM8226 Snapdragon 400</option>
                <option value="Quad-core Cortex-A7, Qualcomm MSM8928 Snapdragon 400">Quad-core Cortex-A7, Qualcomm MSM8928 Snapdragon 400</option>
                <option value="Quad-core Cortex-A7, Qualcomm Snapdragon 400">Quad-core Cortex-A7, Qualcomm Snapdragon 400</option>
                <option value="Quad-core Cortex-A9, Exynos 4412 Quad">Quad-core Cortex-A9, Exynos 4412 Quad</option>
                <option value="Quad-core Cortex-A9, HiSilicon Kirin 910T">Quad-core Cortex-A9, HiSilicon Kirin 910T</option>
                <option value="Quad-core Huawei K3V2">Quad-core Huawei K3V2</option>
                <option value="Quad-core Krait 400, Qualcomm MSM8274 or MSM8974 Snapdragon 800">Quad-core Krait 400, Qualcomm MSM8274 or MSM8974 Snapdragon 800</option>
                <option value="Quad-core Krait 400, Qualcomm MSM8974 Snapdragon 800">Quad-core Krait 400, Qualcomm MSM8974 Snapdragon 800</option>
                <option value="Quad-core Krait 400, Qualcomm MSM8974AB Snapdragon 801">Quad-core Krait 400, Qualcomm MSM8974AB Snapdragon 801</option>
                <option value="Quad-core Krait 400, Qualcomm MSM8974AC Snapdragon 801">Quad-core Krait 400, Qualcomm MSM8974AC Snapdragon 801</option>
                <option value="Quad-core Krait, Qualcomm MDM9215M / APQ8064">Quad-core Krait, Qualcomm MDM9215M / APQ8064</option>
                <option value="Quad-core Turbo">Quad-core Turbo</option>
                <option value="Qualcomm snapdragon">Qualcomm snapdragon</option>
                <option value="Tavor MG1">Tavor MG1</option>
              </select>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
              <label class="form-label">Sim Slots <span class="text-danger">*</span></label>
              <select class="form-control js-example-basic-single" name="sim_slot">
                <option value="2">2</option>
                <option value="1">1</option>
                <option value="Single">Single</option>
                <option value="3 and up">3 and up</option>
                <option value="Dual">Dual</option>
                <option value="Hybird Dual">Hybird Dual</option>
              </select>
            </div>
            <div class="col-md-12 col-lg-6 mt-3">
              <label class="form-label">Resolution <span class="text-danger">*</span></label>
              <select class="form-control js-example-basic-single" name="resolution">
                <option title="HD">HD</option>
                <option title="Full HD">Full HD</option>
                <option title="Others">Others</option>
                <option title="4K UHD">4K UHD</option>
                <option title="QuadHD">QuadHD</option>
                <option title="Full HD+">Full HD+</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      {{--  --}}
      <div class="col-md-12 col-lg-12 colors" style="display: none;" id="6">
        <div class="card">
          <div class="card-body">
            6
          </div>
        </div>
      </div>
      {{--  --}}
      <div class="col-md-12 col-lg-12 colors" style="display: none;" id="7">
        <div class="card">
          <div class="card-body">
            7
          </div>
        </div>
      </div>
      {{--  --}}
      <div class="col-md-12 col-lg-12 colors" style="display: none;" id="8">
        <div class="card">
          <div class="card-body">
            8
          </div>
        </div>
      </div>
      {{--  --}}
      <div class="col-md-12 col-lg-12 colors" style="display: none;" id="9">
        <div class="card">
          <div class="card-body">
            9
          </div>
        </div>
      </div>
      {{-- all details --}}
      <div class="col-md-12 col-lg-12 allDetails" style="display: ;">
        <div class="card mt-3">
          <div class="card-header">
            <h3 class="card-title">Description</h3>
          </div>
          <div class="card-body row">
            <div class="col-md-12 col-lg-12 mt-3">
              <label class="form-label">Short Description <span class="text-danger">*</span></label>
              <textarea class="form-control" rows="7" placeholder="Graphics Memory" name="short_description"></textarea>
            </div>
            <div class="col-md-12 col-lg-12 mt-3">
              <label class="form-label">Long Description <span class="text-danger">*</span></label>
              <textarea class="form-control" rows="15" placeholder="Graphics Memory" name="long_description"></textarea>
            </div>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-header">
            <h3 class="card-title">Variants, Price, Stock</h3>
            <small>Price & Stock </small>
          </div>
          <div class="card-body row">
            <div class="mb-3 col-md-6 col-lg-6">
              <label class="form-label">Color <span class="text-danger">*</span></label>
              <select class="form-control js-example-basic-single" multiple="multiple" name="color[]">
                <option  value="Maroon" >Maroon</option>
                <option value="Red">Red</option>
                <option value="Not Specified">Not Specified</option>
                <option value="Black">Black</option>
                <option value="Blue">Blue</option>
                <option value="Brown">Brown</option>
                <option value="Gold">Gold</option>
                <option value="Grey">Grey</option>
                <option value="Green">Green</option>
                <option value="Beige">Beige</option>
                <option value="Orange">Orange</option>
                <option value="Pink">Pink</option>
                <option value="Purple">Purple</option>
                <option value="Silver">Silver</option>
                <option value="Turquoise">Turquoise</option>
                <option value="White">White</option>
                <option value="Yellow">Yellow</option>
                <option value="Blueberry">Blueberry</option>
                <option value="Chocolate">Chocolate</option>
                <option value="Avocado">Avocado</option>
                <option value="Aqua">Aqua</option>
                <option value="Apricot">Apricot</option>
                <option value="Violet">Violet</option>
                <option value="Blush Pink">Blush Pink</option>
                <option value="Bronze">Bronze</option>
                <option value="Mango">Mango</option>
                <option value="Coffee">Coffee</option>
                <option value="Floral">Floral</option>
                <option value="Mahogany">Mahogany</option>
                <option value="Magenta">Magenta</option>
                <option value="Multicolor">Multicolor</option>
                <option value="Lavender">Lavender</option>
                <option value="Jade">Jade</option>
                <option value="Khaki">Khaki</option>
                <option value="Cream">Cream</option>
                <option value="Olive">Olive</option>
                <option value="Cinnamon">Cinnamon</option>
                <option value="Chili Red">Chili Red</option>
                <option value="Ivory">Ivory</option>
                <option value="Chestnut">Chestnut</option>
                <option value="Cherry">Cherry</option>
                <option value="Charcoal">Charcoal</option>
                <option value="Galaxy">Galaxy</option>
                <option value="Hotpink">Hotpink</option>
                <option value="Camel">Camel</option>
                <option value="Tan">Tan</option>
                <option value="Dark blue">Dark blue</option>
                <option value="Light yellow">Light yellow</option>
                <option value="Rose">Rose</option>
                <option value="Army Green">Army Green</option>
                <option value="Champagne">Champagne</option>
                <option value="Off White">Off White</option>
                <option value="Navy Blue">Navy Blue</option>
                <option value="Emerald Green">Emerald Green</option>
                <option value="Light green">Light green</option>
                <option value="Lake Blue">Lake Blue</option>
                <option value="Deep green">Deep green</option>
                <option value="Fluorescent Yellow">Fluorescent Yellow</option>
                <option value="Dark Brown">Dark Brown</option>
                <option value="Lemon Yellow">Lemon Yellow</option>
                <option value="Light blue">Light blue</option>
                <option value="Burgundy">Burgundy</option>
                <option value="Watermelon red">Watermelon red</option>
                <option value="Fluorescent Green">Fluorescent Green</option>
                <option value="Neon">Neon</option>
                <option value="Light Grey">Light Grey</option>
                <option value="Copper">Copper</option>
                <option value="Chrome">Chrome</option>
                <option value="Neutral">Neutral</option>
                <option value="Cyan">Cyan</option>
                <option value="Navy">Navy</option>
                <option value="Raspberry">Raspberry</option>
                <option value="Multi">Multi</option>
                <option value="Matte Black">Matte Black</option>
                <option value="Light Brown">Light Brown</option>
                <option value="Rose Gold">Rose Gold</option>
                <option value="Peach">Peach</option>
                <option value="Mint">Mint</option>
                <option value="Peanut">Peanut</option>
                <option value="Indigo">Indigo</option>
                <option value="Rainbow">Rainbow</option>
                <option value="Timberland">Timberland</option>
                <option value="Espresso">Espresso</option>
                <option value="Deep Blue">Deep Blue</option>
                <option value="Golden">Golden</option>
                <option value="Jet Black">Jet Black</option>
                <option value="…">…</option>
                <option value="Dark Grey">Dark Grey</option>
                <option value="Fuchsia">Fuchsia</option>
                <option value="Blue Gray">Blue Gray</option>
                <option value="Orchid Grey">Orchid Grey</option>
                <option value="Pearl White">Pearl White</option>
                <option value="Sand">Sand</option>
                <option value="Teal">Teal</option>
                <option value="Cacao">Cacao</option>
                <option value="Wither Black">Wither Black</option>
                <option value="Sand Brown">Sand Brown</option>
                <option value="Dark Ash">Dark Ash</option>
                <option value="Deep Gray">Deep Gray</option>
                <option value="Champagne Pink">Champagne Pink</option>
                <option value="Light Ash">Light Ash</option>
                <option value="Antique White">Antique White</option>
                <option value="Ochre Brown">Ochre Brown</option>
                <option value="Glitter Black">Glitter Black</option>
                <option value="Glitter Blue">Glitter Blue</option>
                <option value="Metallic Cherry">Metallic Cherry</option>
                <option value="Metallic Lilac">Metallic Lilac</option>
                <option value="Metallic Teal">Metallic Teal</option>
                <option value="Space Grey">Space Grey</option>
                <option value="Sky Blue">Sky Blue</option>
                <option value="Light Black">Light Black</option>
                <option value="Rose Red">Rose Red</option>
                <option value="Deep Black">Deep Black</option>
                <option value="Glow Yellow">Glow Yellow</option>
                <option value="Neo Bright">Neo Bright</option>
                <option value="Aqua Blue">Aqua Blue</option>
                <option value="Neutrals">Neutrals</option>
                <option value="Multicolour">Multicolour</option>
                <option value="Blonde">Blonde</option>
                <option value="Light Green">Light Green</option>
                <option value="Dark Green">Dark Green</option>
                <option value="Olive Green">Olive Green</option>
                <option value="Ice Blue">Ice Blue</option>
                <option value="Plum">Plum</option>
                <option value="Tea Pink">Tea Pink</option>
                <option value="Dark Navy">Dark Navy</option>
                <option value="Light Pink">Light Pink</option>
                <option value="Ash White">Ash White</option>
                <option value="Metallic Blue">Metallic Blue</option>
                <option value="British Green">British Green</option>
                <option value="Cool Beige">Cool Beige</option>
                <option value="Metallic Gun">Metallic Gun</option>
                <option value="Light Blue">Light Blue</option>
                <option value="Metallic Grey">Metallic Grey</option>
                <option value="Pearl Black">Pearl Black</option>
                <option value="Rose Metal">Rose Metal</option>
                <option value="Rose Pink">Rose Pink</option>
                <option value="Sea Green">Sea Green</option>
                <option value="Shalimar Rose">Shalimar Rose</option>
                <option value="Smoke Green">Smoke Green</option>
                <option value="Turqouise">Turqouise</option>
                <option value="Urban Titanium">Urban Titanium</option>
                <option value="Wine Red">Wine Red</option>
                <option value="Bora Purple">Bora Purple</option>
                <option value="Grey Green">Grey Green</option>
                <option value="Phantom Black">Phantom Black</option>
                <option value="Gold Pink">Gold Pink</option>
                <option value="Glacier Glow">Glacier Glow</option>
                <option value="Awesome Graphite">Awesome Graphite</option>
                <option value="Awesome Lime">Awesome Lime</option>
                <option value="Graphite">Graphite</option>
                <option value="Titanium Black">Titanium Black</option>
                <option value="Titanium Grey">Titanium Grey</option>
                <option value="Titanium Yellow">Titanium Yellow</option>
                <option value="Titanium Violet">Titanium Violet</option>
                <option value="Onyx Black">Onyx Black</option>
                <option value="Marble Grey">Marble Grey</option>
                <option value="Amber Yellow">Amber Yellow</option>
                <option value="cobalt violet">cobalt violet</option></ul>
              </select>
            </div>
            <div class="mb-3 col-md-6 col-lg-6">
              <label class="form-label">Size <span class="text-danger">*</span></label>
              <select class="form-control js-example-basic-single" multiple="multiple" name="size[]">
                <option value="3XS" >3XS</option>
                <option value="XXS">XXS</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
                <option value="3XL">3XL</option>
                <option value="4XL">4XL</option>
                <option value="5XL">5XL</option>
              </select>
            </div>
            <div class="mb-3 col-md-3 col-lg-3">
              <label class="form-label">Price <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="mb-3 col-md-3 col-lg-3">
              <label class="form-label">Special Price <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Special Price" name="special_price">
            </div>
            <div class="mb-3 col-md-3 col-lg-3">
              <label class="form-label">Quantity <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Quantity" name="quantity">
            </div>
            <div class="mb-3 col-md-3 col-lg-3">
              <label class="form-label">Seller SKU <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="SellerSKU" name="seller_sku">
            </div>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-header">
            <h3 class="card-title">Service & Warranty</h3>
            <small>Sellers can opt to provide warranty for the customers</small>
          </div>
          <div class="card-body row">
            <div class="mb-3 col-md-3 col-lg-3">
              <label class="form-label">Warranty Type <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Price" name="wranty_type">
            </div>
            <div class="mb-3 col-md-3 col-lg-3">
              <label class="form-label">Warranty Period <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Special Price" name="warranty_period">
            </div>
            <div class="mb-3 col-md-3 col-lg-3">
              <label class="form-label">Warranty Policy <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Quantity" name="warranty_policy">
            </div>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-header">
            <h3 class="card-title">Delivery</h3>
            <small>Please ensure you have entered the right package weight (kg) and dimensions (cm) for accurate shipping fee calculations.</small>
          </div>
          <div class="card-body row">
            <div class="mb-3 col-md-12 col-lg-12">
              <label class="form-label">Package Weight (kg) <span class="text-danger">*</span></label>
              <input type="text" class="form-control w-25" placeholder="Package Weight (kg)" name="pkg_Weight">
            </div>
            <label class="form-label">Package Dimensions(cm): Length * Width * Height <span class="text-danger">*</span></label>
            <div class="mb-3 col-md-4 col-lg-4">
              <input type="text" class="form-control" placeholder="Length" name="length">
            </div>
            <div class="mb-3 col-md-4 col-lg-4">
              <input type="text" class="form-control" placeholder="Width" name="width">
            </div>
            <div class="mb-3 col-md-4 col-lg-4">
              <input type="text" class="form-control" placeholder="Height" name="height">
            </div>
            <div class="mb-3 col-md-3 col-lg-3 mt-5">
              <p>Dangerous Goods</p>
            </div>
            <div class="mb-3 col-md-3 col-lg-3 mt-5">
              <input type="checkbox" value="Battery" name="dang_goods[]"> Battery
              <input type="checkbox" value="Flammable" name="dang_goods[]"> Flammable
              <input type="checkbox" value="Liquid" name="dang_goods[]"> Liquid
              <input type="checkbox" value="None" name="dang_goods[]"> None
            </div>
          </div>
        </div>
      </div>
      {{--  --}}
      <div class="col-md-12 col-lg-12 allDetails" style="display: none;">
        <div class="card">
          <div class="card-body">
            <button class="btn btn-outline-dark" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </div>
    {{-- Modal --}}
    <div class="modal modal-blur fade" id="modal-team" tabindex="-1" aria-modal="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Select Phone Features</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="padding: 0px !important; border: unset !important;"></button>
          </div>
          <div class="modal-body">
            <label class="form-check">
              <input class="form-check-input" id="select-all" type="checkbox">
              <span class="form-check-label">Select All</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Dustproof / Waterproof" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label" >Dustproof / Waterproof</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Expandable Memory" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label" >Expandable Memory</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Fingerprint Sensor" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Fingerprint Sensor</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Touchscreen" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Touchscreen</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="GPS" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">GPS</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Compass" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Compass</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="WiFi" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">WiFi</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="NFC" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">NFC</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Always-on Display" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Always-on Display</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Fingerprint" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Fingerprint</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Face Recognition" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Face Recognition</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Accelerometer" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Accelerometer</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Proximity" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Proximity</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="Barometer" name="mobile_feature[]" type="checkbox">
              <span class="form-check-label">Barometer</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-blur fade" id="modal-team1" tabindex="-1" aria-modal="true" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Select Network Connections</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="padding: 0px !important; border: unset !important;"></button>
          </div>
          <div class="modal-body">
            <label class="form-check">
              <input class="form-check-input" id="select-all1" type="checkbox">
              <span class="form-check-label">Select All</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="2G" name="network_conn[]" type="checkbox">
              <span class="form-check-label">2G</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="3G" name="network_conn[]" type="checkbox">
              <span class="form-check-label">3G</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="4G" name="network_conn[]" type="checkbox">
              <span class="form-check-label">4G</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="5G" name="network_conn[]" type="checkbox">
              <span class="form-check-label">5G</span>
            </label>
            <label class="form-check">
              <input class="form-check-input" value="GSM" name="network_conn[]" type="checkbox">
              <span class="form-check-label">GSM</span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </form>
  @endsection 
  @section('script')
  <script>
    document.getElementById('select-all').addEventListener('change', function() {
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
      checkboxes.forEach(function(checkbox) {
        checkbox.checked = document.getElementById('select-all').checked;
      });
    });
  </script>
  <script>
    document.getElementById('select-all1').addEventListener('change', function() {
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
      checkboxes.forEach(function(checkbox) {
        checkbox.checked = document.getElementById('select-all1').checked;
      });
    });
  </script>
  <script>
    CKEDITOR.replace( 'short_description' );
    CKEDITOR.on( 'instanceReady', function( evt )
    {
      var editor = evt.editor;

      editor.on('change', function (e) { 
        var contentSpace = editor.ui.space('contents');
        var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
        var ckeditorFrame = ckeditorFrameCollection[0];
        var innerDoc = ckeditorFrame.contentDocument;
        var innerDocTextAreaHeight = $(innerDoc.body).height();
        console.log(innerDocTextAreaHeight);
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });

    $(function() {
      $('.CategorySelector').change(function(){
        $('.colors').hide();
        $('#' + $(this).val()).show();
        $('.allDetails').show();
      });
    });
  </script>
  <script>
    var categoryDropdown = document.getElementById('category');
    var subcategoryDropdown = document.getElementById('subcategory');

    categoryDropdown.addEventListener('change', function() {
      subcategoryDropdown.innerHTML = '';
      var categoryId = this.value;
      var filteredSubcategories = @json($sub_category->groupBy('cat_id')->toArray())[categoryId];

      filteredSubcategories.forEach(function(subcategory) {
        var option = document.createElement('option');
        option.value = subcategory.id;
        option.text = subcategory.name;
        // option.classList.add('colors'); // Add class attribute
        // option.classList.add(subcategory.id); // Add color-specific class
        subcategoryDropdown.add(option);
      });
    });
  </script>
  @endsection 
