var _0x2eca = ["\x67\x65\x74\x46\x75\x6C\x6C\x59\x65\x61\x72", "\x67\x65\x74\x4D\x6F\x6E\x74\x68", "\x67\x65\x74\x44\x61\x74\x65", "\x63\x68\x61\x6E\x67\x65\x44\x61\x74\x65", "\x64\x61\x74\x65", "\x64\x61\x74\x65\x70\x69\x63\x6B\x65\x72", "\x73\x65\x74\x44\x61\x74\x65", "\x75\x70\x64\x61\x74\x65", "\x66\x6F\x63\x75\x73", "\x23\x63\x68\x65\x63\x6B\x5F\x6F\x75\x74", "\x6F\x6E", "\x23\x63\x68\x65\x63\x6B\x5F\x69\x6E"];
var nowTemp = new Date();
var now = new Date(nowTemp[_0x2eca[0]](), nowTemp[_0x2eca[1]](), nowTemp[_0x2eca[2]](), 0, 0, 0, 0);
var checkin = $(_0x2eca[11])[_0x2eca[5]]({
	todayHighlight: true,
	beforeShowDay: function (_0xe23cx6) {
		return _0xe23cx6.valueOf() >= now.valueOf()
	},
	autoclose: true
})[_0x2eca[10]](_0x2eca[3], function (_0xe23cx4) {
	if (_0xe23cx4[_0x2eca[4]].valueOf() > checkout[_0x2eca[5]](_0x2eca[2]).valueOf() || !checkout[_0x2eca[5]](_0x2eca[2]).valueOf()) {
		var _0xe23cx5 = new Date(_0xe23cx4[_0x2eca[4]]);
		_0xe23cx5[_0x2eca[6]](_0xe23cx5[_0x2eca[2]]() + 1);
		checkout[_0x2eca[5]](_0x2eca[7], _0xe23cx5)
	};
	$(_0x2eca[9])[0][_0x2eca[8]]()
});
var checkout = $(_0x2eca[9])[_0x2eca[5]]({
	beforeShowDay: function (_0xe23cx6) {
		if (!checkin[_0x2eca[5]](_0x2eca[2]).valueOf()) {
			return _0xe23cx6.valueOf() >= new Date().valueOf()
		} else {
			return _0xe23cx6.valueOf() > checkin[_0x2eca[5]](_0x2eca[2]).valueOf()
		}
	},
	autoclose: true
})[_0x2eca[10]](_0x2eca[3], function (_0xe23cx4) {})
