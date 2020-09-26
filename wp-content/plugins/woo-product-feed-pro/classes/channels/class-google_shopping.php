<?php
/**
 * Settings for Google Shopping product feeds
 */
class WooSEA_google_shopping {
	public $google_attributes;

        public static function get_channel_attributes() {
                $sitename = get_option('blogname');

        	$google_attributes = array(
			"Basic product data" => array(
				"Product ID" => array(
					"name" => "id",
					"feed_name" => "g:id",
					"format" => "required",
					"woo_suggest" => "id",
				),
            			"Product title" => array(
					"name" => "title",
					"feed_name" => "g:title",
					"format" => "required",
					"woo_suggest" => "title",
				),
            			"Product description" => array(
					"name" => "description",
					"feed_name" => "g:description",
					"format" => "required",
					"woo_suggest" => "description",
            			),
				"Product URL" => array(
					"name" => "link",
					"feed_name" => "g:link",
					"format" => "required",
					"woo_suggest" => "link",
            			),
            			"Main image URL" => array(
					"name" => "image_link",
					"feed_name" => "g:image_link",
					"format" => "required",
					"woo_suggest" => "image",
				),
				"Additional image URL" => array(
					"name" => "additional_image_link",
					"feed_name" => "g:additional_image_link",
					"format" => "optional",
				),
				"Canonical product URL" => array(
					"name" => "canonical_link",
					"feed_name" => "g:canonical_link", 
					"format" => "optional",
				),
				"Product URL mobile" => array(
					"name" => "mobile_link",
					"feed_name" => "g:mobile_link", 
					"format" => "optional",
				),
			),
			"Price & availability" => array(
            			"Stock status" => array(
					"name" => "availability",
					"feed_name" => "g:availability", 
					"format" => "required",
					"woo_suggest" => "availability",
            			),
				"Availability date" => array(
					"name" => "availability_date",
					"feed_name" => "g:availability_date",
					"format" => "optional",
				),
				"Expiration date" => array(
					"name" => "expiration_date",
					"feed_name" => "g:expiration_date",
					"format" => "optional",
				),
				"Price" => array(
					"name" => "Price",
					"feed_name" => "g:price",
					"format" => "required",
					"woo_suggest" => "price",
				),
				"Sale price" => array(
					"name" => "sale_price",
					"feed_name" => "g:sale_price",
					"format" => "optional",
					"woo_suggest" => "sale_price",
				),
				"Sale price effective date" => array(
					"name" => "sale_price_effective_date",
					"feed_name" => "g:sale_price_effective_date",
					"format" => "optional",
					"woo_suggest" => "sale_price_effective_date",
				),
				"Unit pricing measure" => array(
					"name" => "unit_pricing_measure",
					"feed_name" => "g:unit_pricing_measure",
					"format" => "optional",
				),
				"Unit pricing base measure" => array(
					"name" => "unit_pricing_base_measure",
					"feed_name" => "g:unit_pricing_base_measure",
					"format" => "optional",
				),
				"Cost of goods sold" => array(
					"name" => "cost_of_goods_sold",
					"feed_name" => "g:cost_of_goods_sold",
					"format" => "optional",
				),
				"Installment" => array(
					"name" => "installment",
					"feed_name" => "g:installment",
					"format" => "optional",
				),
				"Subscription cost" => array(
					"name" => "subscription_cost",
					"feed_name" => "g:subscription_cost",
					"format" => "optional",
				),
				"Loyalty points" => array(
					"name" => "loyalty_points",
					"feed_name" => "g:loyalty_points",
					"format" => "optional",
				),
			),
			"Product category" => array(
				"Google product category" => array(
					"name" => "google_product_category",
					"feed_name" => "g:google_product_category",
					"format" => "required",
					"woo_suggest" => "categories",
				),
				"Product type" => array(
					"name" => "product_type",
					"feed_name" => "g:product_type",
					"format" => "optional",
					"woo_suggest" => "product_type",
				),
			),
			"Product identifiers" => array(
				"Brand" => array(
					"name" => "brand",
					"feed_name" => "g:brand",
					"format" => "required",
				),
				"Gtin" => array(
					"name" => "gtin",
					"feed_name" => "g:gtin",
					"format" => "required",
				),
				"MPN" => array(
					"name" => "mpn",
					"feed_name" => "g:mpn",
					"format" => "required",
				),
				"Identifier exists" => array(
					"name" => "identifier_exists",
					"feed_name" => "g:identifier_exists",
					"woo_suggest" => "calculated",
					"format" => "required",
				),
			),
			"Detailed product description" => array(
				"Condition" => array(
					"name" => "condition",
					"feed_name" => "g:condition",
					"format" => "required",
					"woo_suggest" => "condition",
				),
				"Adult" => array(
					"name" => "adult",
					"feed_name" => "g:adult",
					"format" => "optional",
				),
				"Multipack" => array(
					"name" => "multipack",
					"feed_name" => "g:multipack",
					"format" => "optional",
				),
				"Is bundle" => array(
					"name" => "is_bundle",
					"feed_name" => "g:is_bundle",
					"format" => "optional",
				),
				"Energy efficiency class" => array(
					"name" => "energy_efficiency_class",
					"feed_name" => "g:energy_efficiency_class",
					"format" => "optional",
				),
				"Minimum energy efficiency class" => array(
					"name" => "min_energy_efficiency_class",
					"feed_name" => "g:min_energy_efficiency_class",
					"format" => "optional",
				),
				"Maximum energy efficiency class" => array(
					"name" => "max_energy_efficiency_class",
					"feed_name" => "g:max_energy_efficiency_class",
					"format" => "optional",
				),
				"Age group" => array(
					"name" => "age_group",
					"feed_name" => "g:age_group",
					"format" => "optional",
				),
				"Color" => array(
					"name" => "color",
					"feed_name" => "g:color",
					"format" => "optional",
				),
				"Gender" => array(
					"name" => "gender",
					"feed_name" => "g:gender",
					"format" => "optional",
				),
				"Material" => array(
					"name" => "material",
					"feed_name" => "g:material",
					"format" => "optional",
				),
				"Pattern" => array(
					"name" => "pattern",
					"feed_name" => "g:pattern",
					"format" => "optional",
				),
				"Size" => array(
					"name" => "size",
					"feed_name" => "g:size",
					"format" => "optional",
				),
				"Size type" => array(
					"name" => "size_type",
					"feed_name" => "g:size_type",
					"format" => "optional",
				),
				"Size system" => array(
					"name" => "size_system",
					"feed_name" => "g:size_system",
					"format" => "optional",
				),
				"Item group ID" => array(
					"name" => "item_group_id",
					"feed_name" => "g:item_group_id",
					"format" => "required",
					"woo_suggest" => "item_group_id",
				),
			),
			"Shopping campaigns" => array(
				"Adwords redirect (old)" => array(
					"name" => "adwords_redirect",
					"feed_name" => "g:adwords_redirect",
					"format" => "optional",
				),
				"Ads redirect (new)" => array(
					"name" => "ads_redirect",
					"feed_name" => "g:ads_redirect",
					"format" => "optional",
				),
				"Excluded destination" => array(
					"name" => "excluded_destination",
					"feed_name" => "g:excluded_destination",
					"format" => "optional",
				),
				"Custom label 0" => array(
					"name" => "custom_label_0",
					"feed_name" => "g:custom_label_0",
					"format" => "optional",
				),
				"Custom label 1" => array(
					"name" => "custom_label_1",
					"feed_name" => "g:custom_label_1",
					"format" => "optional",
				),
				"Custom label 2" => array(
					"name" => "custom_label_2",
					"feed_name" => "g:custom_label_2",
					"format" => "optional",
				),
				"Custom label 3" => array(
					"name" => "custom_label_3",
					"feed_name" => "g:custom_label_3",
					"format" => "optional",
				),
				"Custom label 4" => array(
					"name" => "custom_label_4",
					"feed_name" => "g:custom_label_4",
					"format" => "optional",
				),
				"Promotion ID" => array(
					"name" => "promotion_id",
					"feed_name" => "g:promotion_id",
					"format" => "optional",
				),
				"Included destination" => array(
					"name" => "included_destination",
					"feed_name" => "included_destination",
					"format" => "optional",
				),
				"Excluded destination" => array(
					"name" => "excluded_destination",
					"feed_name" => "g:excluded_destination",
					"format" => "optional",
				),
				"Ads grouping" => array(
					"name" => "ads_grouping",
					"feed_name" => "g:ads_grouping",
					"format" => "optional",
				),
				"Ads labels" => array(
					"name" => "ads_labels",
					"feed_name" => "g:ads_labels",
					"format" => "optional",
				),
			),
			"Shipping" => array(
				"Shipping" => array(
					"name" => "shipping",
					"feed_name" => "g:shipping",
					"format" => "optional",
				),
				"Shipping label" => array(
					"name" => "shipping_label",
					"feed_name" => "g:shipping_label",
					"format" => "optional",
				),
				"Shipping weight" => array(
					"name" => "shipping_weight",
					"feed_name" => "g:shipping_weight",
					"format" => "optional",
				),
				"Shipping length" => array(
					"name" => "shipping_length",
					"feed_name" => "g:shipping_length",
					"format" => "optional",
				),
				"Shipping width" => array(
					"name" => "shipping_width",
					"feed_name" => "g:shipping_width",
					"format" => "optional",
				),
				"Shipping height" => array(
					"name" => "shipping_height",
					"feed_name" => "g:shipping_height",
					"format" => "optional",
				),
				"Transit time label" => array(
					"name" => "transit_time_label",
					"feed_name" => "g:transit_time_label",
					"format" => "optional",
				),
				"Minimum handling time" => array(
					"name" => "min_handling_time",
					"feed_name" => "g:min_handling_time",
					"format" => "optional",
				),
				"Maximum handling time" => array(
					"name" => "max_handling_time",
					"feed_name" => "g:max_handling_time",
					"format" => "optional",
				),
			),
			"Tax" => array(
				"Tax" => array(
					"name" => "tax",
					"feed_name" => "g:tax",
					"format" => "optional",
				),
				"Tax category" => array(
					"name" => "tax_category",
					"feed_name" => "g:tax_category",
					"format" => "optional",
				),
			),
			"Shopping Actions" => array(
				"Product fee" => array(
					"name" => "product_fee",
					"feed_name" => "g:product_fee",
					"format" => "optional",
				),
				"Purchase quantity limit" => array(
					"name" => "purchase_quantity_limit",
					"feed_name" => "g:purchase_quantity_limit",
					"format" => "optional",
				),
				"Sell on google quantity" => array(
					"name" => "sell_on_google_quantity",
					"feed_name" => "g:sell_on_google_quantity",
					"format" => "optional",
				),
				"Consumer datasheet" => array(
					"name" => "consumer_datasheet",
					"feed_name" => "g:consumer_datasheet",
					"format" => "optional",
				),
				"Consumer notice" => array(
					"name" => "consumer_notice",
					"feed_name" => "g:consumer_notice",
					"format" => "optional",
				),
				"Energy label image link" => array(
					"name" => "energy_label_image_link",
					"feed_name" => "g:energy_label_image_link",
					"format" => "optional",
				),
				"Product detail" => array(
					"name" => "product_detail",
					"feed_name" => "g:product_detail",
					"format" => "optional",
				),
				"Product highlight" => array(
					"name" => "product_highlight",
					"feed_name" => "g:product_highlight",
					"format" => "optional",
				),
				"Return address label" => array(
					"name" => "return_address_label",
					"feed_name" => "g:return_address_label",
					"format" => "optional",
				),
				"Return policy label" => array(
					"name" => "return_policy_label",
					"feed_name" => "g:return_policy_label",
					"format" => "optional",
				),
				"Google funded promotion eligibility" => array(
					"name" => "google_funded_promotion_eligibility",
					"feed_name" => "g:google_funded_promotion_eligibility",
					"format" => "optional",
				),
			),
		);
		return $google_attributes;
	}
}
?>
