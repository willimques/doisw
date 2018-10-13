<div class="container">

    <div class="card">

        <div class="col-md-6">
            
            <form method="post" id="multiple_select_form">
                                
                <select name="framework" id="framework" class="form-control selectpicker" data-live-search="true" >
                    <option value="#"></option>
                    <option value="Symfony">Symfony</option>
                    <option value="Codeigniter">Codeigniter</option>
                    <option value="CakePHP">CakePHP</option>
                    <option value="Zend">Zend</option>
                    <option value="Yii">Yii</option>
                    <option value="Slim">Slim</option>
                </select>
                
                
                <br /><br />
                <input type="hidden" name="hidden_framework" id="hidden_framework" />
                <input type="submit" name="submit" class="btn btn-info" value="Submit" />
            </form>
            <br />

        </div>

        <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col" width="120">Quantity</th>
                    <th scope="col" width="120">Price</th>
                    <th scope="col" width="200" class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <figure class="media">
                            <div class="img-wrap"><img src="http://via.placeholder.com/50x50?text=logo"></div>
                            <figcaption class="media-body">
                                <h6 class="title text-truncate">Product name goes here </h6>
                                <dl class="dlist-inline small">
                                    <dt>Size: </dt>
                                    <dd>XXL</dd>
                                </dl>
                                <dl class="dlist-inline small">
                                    <dt>Color: </dt>
                                    <dd>Orange color</dd>
                                </dl>
                            </figcaption>
                        </figure> 
                    </td>
                    <td> 
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>	
                            <option>3</option>	
                            <option>4</option>	
                        </select> 
                    </td>
                    <td> 
                        <div class="price-wrap"> 
                            <var class="price">USD 145</var> 
                            <small class="text-muted">(USD5 each)</small> 
                        </div> <!-- price-wrap .// -->
                    </td>
                    <td class="text-right"> 
                        <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a> 
                        <a href="" class="btn btn-outline-danger"> × Remove</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <figure class="media">
                            <div class="img-wrap"><img src="http://via.placeholder.com/50x50?text=logo"></div>
                            <figcaption class="media-body">
                                <h6 class="title text-truncate">Product name goes here </h6>
                                <dl class="dlist-inline small">
                                    <dt>Size: </dt>
                                    <dd>XXL</dd>
                                </dl>
                                <dl class="dlist-inline small">
                                    <dt>Color: </dt>
                                    <dd>Orange color</dd>
                                </dl>
                            </figcaption>
                        </figure> 
                    </td>
                    <td> 
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>	
                            <option>3</option>	
                            <option>4</option>	
                        </select> 
                    </td>
                    <td> 
                        <div class="price-wrap"> 
                            <var class="price">USD 35</var> 
                            <small class="text-muted">(USD10 each)</small> 
                        </div> <!-- price-wrap .// -->
                    </td>
                    <td class="text-right"> 
                        <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a> 
                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <figure class="media">
                            <div class="img-wrap"><img src="http://via.placeholder.com/50x50?text=logo"></div>
                            <figcaption class="media-body">
                                <h6 class="title text-truncate">Product name goes here </h6>
                                <dl class="dlist-inline small">
                                    <dt>Size: </dt>
                                    <dd>XXL</dd>
                                </dl>
                                <dl class="dlist-inline small">
                                    <dt>Color: </dt>
                                    <dd>Orange color</dd>
                                </dl>
                            </figcaption>
                        </figure> 
                    </td>
                    <td> 
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>	
                            <option>3</option>	
                            <option>4</option>	
                        </select> 
                    </td>
                    <td> 
                        <div class="price-wrap"> 
                            <var class="price">USD 45</var> 
                            <small class="text-muted">(USD15 each)</small> 
                        </div> <!-- price-wrap .// -->
                    </td>
                    <td class="text-right"> 
                        <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a> 
                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> <!-- card.// -->
</div>

<script>

    $(document).ready(function(){
        $('.selectpicker').selectpicker();

        $('#framework').change(function(){
            $('#hidden_framework').val($('#framework').val());
        });

        $('#multiple_select_form').on('submit', function(event){
            event.preventDefault();
            if($('#framework').val() != '')
            {
             alert("teste");
            }
            else
            {
                alert("Please select framework");
                return false;
            }
        });
    });
</script>
