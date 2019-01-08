<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Market\Listing;
use App\Data\Category;


class ListingController extends Controller {

	public function get($id) {
		$listing = Listing::find($id);
		if($listing) {
			return view('listings.listing', ['listing' => $listing]);
		}
	}

	public function search(Request $request) {
		$listings = Listing::query();
		if($request->catId) {
			$listings->where('category_id', $request->catId);
		}
		if($request->mfg) {
			$listings->where('manufacturer', urldecode($request->mfg));
		}
		return $this->listings($request, $listings);
	}

	public function filter(Request $request) {
		return redirect($request->currentUrl.'?'.http_build_query($request->except(['currentUrl'])));
	}
	
	public function category(Request $request, $category) {
		$cat = Category::where('uri', $category)->first();
		if(!$cat) {
			abort(404);
		}
		return $this->manufacturerList($request, $cat);
	}

	public function categoryAndManufacturer(Request $request, $category, $manufacturer) {
		$cat = Category::where('uri', $category)->first();
		if(!$cat) {
			abort(404);
		}
		$listings = Listing::where('category_id', $cat->id)->whereRaw('lower(manufacturer) = \''.strtolower(urldecode($manufacturer)).'\'');
		return $this->listings($request, $listings);
	}

	public function manufacturerList(Request $request, $category) {
		$manufacturers = \DB::table('listings')->select(\DB::raw('count(*) as listing_count, manufacturer'))->distinct()->where('category_id', $category->id)->groupBy('manufacturer')->orderBy('manufacturer')->get();
		return view('listings.manufacturers', ['manufacturers' => $manufacturers, 'category' => $category]);
	}

	public function listings(Request $request, $listings) {
		// sort listings by a parameter
		if($request->sortBy) {
			switch($request->sortBy) {
				case 'makeAsc':
					$listings = $listings->orderBy('manufacturer', 'ASC');
					break;
				case 'makeDesc':
					$listings = $listings->orderBy('manufacturer', 'DESC');
					break;
				case 'modelAsc':
					$listings = $listings->orderBy('model', 'ASC');
					break;
				case 'modelDesc':
					$listings = $listings->orderBy('model', 'DESC');
					break;
				case 'updateAsc':
					$listings = $listings->orderBy('updated_at', 'ASC');
					break;
				case 'updateDesc':
					$listings = $listings->orderBy('updated_at', 'DESC');
					break;
				case 'priceAsc':
					$listings = $listings->orderBy('price', 'ASC');
					break;
				case 'priceDesc':
					$listings = $listings->orderBy('price', 'DESC');
					break;
				case 'ttAsc':
					$listings = $listings->orderBy('total_time', 'ASC');
					break;
				case 'ttDesc':
					$listings = $listings->orderBy('total_time', 'DESC');
					break;
				case 'yearAsc':
					$listings = $listings->orderBy('year', 'ASC');
					break;
				case 'yearDesc':
					$listings = $listings->orderBy('year', 'DESC');
					break;
				case 'engineAsc':
				
					break;
				case 'engineDesc':
				
					break;
			}
		}

		if($request->pageSize) {
			$listings = $listings->paginate(intval($request->pageSize));

		} else {
			$listings = $listings->paginate(25);
		}


		return view('listings.display', ['listings' => $listings]);
	}


}
