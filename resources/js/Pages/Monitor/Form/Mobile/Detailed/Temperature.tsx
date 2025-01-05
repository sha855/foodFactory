import React from 'react';
import TextInput from '@/Components/TextInput';
import { RiCelsiusFill } from 'react-icons/ri';

const Temperature: React.FC = () => {
  return (
    <div className="mb-3">
      <label className="block text-gray-700 text-sm font-medium">
        Field Title
      </label>
      <div className="relative mt-1">
        <TextInput
          type="text"
          className=" !p-1.5 border-0 border-gray-300 rounded w-full"
          required
        />
        <RiCelsiusFill className="absolute top-3 right-2 text-lg w-4 h-4" />
      </div>
    </div>
  );
};
export default Temperature;