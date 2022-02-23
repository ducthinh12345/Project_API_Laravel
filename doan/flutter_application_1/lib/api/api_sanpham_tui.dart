// ignore_for_file: import_of_legacy_library_into_null_safe, unused_import, non_constant_identifier_names, unused_local_variable, avoid_print

// import 'dart:ffi';

import 'package:flutter/cupertino.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

import '../Models/product.dart';
import '../Models/Product_main.dart';
import 'package:provider/provider.dart';

class Apitui extends ChangeNotifier {
  List<Product_main> lst = [];
  Future<void> fetchProduct_tui() async {
    List<Product_main> tmpList = [];
<<<<<<< HEAD
    final response = await http.get(Uri.parse('http://127.0.0.1:8000/api/SanPham/tui'));
=======
    final response =
        await http.get(Uri.parse('http://192.168.5.186:8000/api/SanPham/tui'));
>>>>>>> dfe176d6a45deda8aa7cad8eb7257de0d5a2d893
    if (response.statusCode == 200) {
      try {
        dynamic object = json.decode(response.body);
        dynamic data = object['data'];
        data.forEach((item) {
          tmpList.add(Product_main.fromJson(item));
        });
      } catch (e) {
        print(e);
      }
      // List ProductMains = jsonDecode(response.body);
      // return ProductMains.map<Product_main>((json) => Product_main.fromJson(json))
      //     .toList();
      lst = tmpList;
      notifyListeners();
    } else {
      throw Exception('Failed to load data');
    }
  }
}
