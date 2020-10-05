import 'package:flutter/material.dart';
import 'package:petmais/app/shared/utils/colors.dart';
import 'package:petmais/app/shared/utils/font_style.dart';

class CustomCheckBox extends StatelessWidget {
  final String text;
  final bool value;
  final bool tristate;
  final Function(bool) onChanged;
  final Function() onTap;
  final Color checkColor;
  final Color activeColor;
  final VisualDensity visualDensity;

  const CustomCheckBox({
    @required this.value,
    @required this.onChanged,
    @required this.text,
    this.checkColor = Colors.green,
    this.activeColor = Colors.white,
    this.visualDensity = const VisualDensity(vertical: VisualDensity.minimumDensity),
    this.onTap,
    this.tristate = false,
  });

  @override
  Widget build(BuildContext context) {
    return Container(
      child: GestureDetector(
        onTap: this.onTap,
        child: Row(
          crossAxisAlignment: CrossAxisAlignment.center,
          mainAxisSize: MainAxisSize.max,
          children: <Widget>[
            Theme(
              data: ThemeData(unselectedWidgetColor: DefaultColors.secondary),
              child: Checkbox(    
                tristate: this.tristate,            
                visualDensity: this.visualDensity,
                value: this.value,
                checkColor: DefaultColors.surface ?? this.checkColor,
                activeColor: DefaultColors.secondary ?? this.activeColor,
                onChanged: this.onChanged,
              ),
            ),
            Text(
              
              this.text,
              style: kLabelStyle,
            ),
          ],
        ),
      ),
    );
  }
}
