<div id="quote-popup">
    
        <div id="quote-popup-background">
        </div>
    
        <div id="quote-popup-content" class="animated speed">
        
            <div id="quote-popup-close"><i class="fa fa-times"></i></div>
            
            <ul id="quote-popup-tabs">
            
                <li data-quote-tab-for="travel-insurance">Travel insurance</li>
                <li data-quote-tab-for="car-insurance">Car insurance</li>
                <li data-quote-tab-for="life-insurance">Life insurance</li>
                <li data-quote-tab-for="house-insurance">House insurance</li>
            
            </ul>

            <div class="quote-forms">

                <!--
                travel insurance
                -->
                <div class="quote-form" data-quote-form-for="travel-insurance">
                
                    <i class="fa fa-bus background-icon"></i>
                
                    <div class="quote-form-background" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
                    </div>
                    
                    <div class="quote-form-content">

                        <h2>Travel Insurance <span>Quote</span></h2>
                        <div class="form">
							<form action="travelquote" method="post">
							{{ csrf_field() }}
								<!--
								<h4>Level of protection: <span class="slider-value quote-form-element" data-name="Level of protection" data-slider-id="travel-protection-level">$<span id="hiddeninput"></span></span></h4>
								<div class="slider" data-slider-min="10000" data-slider-max="1000000" data-slider-start="200000" data-slider-step="10000" data-slider-id="travel-protection-level"></div>
								-->
								<h4>Protection Nivel</h4>
								<input type="text" name="protection" placeholder="EX: $100"/>
								
								<h4>Contact details:</h4>
								<input type="text" class="quote-form-element quote-form-client-name" name="fullname" placeholder="Full Name..." />
								
								<span class="custom-dropdown last">
								
									<select name="persons" class="custom-dropdown-select quote-form-element">
									
										<option value="-">How many persons?</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									
									</select>
								
								</span>
								
								<input type="text" name="number" placeholder="Phone Number..." class="quote-form-element" />
								<input type="text" name="email" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
								
								<h4>Travel:</h4>
								<input type="text" name="destination" placeholder="Destination..." class="quote-form-element" />
								
								<span class="custom-dropdown last">
									
									<select name="howlong" class="custom-dropdown-select quote-form-element">

										<option value="-">How long?</option>
										<option value="less than 1 week">less than 1 week</option>
										<option value="1 week">1 week</option>
										<option value="2 weeks">2 weeks</option>
										<option value="3 weeks">3 weeks</option>
										<option value="4 weeks and more">4 weeks and more</option>

									</select>

								</span>

								<button class="button button-navy-blue send-quote" type="submit" value="add">Get a quote <i class="fa fa-paper-plane-o"></i></button>
								
								<div class="quote-form-thanks">
								
									<div class="quote-form-thanks-content">
									
										Your insurance quote has been sent successfully. 
										<span class="quote-form-thanks-close">Close this notice.</span>
									
									</div>
								
								</div>
							</form>
                        </div>

                    </div>
                
                </div>
                <!--
                car insurance
                -->
                <div class="quote-form" data-quote-form-for="car-insurance">
                
                    <i class="fa fa-car background-icon"></i>
                
                    <div class="quote-form-background" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
                    </div>
                    
                    <div class="quote-form-content">

                        <h2>Car Insurance <span>Quote</span></h2>
                        <div class="form">
							<form action="carquote" method="post">
								{{ csrf_field() }}
								<h4>Contact details:</h4>
								<input type="text" class="quote-form-element quote-form-client-name" name="fullname" placeholder="Full Name..." />
								
								<span class="custom-dropdown last">
								
									<select name="age" class="custom-dropdown-select quote-form-element">
									
										<option value="-">Your age</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
										<option value="76">76</option>
										<option value="77">77</option>
										<option value="78">78</option>
										<option value="79">79</option>
										<option value="80">80</option>
										<option value="81">81</option>
										<option value="82">82</option>
										<option value="83">83</option>
										<option value="84">84</option>
										<option value="85">85</option>
										<option value="86">86</option>
										<option value="87">87</option>
										<option value="88">88</option>
										<option value="89">89</option>
										<option value="90">90</option>
										<option value="91">91</option>
										<option value="92">92</option>
										<option value="93">93</option>
										<option value="94">94</option>
										<option value="95">95</option>
										<option value="96">96</option>
										<option value="97">97</option>
										<option value="98">98</option>
										<option value="99">99</option>
									
									</select>
								
								</span>
								
								<input type="text" name="phonenumber" placeholder="Phone Number..." class="quote-form-element" />
								<input type="text" name="email" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
								
								<h4>Your car</h4>
								<input type="text" name="manufacturer" placeholder="Manufacturer..." class="quote-form-element" />
								<input type="text" name="model" placeholder="Model..." class="quote-form-element last" />

								<span class="custom-dropdown">
								
									<select name="registrationyear" class="custom-dropdown-select quote-form-element">
									
										<option value="-">Registration year</option>
										<option value="2018">2018</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
										<option value="1974">1974</option>
										<option value="1973">1973</option>
										<option value="1972">1972</option>
										<option value="1971">1971</option>
										<option value="1970">1970</option>
										<option value="1969">1969</option>
										<option value="1968">1968</option>
										<option value="1967">1967</option>
										<option value="1966">1966</option>
										<option value="1965">1965</option>
										<option value="1964">1964</option>
										<option value="1963">1963</option>
										<option value="1962">1962</option>
										<option value="1961">1961</option>
										<option value="1960">1960</option>
										<option value="1959">1959</option>
										<option value="1958">1958</option>
										<option value="1957">1957</option>
										<option value="1956">1956</option>
										<option value="1955">1955</option>
										<option value="1954">1954</option>
										<option value="1953">1953</option>
										<option value="1952">1952</option>
										<option value="1951">1951</option>
										<option value="1950">1950</option>
									
									</select>
								
								</span>

								<button class="button button-navy-blue send-quote" type="submit" value="add">Get a quote <i class="fa fa-paper-plane-o"></i></button>
							
								<div class="quote-form-thanks">
								
									<div class="quote-form-thanks-content">
									
										Your insurance quote has been sent successfully. 
										<span class="quote-form-thanks-close">Close this notice.</span>
									
									</div>
								
								</div>
							</form>
                        </div>

                    </div>
                
                </div>
                
                <!--
                life insurance
                -->
                <div class="quote-form" data-quote-form-for="life-insurance">
                
                    <i class="fa fa-umbrella background-icon"></i>
                
                    <div class="quote-form-background" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
                    </div>
                    
                    <div class="quote-form-content">

                        <h2>Life Insurance <span>Quote</span></h2>
                        <div class="form">
							<form action="lifequote" method="post">
							{{ csrf_field() }}
								<!--
								<h4>Level of protection: <span class="slider-value quote-form-element" data-name="Level of protection" data-slider-id="life-protection-level">$<span></span></span></h4>
								<div class="slider" data-slider-min="10000" data-slider-max="1000000" data-slider-start="200000" data-slider-step="10000" data-slider-id="life-protection-level"></div>
								-->
								<h4>Protection Nivel</h4>
								<input type="text" name="protection" placeholder="EX: $100"/>
								
								<h4>Contact details:</h4>
								<input type="text" class="quote-form-element quote-form-client-name" name="fullname" placeholder="Full Name..." />
								
								<span class="custom-dropdown last">
								
									<select name="age" class="custom-dropdown-select quote-form-element">
									
										<option value="-">Your age</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
										<option value="76">76</option>
										<option value="77">77</option>
										<option value="78">78</option>
										<option value="79">79</option>
										<option value="80">80</option>
										<option value="81">81</option>
										<option value="82">82</option>
										<option value="83">83</option>
										<option value="84">84</option>
										<option value="85">85</option>
										<option value="86">86</option>
										<option value="87">87</option>
										<option value="88">88</option>
										<option value="89">89</option>
										<option value="90">90</option>
										<option value="91">91</option>
										<option value="92">92</option>
										<option value="93">93</option>
										<option value="94">94</option>
										<option value="95">95</option>
										<option value="96">96</option>
										<option value="97">97</option>
										<option value="98">98</option>
										<option value="99">99</option>
									
									</select>
								
								</span>
								
								<input type="text" name="phonenumber" placeholder="Phone Number..." class="quote-form-element" />
								<input type="text" name="email" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
								
								<h4>Have you used tobacco or nicotine products in the last 12 months?</h4>
								
								
									<span class="custom-dropdown last">
										
										<select name="products" class="custom-dropdown-select quote-form-element">
									
											<option value="Yes">Yes</option>
											<option value="No">No</option>
										</select>
									
									</span>
								
								
								
								<button class="button button-navy-blue send-quote" type="submit" value="add">Get a quote <i class="fa fa-paper-plane-o"></i></button>
							
								<div class="quote-form-thanks">
								
									<div class="quote-form-thanks-content">
									
										Your insurance quote has been sent successfully. 
										<span class="quote-form-thanks-close">Close this notice.</span>
									
									</div>
								
								</div>
							</form>
                        </div>

                    </div>
                
                </div>
                
                <!--
                house insurance
                -->
                <div class="quote-form" data-quote-form-for="house-insurance">
                
                    <i class="fa fa-home background-icon"></i>
                
                    <div class="quote-form-background" style="background-image: url( 'public/css/webfiles/_img/image.png' );">
                    </div>
                    
                    <div class="quote-form-content">
	
                        <h2>House Insurance <span>Quote</span></h2>
                        <div class="form">
							<form method="post" action="housequote">
								{{ csrf_field() }}
								<h4>Your house:</h4>
								<span class="custom-dropdown">
								
									<select name="sortproperty" class="custom-dropdown-select quote-form-element">
									
										<option value="-">What sort of property is it?</option>
										<option value="House">House</option>
										<option value="Flat / Apartment">Flat / Apartment</option>
										<option value="Bungalow">Bungalow</option>
										<option value="Town house">Town house</option>
										<option value="Other">Other</option>
									
									</select>
								
								</span>
								
								<span class="custom-dropdown last">
								
									<select name="typeproperty" class="custom-dropdown-select quote-form-element">
									
										<option value="-">What type of property is it?</option>
										<option value="Semi-detached">Semi-detached</option>
										<option value="Detached">Detached</option>
										<option value="Link-detached">Link-detached</option>
										<option value="Terraced">Terraced</option>
										<option value="End terrace">End terrace</option>
									
									</select>
								
								</span>
								
								<input type="text" class="quote-form-element" name="whenbuilt" placeholder="Roughly when was it built?" />
								<input type="text" class="quote-form-element last" name="postcode" placeholder="House Postcode" />
							
								<h4>Contact details:</h4>
								<input type="text" class="quote-form-element quote-form-client-name" name="fullname" placeholder="Full Name..." />
								
								<span class="custom-dropdown last">
								
									<select name="yourage" class="custom-dropdown-select quote-form-element">
									
										<option value="-">Your age</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
										<option value="76">76</option>
										<option value="77">77</option>
										<option value="78">78</option>
										<option value="79">79</option>
										<option value="80">80</option>
										<option value="81">81</option>
										<option value="82">82</option>
										<option value="83">83</option>
										<option value="84">84</option>
										<option value="85">85</option>
										<option value="86">86</option>
										<option value="87">87</option>
										<option value="88">88</option>
										<option value="89">89</option>
										<option value="90">90</option>
										<option value="91">91</option>
										<option value="92">92</option>
										<option value="93">93</option>
										<option value="94">94</option>
										<option value="95">95</option>
										<option value="96">96</option>
										<option value="97">97</option>
										<option value="98">98</option>
										<option value="99">99</option>
									
									</select>
								
								</span>
								
								<input type="text" name="phonenumber" placeholder="Phone Number..." class="quote-form-element" />
								<input type="text" name="email" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
							
								<button class="button button-navy-blue send-quote" type="submit" value="add">Get a quote <i class="fa fa-paper-plane-o"></i></button>
							
								<div class="quote-form-thanks">
								
									<div class="quote-form-thanks-content">
									
										Your insurance quote has been sent successfully. 
										<span class="quote-form-thanks-close">Close this notice.</span>
									
									</div>
								
								</div>
							</form>
                        </div>

                    </div>
                
                </div>
            
            </div>
        
        </div>
    
    </div>